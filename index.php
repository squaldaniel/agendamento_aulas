<?php
$nome = 'Chegamos';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Oi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row text-success">
        <h3> Agendamento</h3>
      </div>
      <div class="row text-secondary">
        <div class="col">
          <form action="dados.php" >
            <label>Nome:</label>
            <input type="text" name="nome_pessoa">
            <label>Dia:</label>
            <input type="date" name="data_aula">
            <label>Realizado:</label>
            sim:<input type="radio" value="1" name="aula" name="realizado">
            não:<input type="radio" value="0" name="aula" name="realizado" checked>
            <br/>
            <input type="submit" value="Agendar">
          </form>
        </div>
        <div class="col">
          <table class="table">
            <tr>
              <td>nome</td>
              <td>dia</td>
              <td>realizado</td>
            </tr>
          <?php
            $con = new PDO("mysql:host=localhost;dbname=agendamento", "root", "");
            $sql = 'select * from agendamento';
            $data = $con->query($sql);
            while($linha = $data->fetch(PDO::FETCH_ASSOC)){
                echo '<tr>';
                echo '<td>'.$linha['nome'].'</td>';
                echo '<td>'.$linha['dia'].'</td>';
                if($linha['realizado'] == 1){
                  echo '<td>SIM</td>';  
                } else {
                  echo '<td>NÃO</td>';  
                }
                echo '</tr>';
              };
          ?>
          </table>
        </div>
      </div>
      <div class="row text-danger">
        Rodapé
      </div>
    </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
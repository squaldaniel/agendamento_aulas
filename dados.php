<?php

    // print_r($_GET);

    $con = new PDO("mysql:host=localhost;dbname=agendamento", "root", "");

    $sql = 'insert into agendamento (nome, dia, realizado) values ("'
    .$_GET['nome_pessoa'].'", "'.$_GET['data_aula'].'", '.$_GET['aula'].')';

    // echo $sql;

    $rs = $con->query($sql);
    if ($rs){
        header('Location: index.php');
    } else {
        echo 'faiou!';
    }

?>
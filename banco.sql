create database agendamento;

use agendamento;

create table agendamento(
    id int auto_increment,
    nome varchar(100),
    dia date,
    realizado boolean,
    primary key(id)
);
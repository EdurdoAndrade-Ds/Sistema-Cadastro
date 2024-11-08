<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'users';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($conexao->connect_errno) {
    echo "Erro na conexao";
} else {
    echo "conexao realizada com sucesso";
}
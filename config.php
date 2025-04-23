<?php

$dbHost = 'LocalHost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulariodonacreuza'

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conexao->connect_errno)
{
    echo "Erro";
}
else
{
    echo "conexão efetuada com sucesso";
}

?>
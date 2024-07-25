<?php

$host = "localhost";
$db = "user";
$usuario = "root";
$senha = "";

$mysql = new mysqli($host, $usuario, $senha, $db);
if($mysql->connect_errno){
    echo "Falha ao conectar (" . $mysql->connect_errno . ")" . $mysql->connect_error;
}
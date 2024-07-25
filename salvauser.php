<?php
include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);

$mysql = " INSERT INTO usuarios (nome, email, senha) VALUES ('{$nome}', '{$email}', '{$senha')";

$res=$con->query($mysqli);



?>
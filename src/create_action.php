<?php
require './connect.php';
session_start();
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

if ($nome && $email && $senha) {
    $pdo->query("INSERT INTO usuarios (id, nome, email, senha) values ( null ,'$nome', '$email', '$senha')");
    header("Location: login.php");
    
}
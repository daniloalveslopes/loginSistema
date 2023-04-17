<?php
session_start();
require './create_action.php';
require './connect.php';
// echo $_SESSION['nome '];
$email = filter_input(INPUT_POST, 'email');
$senha = filter_input(INPUT_POST, 'senha');
$dados = [];

$sql = $pdo->query("SELECT * FROM usuarios WHERE senha = '$senha' AND email = '$email'");
$data = $sql->fetchAll(PDO::FETCH_ASSOC);
$_SESSION['n'] = $data[0]['nome'];
$_SESSION['e'] = $data[0]['email'];
// print_r($senhaVa[0]); 
if (isset($data[0])) {
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
    $sql->bindValue(':email', $email);
    $sql->bindValue(':senha', $senha);
    $sql->execute();
    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['logado'] = true;
    header("Location: home.php");

} else {
    header("Location: login.php");
}
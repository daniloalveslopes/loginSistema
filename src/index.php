<?php 
session_start(); 
    $_SESSION['logado'] = false;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    <title>Document</title>
</head>

<body class="h-screen grid place-items-center">
    <div class="containe bg-green-500 p-3 w-1/2 h-96 grid">
        <form action="create_action.php" method="POST" class="flex flex-col justify-center items-center gap-3">
            <input type="text" name="nome" placeholder="seu nome" class="w-2/3 p-3">
            <input type="text" name="email" placeholder="seu email" class="w-2/3 p-3">
            <input type="text" name="senha" placeholder="sua senha" class="w-2/3 p-3">
            <button class="bg-white w-2/3 p-3">Cadastrar</button>
        </form>
        <a href="/prjcts/Login/src/login.php" class="h-5 mt-auto mb-3 w-40 text-center">Já tenho uma conta!</a>
    </div>
</body>

</html>
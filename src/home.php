<?php session_start(); 

if(!$_SESSION['logado']){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    <title>home</title>
</head>
<body class=" grid  place-items-center">
    <header class="w-full bg-green-500 p-5">
        <h1 class="text-4xl font-semibold">home</h1>
    </header>
        <div class="userDados bg-green-500 w-1/2 h-96 p-5 mt-10">
            <h1 class="text-4xl font-semibold text-white">Dados</h1>
            <h1 class="text-xl">nome:<?php echo $_SESSION['n'];?> </h1>
            <h1 class="text-xl">email: <?php echo $_SESSION['e']; ?> </h1>
        </div>
        <a href="/prjcts/Login/src/logOut.php" class=" w-40 bg-teal-400 text-center p-2 ">sair da conta</a>
</body>
</html>
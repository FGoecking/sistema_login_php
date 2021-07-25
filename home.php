<?php
    // conexao
    require_once 'db_connect.php';

    // sessao
    session_start();

    // verificacao
    if(!isset($_SESSION['logado'])):
        header('Location: index.php');
    endif;

    //dados
    $id = $_SESSION['id_usuario'];
    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1> Olá <?php echo $dados['nome'] ?></h1>
    <p> Você é o usuário <?php echo $dados['id'] ?></p>

    <a href="logout.php">Sair</a>
</body>
</html>
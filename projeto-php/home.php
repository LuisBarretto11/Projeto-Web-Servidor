<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header('Location: login.php');
    exit;
}

$usuario = $_SESSION['usuario'];

if(isset($_GET['action']) && $_GET['action'] == 'logout'){
    require_once 'controllers/usuario.controller.php';
    $usuarioController = new UsuarioController();
    $usuarioController->logout();
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
     <?php include('views/home.view.php'); ?>
</body>
</html>

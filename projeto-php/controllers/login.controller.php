<?php

session_start();
require('../models/login.models.php');

function login(){

    $erro = isset($_SESSION['erro']) ? $_SESSION['erro'] : null;

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $email = $_POST['email'] ?? '';
        $senha = $_POST['senha'] ?? '';

        if(autenticar($email, $senha)){

            $_SESSION['logado'] = true;
            $_SESSION['email'] = 'Administrador';

            header('Location: ../home.php');
            exit;

        }else{
            $_SESSION['erro'] = "Email ou Senha incorretos!";
            header('Location: ../login.php');
            exit;
        }
    }

    include ('../views/login.view.php');
}

function logout(){

    session_destroy();
    header('Location: login.php');
    exit;
}

if(isset($_GET['action']) && $_GET['action'] == 'logout'){
    logout();

}else{
    login();
}
?>

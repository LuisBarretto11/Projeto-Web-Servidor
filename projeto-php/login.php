<?php
require_once 'controllers/usuario.controller.php';


session_start();

if(isset($_SESSION['login_error'])){
    $login_error = $_SESSION['login_error'];
    unset($_SESSION['login_error']);
}



$action = $_GET['action'] ?? 'login';

switch($action){
    case 'login':
        require_once 'views/usuario.login.view.php';
        break;
    case 'autenticar':
        $controller = new UsuarioController();
        $controller->login();
        break;
    default:
        require_once 'views/usuario.login.view.php';
        break;
}

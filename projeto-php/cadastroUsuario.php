<?php
require_once 'controllers/usuario.controller.php';

$action = $_GET['action'] ?? 'cadastrar';

switch($action){
    case 'cadastrar':
        require_once 'views/usuario.cadastrar.view.php';
        break;
    case 'store':
        $controller = new UsuarioController();
        $controller->cadastrar();
        break;
    default:
        require_once 'views/usuario.cadastrar.view.php';
        break;
}



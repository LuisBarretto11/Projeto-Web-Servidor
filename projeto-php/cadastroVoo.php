<?php

require_once 'controllers/voo.controller.php';

$action = $_GET['action'] ?? 'cadastrar';

switch($action){
    case 'cadastrar':
        $controller = new VooController();
        $controller->cadastrar();
        break;
    default:
        require_once 'views/voo.cadastro.view.php';
        break;
}
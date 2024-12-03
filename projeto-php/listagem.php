<?php
require_once 'controllers/voo.controller.php';

$vooController =  new VooController();
$action = $_GET['action'] ?? 'listar';

switch($action){
    case 'listar':
        $vooController->listar();
        break;
    case 'excluir':
        $id = $_GET['id'] ?? null;
        if($id){
            $vooController->excluir($id);
            break;
        }
}

require_once 'views/voo.listar.view.php';

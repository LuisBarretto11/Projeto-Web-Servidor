<?php
require_once 'controllers/cadastro.controller.php';

$action = $_GET['action'] ?? 'create';

switch ($action) {
    case 'create':
        mostrarFormulario();
        break;
    case 'store':
        cadastrarVoo();
        break;
    default:
        mostrarFormulario();
}
?>

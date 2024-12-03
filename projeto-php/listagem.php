<?php
require_once 'controllers/voo.controller.php';

$vooController =  new VooController();
$vooController->listar();

require_once 'views/voo.listar.view.php';

<?php
require_once 'models/cadastro.models.php';

function mostrarFormulario($erro = [], $sucesso = '') {
    require 'views/cadastro.view.php';
}

function cadastrarVoo() {
    $dadosVoo = [
        'numero_voo' => $_POST['numero_voo'] ?? '',
        'origem' => $_POST['origem'] ?? '',
        'destino' => $_POST['destino'] ?? '',
        'data' => $_POST['data'] ?? '',
        'horario' => $_POST['horario'] ?? '',
        'status' => $_POST['status'] ?? ''
    ];

    $erro = validarDadoVoo($dadosVoo);

    if (empty($erro)) {
        $sucesso = "Voo cadastrado com sucesso!";
        mostrarFormulario([], $sucesso); 
    } else {
        mostrarFormulario($erro, ''); 
    }
}

?>

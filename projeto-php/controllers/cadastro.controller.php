<?php
require_once 'models/cadastro.models.php';

function mostrarFormulario($erro = [], $sucesso = '') {
    require 'views/cadastro.view.php';
}

function cadastrarVoo() {
    $erro = [];
    
    // Validação simples dos campos
    if (empty($_POST['numero_voo'])) {
        $erro[] = "Número do voo é obrigatório.";
    }
    if (empty($_POST['origem'])) {
        $erro[] = "Origem é obrigatória.";
    }
    if (empty($_POST['destino'])) {
        $erro[] = "Destino é obrigatório.";
    }
    if (empty($_POST['data'])) {
        $erro[] = "Data é obrigatória.";
    }
    if (empty($_POST['horario'])) {
        $erro[] = "Horário é obrigatório.";
    }
    if (empty($_POST['status'])) {
        $erro[] = "Status é obrigatório.";
    }

    // Se houver erros, redirecione de volta para o formulário com os erros
    if (!empty($erro)) {
        $_SESSION['erro'] = $erro;
        header('Location: cadastro.php?action=create');
        exit();
    }

    // Se não houver erros, salvar o voo
    $voo = [
        'numero_voo' => $_POST['numero_voo'],
        'origem' => $_POST['origem'],
        'destino' => $_POST['destino'],
        'data_voo' => $_POST['data'],
        'horario' => $_POST['horario'],
        'status' => $_POST['status'],
    ];

    // Salvar em voos.txt como JSON
    $file = 'voos.txt';
    $voos = [];
    
    if (file_exists($file)) {
        $voos = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    }
    
    // Adicionar o novo voo
    $voos[] = json_encode($voo);
    file_put_contents($file, implode(PHP_EOL, $voos) . PHP_EOL);

    // Redirecionar para a página de listagem após salvar
    header('Location: listagem.php');
    exit();
}


?>

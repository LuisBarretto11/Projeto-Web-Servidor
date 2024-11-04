<?php

function validarDadoVoo($dado) {
    $erro = [];

    if (empty($dado['numero_voo'])) {
        $erro[] = "Número do voo é obrigatório.";
    }

    if (empty($dado['origem'])) {
        $erro[] = "Origem é obrigatória.";
    }

    if (empty($dado['destino'])) {
        $erro[] = "Destino é obrigatório.";
    }

    if (empty($dado['data'])) {
        $erro[] = "Data é obrigatória.";
    }

    if (empty($dado['horario'])) {
        $erro[] = "Hora é obrigatória.";
    }

    if (empty($dado['status'])) {
        $erro[] = "O status é obrigatório";
    }

    return $erro;
}
?>

<?php
require ('../models/listagem.models.php');
require ('../models/listagem.view.php');


class ListagemController {
    public function adicionarVoo() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_GET['action'] == 'adicionar') {
            $numero_voo = $_POST['numero_voo'];
            $origem = $_POST['origem'];
            $destino = $_POST['destino'];
            $data = $_POST['data'];
            $horario = $_POST['horario'];
            $status = $_POST['status'];
        
            // Verifique se os dados foram preenchidos
            if (!empty($numero_voo) && !empty($origem) && !empty($destino) && !empty($data) && !empty($horario) && !empty($status)) {
                $voosModel = new VoosModel();
                $voosModel->adicionarVoo($numero_voo, $origem, $destino, $data, $horario, $status);
        
                // Mensagem de sucesso e redirecionamento
                $_SESSION['mensagem'] = "Voo $numero_voo adicionado com sucesso!";
                header('Location: ../controllers/ListagemController.php?action=listar');
                exit;
            } else {
                // Exibir mensagem de erro se algum campo estiver vazio
                $_SESSION['mensagem'] = "Todos os campos são obrigatórios.";
                header('Location: ../controllers/ListagemController.php?action=adicionar');
                exit;
            }
        }
    }
    }

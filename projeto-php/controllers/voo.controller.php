<?php
require_once 'models/voo.model.php';

class VooController{
    public function listar(){
        $voos = Voo::listar();
        include 'views/voo.listar.view.php';
    }

    public function cadastrar(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $numero_voo = $_POST['numero_voo'] ?? '';
            $origem = $_POST['origem'] ?? '';
            $destino = $_POST['destino'] ?? '';
            $data_voo = $_POST['data_voo'] ?? '';
            $horario = $_POST['horario'] ?? '';
            $status = $_POST['status'] ?? '';

            if(empty($numero_voo) || empty($origem) || empty($destino) || empty($data_voo) || empty($horario) || empty($status)){
                echo "Todos os campos são obrigatorios!";
                return;
            }

            $voo = new Voo($numero_voo, $origem, $destino, $data_voo, $horario, $status);
            Voo::cadastrar($voo);

            echo "Voo cadasstrado com sucesso!";
            header('Location: listagem.php');
            exit();
        }else{
            require_once 'views/voo.cadastro.view.php';
        }
    }

    public function excluir($id){
        Voo::remover($id);
        header('Location: listagem.php');
        exit();
    }
}




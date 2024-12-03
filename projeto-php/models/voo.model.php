<?php

require_once 'conexao.php';
class Voo{

    public $id;
    public $numero_voo;
    public $origem;
    public $destino;
    public $data_voo;
    public $horario;
    public $status;

    public function __construct($numero_voo, $origem, $destino, $data_voo, $horario, $status, $id = null){
        $this->numero_voo = $numero_voo;
        $this->origem = $origem;
        $this->destino = $destino;
        $this->data_voo = $data_voo;
        $this->horario = $horario;
        $this->status = $status;
        $this->id = $id;
    }

    public static function listar(){
        $pdo = Conexao::getConexao();
        $stmt = $pdo->query("SELECT * FROM voos");
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $voos = [];

        foreach($resultados as $row){
            $voos[] = new Voo($row['numero_voo'], $row['origem'], $row['destino'], $row['data_voo'], $row['horario'], $row['status'], $row['id']);
        }
        return $voos;
    }

    public static function cadastrar(Voo $voo){
        $pdo = Conexao::getConexao();
        $stmt = $pdo->prepare("INSERT INTO voos (numero_voo, origem, destino, data_voo, horario, status) VALUES (:numero_voo, :origem, :destino, :data_voo, :horario, :status)");
        $stmt->execute([
            ':numero_voo' => $voo->numero_voo,
            ':origem' => $voo->origem,
            ':destino' => $voo->destino,
            ':data_voo' => $voo->data_voo,
            ':horario' => $voo->horario,
            ':status' => $voo->status
        ]);
    }

    public static function remover($id){
        $pdo = Conexao::getConexao();
        $stmt = $pdo->prepare("DELETE FROM voos WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
}



<?php
require_once 'conexao.php';

class Usuario{
    public $id;
    public $nome;
    public $email;
    public $senha;

    public function __construct($nome, $email, $senha, $id = null){
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->id = $id; 
    }

    public static function cadastrar(Usuario $usuario){
        $pdo = Conexao::getConexao();
        $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
        $stmt->execute([
            ':nome' => $usuario->nome,
            ':email' => $usuario->email,
            ':senha' => $usuario->senha
        ]);
    }

    public static function buscarPorEmail($email){
        $pdo = Conexao::getConexao();
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->execute([':email' => $email]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if($row){
            return new Usuario($row['nome'], $row['email'], $row['senha'], $row['$id']);
        }
        return null;
    }

    public static function listar(){
        $pdo = Conexao::getConexao();
        $stmt = $pdo->query("SELECT * FROM usuarios");
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $usuarios = [];
        foreach($resultados as $row){
            $usuarios[] = new Usuario($row['nome'], $row['email'], $row['senha'], $row['id']);
        }
        return $usuarios;
    }
}
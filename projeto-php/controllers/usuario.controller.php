<?php
require_once 'models/usuario.model.php';

class UsuarioController{
    public function cadastrar(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $nome = $_POST['nome'] ?? '';
            $email = $_POST['email'] ?? '';
            $senha = $_POST['senha'] ?? '';

            if(empty($nome) || empty($email) || empty($senha)){
                echo "Todos os campos são obrigatorios!";
                return;
            }

            $usuario = new Usuario($nome, $email, $senha);
            Usuario::cadastrar($usuario);

            echo "Usuario cadastrado com sucesso!";
            header('Location: login.php');

        }else{
            require_once 'views/usuario.cadastro.view.php';
        }
    }

    public function login(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $email = $_POST['email'] ?? '';
            $senha = $_POST['senha'] ?? '';

            if(empty($email) || empty($senha)){
                $_SESSION['login_error'] = "Email e senha são obrigatorios.";
                header('Location: login.php');
                exit();
            }

            $usuario = Usuario::buscarPorEmail($email);

            if($usuario && $usuario->senha === $senha){
                session_start();
                $_SESSION['usuario'] = $usuario;

                header('Location: home.php');
                exit();
            }else{
                $_SESSION['login_error'] = "EMAIL OU SENHA INCORRETA!";
                header('Location: login.php');
                exit();
            }
        }else{
            require_once 'views/usuario.login.view.php';
        }
    }

    public function logout(){
        session_start();
        session_destroy();
        header('Location: login.php');
        exit();
    }
}
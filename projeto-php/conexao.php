<?php
class Conexao{
    private static $host = 'localhost';
    private static $db = 'sistema_voos';
    private static $user = 'root';
    private static  $password = '';
    private static $pdo;

    public static function getConexao(){
        if(!self::$pdo){
            try{
                self::$pdo = new PDO(
                "mysql:host=" . self::$host . ";dbname=" . self::$db,
                self::$user, self::$password);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                die("Erro na conexão com o banco de dados: " . $e->getMessage());
            }
        }

        return self::$pdo;
    }
}
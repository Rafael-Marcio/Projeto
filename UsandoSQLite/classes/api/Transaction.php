<?php
require_once '../utils/Utils.php';
class Transaction
{
    private static $conn;

    private function __construct()
    {
        //em Branco
    }
    
    
    public static function open()
    {
        //abrindo a Transação com o Banco de Dados
        self::$conn = Connection::open();
        //Iniciando uma Conexão
        self::$conn->beginTransaction();
    }
    
    public static function close()
    {

        if(self::$conn) {

            //COMIT dos procedimentos
            self::$conn->commit();
            //liberando a conexão
            self::$conn = null;
            // echo '</br></br>';
            // echo "Classe Transaction Diz: Transação Feita, Commit e Banco Fechado";
        }
    }
    public static function getConnection()
    {
        //Retorna a Conexão ativa
        self::$conn = Connection::open();
        return self::$conn;
    }

    public static function rollback()
    {

        if (self::$conn) {

            //Cancelar todas alterações Feitas
            self::$conn->rollback();
            //Libera a Conexão
            self::$conn = null;
            echo "<br> Erro RollBack<br>";
        }
    }
}
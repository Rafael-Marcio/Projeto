<?php
class Connection

{
    private static $conn;
    private function __construct()
    {
        //em Branco
    }
    public static function open()

    {
        //verificando se existe o arquivo Config.ini
        if (file_exists("../../config/config.ini")) {
            $db = parse_ini_file("../../config/config.ini");
        } else {
            throw new Exception("Arquivo ../../config/config.ini não encontrado");
        }
        //verificando as variaveis no config.ini e verificando se existem
        //
        $user = isset($db['user']) ? $db['user'] : null;
        $pass = isset($db['pass']) ? $db['pass'] : null;
        $name = isset($db['name']) ? $db['name'] : null;
        $host = isset($db['host']) ? $db['host'] : null;
        $type = isset($db['type']) ? $db['type'] : null;
        $port = isset($db['port']) ? $db['port'] : null;

        //qual será o Tipo de Banco de Dados Usado no Sistema?
        try {
            switch ($type) {
                case 'pgsql':
                    //$port = isset()

                    break;
                case 'mysql':
                    $port = isset($db['port']) ? $db['port'] : '3306';
                    self::$conn = new PDO("mysql:host={$host};port={$port};dbname={$name}", $user, $pass);
                    break;
                case 'sqlite':
                    self::$conn = new PDO("sqlite:{../../bd/Blog.db}");
                    //echo '</br>';
                    //echo "Classe Connection DIZ: Conectado ao Banco SQLITE {$name} com Sucesso! </br></br>" ;
                    break;
            }
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return self::$conn;
        } catch (Exception $error) {
            echo "Erro ao Conectar Classe Connection";
            echo "<pre>";
            print_r($error);
            exit;
        }
    }
}

?>
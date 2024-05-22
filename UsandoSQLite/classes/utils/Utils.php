<?php
class Utils
{
    private static $timestamp;
    public static function getDataHora()
    {

        date_default_timezone_set('America/Sao_Paulo');
        self::$timestamp = date('d-m-Y H:i:s');
        return self::$timestamp;
    }
    public static function log($sql, $RA)
    {

        //Criando um LOG das ações no Banco de Dados
        $arquivo = './logger/log.txt';
        $timestamp = Utils::getDataHora();
        $message = $timestamp . " - $RA executou a seguinte instrução SQL:  $sql" . PHP_EOL;
        // Lê o conteúdo atual do arquivo, se existir ele preenche nesta variável com o que tem no TXT se não preenche com vazio
        $existingData = file_exists($arquivo) ? file_get_contents($arquivo) : '';

        // Concatena os novos dados com o conteúdo existente
        $newData = $message . $existingData;

        // Escreve o conteúdo concatenado de volta no início do arquivo
        file_put_contents($arquivo, $newData);
    }
}
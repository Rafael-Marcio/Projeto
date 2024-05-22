<?php

    // Verificar se não há nenhum parâmetro de classe ou método na URL
if (!isset($_REQUEST['class']) && !isset($_REQUEST['method'])) {
    header("Location: index.php?class=Index");
    
    exit(); // Para garantir que o script pare de ser executado após o redirecionamento
}else{
    $class = $_REQUEST['class'];
}


//Rodando classes automaticamente
spl_autoload_register(function ($class) {
    //Obs: Devem estar no mesmo diretório, caso contrário deve-se 
    //adicionar o caminho
    if (file_exists('./classes/' . $class . '.php')) {
        require_once './classes/' . $class . '.php';
    }
});
//Verificando se existe parâmetro class na URL
$classe = $_REQUEST['class'];

//Verificando se existe a passagem de método na URL
$metodo = isset($_REQUEST['method']) ? $_REQUEST['method'] : null;

//Verificando se existe a classe
if (class_exists($classe)) {

    $pagina = new $classe($_REQUEST);
  

    //Verificando se existe o método
    if (!empty($metodo) ) {

        $pagina->$metodo($_REQUEST);
       
    }
    if($classe === "Index"){
        $pagina->show();
    } else {
        if (isset($_SESSION['usuario'])) {
            //demais páginas somente podem ser mostradas caso haja um usuário autenticado
            $pagina->show();
        } else {

            header('Location: http://localhost:/UsandoSQLite/index.php?class=Index');
            exit;
        }
    }

}
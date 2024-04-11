<?php
    require_once("funcoes.php");
    $tarefa = [];
    $tarefa["id"] = 691;
    $tarefa["tarefa"] = "Programar";
    $tarefa["data"] = "01/05/2024";
    $tarefa["hora"] = "18:00";

    echo "<pre>";
    echo "primeira listagem:  ";
    print_r(list_Tarefa());
    echo ("<br>--------------");
    echo "resultado DELETAR:  ";
    echo delete_Tarefa(685);
    echo ("<br>--------------");
    echo "segunda listagem:  ";
    print_r(list_Tarefa());
    echo ("<br>--------------");
    echo "Tarefa :  ";
    print_r(get_tarefa(689));
    echo ("<br>--------------");
    echo "Inserido:  ";
    // print_r(Insert_Tarefa("Programar","20/04/2024","20:00","2806"));
    echo ("<br>--------------");
    echo "Update:  ";
    print_r(update_Tarefa($tarefa));
    echo ("<br>--------------");
?>
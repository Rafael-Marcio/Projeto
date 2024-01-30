<?php
require_once('Biblioteca/biblioteca.php');
session_start();
if(!isset($_SESSION['email'])){

    header('Location:' . $url_sistema . 'login.php');
    session_destroy(); 
    exit(); 
}
<?php
require_once('Biblioteca/biblioteca.php');
session_start();
$email = $_SESSION['email'];
if(!isset($_SESSION['email'])){

    header('Location:' . $url_sistema . 'login.php');
    session_destroy(); 
    exit(); 
}
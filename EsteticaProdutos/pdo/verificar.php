<?php
require_once("pdo/biblioteca.php");
session_start();
if (!isset($_SESSION['email'])) {

   header('Location:' . $url_sistema . 'login.php');
   
   exit();

}
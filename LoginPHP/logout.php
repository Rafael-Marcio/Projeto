<?php
require_once("Biblioteca/biblioteca.php");
session_start();
session_destroy();
header('Location:' . $url_sistema . 'login.php');
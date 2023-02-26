<?php
@session_start();

include 'Config.php';



$conecta = new mysqli(DB_HOUST, DB_USER, DB_PASS, DB_NAME) or die("Connect failed: %s\n". $conecta->error);

$conecta->query("SET NAMES 'utf8'");
$connect = new PDO("mysql:host=".DB_HOUST.";dbname=".DB_NAME.";charset=utf8mb4", DB_USER, DB_PASS);

?>
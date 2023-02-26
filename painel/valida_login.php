<?php

require_once('ConexaoMysql.php');
$email = trim($_POST['email']);
$senha = trim($_POST['senha']);

$sql = "SELECT * FROM usuarios WHERE email='{$email}' and senha='{$senha}'";
$result = mysqli_fetch_assoc(mysqli_query($conecta, $sql));
if ($result) {
    $_SESSION['login'] = true;
    $_SESSION['email'] = $result['email'];
    $_SESSION['senha'] = $result['senha'];
    header('Location: index.php');
} else {
    header('Location: login.php');
}

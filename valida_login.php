<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include_once "Conexao.php";

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

// Recupera o login
$email = isset($_POST["usuario"]) ? addslashes(trim($_POST["usuario"])) : FALSE;
// Recupera a senha, a criptografando em MD5
$senha = isset($_POST["senha"]) ? trim($_POST["senha"]) : FALSE;

$senha = md5($senha);

// Usuário não forneceu a senha ou o login
if (!$email || !$senha) {
    echo "Você deve digitar sua senha e login!";
    exit;
}

$result = mysqli_query($conexao, "SELECT * FROM usuarios WHERE usuario='$usuario' and senha = '$senha' LIMIT 1");
 
if (mysqli_num_rows($result) > 0) {
    $row = $result->fetch_assoc();

    $_SESSION["id"] = $row["id"];
    $_SESSION["nome"] = $row["nome"];
    $_SESSION["usuario"] = $usuario;
    $_SESSION["senha"] = $senha;
  
    $sql = "UPDATE usuarios SET online = 1 WHERE id = ?";

    $sqlprep = $conexao->prepare($sql);
    $sqlprep->bind_param("i", $_SESSION["id"]);
    $sqlprep->execute();
header("location: index.php");
   
} else {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('Location: FormLogin.php?login=erro');
}
?>
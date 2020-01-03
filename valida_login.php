<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include_once "Conexao.php";

$email = $_POST["email"];
$senha = $_POST["senha"];

// Recupera o login
$email = isset($_POST["email"]) ? addslashes(trim($_POST["email"])) : FALSE;
// Recupera a senha, a criptografando em MD5
$senha = isset($_POST["senha"]) ?trim($_POST["senha"]) : FALSE;

$senha = md5($senha);

// Usuário não forneceu a senha ou o login
if(!$email || !$senha)
{
    echo "Você deve digitar sua senha e login!";
    exit;
}

$result = mysqli_query($conexao,"SELECT * FROM usuarios WHERE email='$email' and senha = '$senha' LIMIT 1") or die(error);

if(mysqli_num_rows($result) > 0 )
{
    $row = $result->fetch_assoc();
    $_SESSION["id"] = $row["id"];
    $_SESSION["email"] = $email;
    $_SESSION["senha"] = $senha;
    $_SESSION["nome"] = $row["nome"];
   

    $sql = "UPDATE usuarios SET online = 1 WHERE id = ?";

    $sqlprep = $conexao->prepare($sql);
    $sqlprep->bind_param("i", $_SESSION["id"]);
    $sqlprep->execute();

    header('Location:index.php');
}
else{
    unset ($_SESSION['email']);
    unset ($_SESSION['senha']);
    header('Location: FormLogin.php?login=erro');

}


?>
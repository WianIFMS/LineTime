<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include_once "conexao.php";

$chave = $_POST["chave"];


// Recupera o login
$chave = isset($_POST["chave"]) ? addslashes(trim($_POST["chave"])) : FALSE;

// Usuário não forneceu a senha ou o login
if(!$chave)
{
    echo "Você deve digitar sua chave!";
    exit;
}

$result = mysqli_query($conexao,"SELECT * FROM empresas WHERE chave='$chave'  LIMIT 1") or die(error);

if(mysqli_num_rows($result) > 0 )
{
    $row = $result->fetch_assoc();
    $_SESSION["id"] = $row["id_empresa"];
    $_SESSION["chave"] = $chave;
    $_SESSION["cnpj"] = $row["cnpj"];
    $_SESSION["nome"] = $row["nome"];
    $_SESSION["telefone"] = $row["telefone"];
    $_SESSION["email"] = $row["email"];
    $_SESSION["cidade"] = $row["cidade"];
    $_SESSION["uf"] = $row["uf"];
    

    $sql = "UPDATE empresas SET online = 1 WHERE id_empresa = ?";

    $sqlprep = $conexao->prepare($sql);
    $sqlprep->bind_param("i", $_SESSION["id"]);
    $sqlprep->execute();

    header('Location:ListaPostagem.php');
}
else{
    unset ($_SESSION['chave']);
    
    header('Location: index.html?login=erro');

}


?>
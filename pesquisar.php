<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
if (!isset($_SESSION['email']) && !isset($_SESSION['senha'])) {
    header("Location: FormLogin.php");
}

require_once"Conexao.php";

$pesquisar = $_POST['pesquisar'];
$result = "SELECT * FROM usuarios WHERE nome LIKE '%$pesquisar%' LIMIT 20";
$resultado = mysqli_query($conexao, $result);

while ($rows_cursos = mysqli_fetch_array($resultado)) {
    //echo $rows_cursos['nome']."<br>";
    echo "<img src=" . $rows_cursos['foto_perfil'] . ">";
    echo "<a href=\"perfil.php", " \">" . $rows_cursos['nome'] . "</a><br>";
}
?> 

<?php

require_once("Conexao.php");
session_start();

$sql = "UPDATE usuarios SET online = 0 WHERE id = ?";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("i", $_SESSION["id"]);
$sqlprep->execute();

//Destrói a sessão inciada
session_destroy();

header('Location: FormLogin.php');
?>
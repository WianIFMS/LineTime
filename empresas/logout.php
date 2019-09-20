<?php
require_once("conexao.php");
session_start();

$sql = "UPDATE empresas SET online = 0 WHERE id_empresa = ?";

$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("i", $_SESSION["id"]);
$sqlprep->execute();

//Destrói a sessão inciada
session_destroy();

header('Location: administracao.html');



?>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once"Conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];

$sql = "UPDATE usuarios set nome=? where id=?";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("si", $nome, $id);
$sqlprep->execute();

header("location: Configuracoes.php");

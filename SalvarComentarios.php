<?php

require_once"Conexao.php";
session_start();

$sql = "SELECT * FROM usuarios WHERE id = ?";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("i", $vetorUmRegistro["id_usuario"]);
$sqlprep->execute();
$resultadoSql = $sqlprep->get_result();
$usuario = $resultadoSql->fetch_assoc();

$id = $_POST['id'];
$comentario = $_POST['comentario'];
$id_usuario = $_SESSION['id'];

if ($id == 0) {
    $sql = "INSERT INTO comentarios(comentario, id_usuario) values(?,?)";
    $sqlprep = $conexao->prepare($sql);
    $sqlprep->bind_param("si", $comentario, $id_usuario);
    $sqlprep->execute();
} else {
//se o id for 0 eh uma atualização (update)
    $sql = "UPDATE comentarios set comentario=? where id=?";
    $sqlprep = $conexao->prepare($sql);
    $sqlprep->bind_param("si", $comentario, $id);
    $sqlprep->execute();
    $msgOk = "";
}
?><?php header("Location: index.php"); ?>

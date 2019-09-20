<?php

include_once("conexao.php");

$id = $_GET['id'];

$stmt = $conexao->prepare("DELETE FROM comentarios WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
if ($stmt) {
    header("Location:index.php");
}
?>

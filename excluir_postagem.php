<?php

require_once("Conexao.php");

$id = $_POST['id'];

$stmt = $conexao->prepare("DELETE FROM postagens WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
if ($stmt) {
    header("Location:index.php");
}
?>

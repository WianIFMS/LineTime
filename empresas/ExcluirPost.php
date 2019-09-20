<?php

	require_once("conexao.php");
  	
	$id = $_POST['id'];

  $stmt = $conexao->prepare("DELETE FROM postagem WHERE id=?");
  $stmt->bind_param("i", $id);
  $stmt->execute();
  if ($stmt) {
  
  	header("Location:ListaPostagem.php");
  }

?>

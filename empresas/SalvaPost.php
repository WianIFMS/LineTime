<?php
session_start();
require_once"conexao.php";
$id_empresa = $_SESSION["id"];
$titulo = $_POST["titulo"];
$postagem = $_POST["postagem"];
$id = $_POST['id'];

if ($id == 0) {
	$sql = "insert into postagem (titulo,postagem,id_empresa) values(?,?,?)";
	$sqlprep = $conexao->prepare($sql);
	$sqlprep->bind_param("ssi",$titulo,$postagem,$id_empresa);
	$sqlprep->execute();
}else{
	$sql = "UPDATE postagem SET titulo = ?,postagem = ? where id = ?";
	$sqlprep = $conexao->prepare($sql);
	$sqlprep->bind_param("ssi",$titulo,$postagem,$id);
	$sqlprep->execute();
}

//header("location: ListaPostagem.php");
print_r($_POST);
//print_r($_SESSION);
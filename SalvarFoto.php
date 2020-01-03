
<?php require_once('Conexao.php');?>
<?php
$foto_perfil = $_FILES["foto_perfil"];
$id_usuario = $_SESSION["id_usuario"];
$id = $_POST["id"];
// Inicio Arquivo de upload

date_default_timezone_set("America/Sao_paulo");
$dataEHora = date('dmYHi');
$nome_arquivo = "fotos/".$dataEHora . $_FILES["foto"]["name"];
$nome_arquivo_tmp = $_FILES["foto"]["tmp_name"];
$msgErroArquivo = "";
if (move_uploaded_file($nome_arquivo_tmp,$nome_arquivo)==false) {
	$msgErroArquivo = "Arquivo de foto não pode ser enviado";
}

// Fim Arquivo de upload
	if ($id == 0) {
	$sql = "INSERT INTO fotoperfil(foto_perfil,id_usuario)values(?,?)";
	$sqlprep = $conexao->prepare($sql);
	$sqlprep->bind_param("is",$id_usuario,$nome_arquivo);
	$sqlprep->execute();
	$msgOk = "Conta atualizada com sucesso";
	}else{
	$sql = "UPDATE fotoperfil SET foto_perfil=? where id=?";
	$sqlprep = $conexao->prepare($sql);
	$sqlprep->bind_param("si",$nome_arquivo,$id);
	$sqlprep->execute();
	$msgOk = "Conta atualizada com sucesso";
	}

?>
<?php header("location: perfil.php?msgOk=". $msgOk);?> 
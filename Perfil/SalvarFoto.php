<?php
session_start();
 require_once('conexao.php');




$foto = $_FILES['foto'];
$id = $_POST['id'];
$id_usuario = $_SESSION["id"];


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
	if ($id == 0 ) {
		$sql ="INSERT INTO fotoperfil (id_usuario,foto) values(?,?)";
		$sqlprep = $conexao->prepare($sql);
		$sqlprep->bind_param("is",$id_usuario,$nome_arquivo);
		$sqlprep->execute();
		$msgOk = "Conta inserida com sucesso";
	}else{

	$sql = "UPDATE fotoperfil SET foto=? where id=?";
	$sqlprep = $conexao->prepare($sql);
	$sqlprep->bind_param("si",$nome_arquivo,$id);
	$sqlprep->execute();
	$msgOk = "Conta atualizada com sucesso";
}

?>
<?php header("Location:perfil.php?msgOk=". $msgOk);?> 
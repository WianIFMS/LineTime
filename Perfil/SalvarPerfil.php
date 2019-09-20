<?php session_start();

require_once("conexao.php");?>

<?php


$relacionamento = $_POST['relacionamento'];
$profissao = $_POST['profissao'];
$nascimento = $_POST['nascimento'];
$sexo = $_POST['sexo'];
$id = $_POST["id"];
$id_usuario = $_SESSION["id"];

if ($id == 0 ) {
		$sql ="INSERT INTO perfil (relacionamento, profissao, nascimento, sexo,id_usuario) values(?,?,?,?,?)";
		$sqlprep = $conexao->prepare($sql);
		$sqlprep->bind_param("ssssi",$relacionamento,$profissao,$nascimento,$sexo,$id_usuario);
		$sqlprep->execute();
		$msgOk = "Conta inserida com sucesso";
	}else{

		$sql = "UPDATE perfil SET relacionamento=?,profissao=?,nascimento=?,sexo=? where id=?";
		$sqlprep = $conexao->prepare($sql);
		$sqlprep->bind_param("ssssi",$relacionamento,$profissao,$nascimento,$sexo,$id);
		$sqlprep->execute();
		$msgOk = "Conta atualizada com sucesso";
	}

?>
<?php header("Location:perfil.php?msgOk=". $msgOk);?> 
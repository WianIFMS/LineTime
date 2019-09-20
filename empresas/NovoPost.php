<?php
require_once"conexao.php";

if (isset($_POST['id'])) {
	$id = $_POST['id'];
}else{
	$id = 0;
}

$sql= "SELECT * FROM postagem ";
$resultadosql = $conexao->query($sql);
$vetorRegistro = $resultadosql->fetch_all(MYSQLI_ASSOC);

$sql = "SELECT * FROM postagem where id=?";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("i",$id);
$sqlprep->execute();
$sqlResultado = $sqlprep->get_result();
$vetorUmRegistro = $sqlResultado->fetch_assoc();

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Novo Poste</title>
	</head>
	<body>

		<form action="SalvaPost.php" method="post">
			<input type="number" hidden="true" name="id" id="id" value="<?=$vetorUmRegistro['id'] ?>">
			<label>Titulo</label><br>
			<input type="text" id="titulo" name="titulo" value="<?=$vetorUmRegistro['titulo'] ?>" ><br>
			<label>Descrição</label><br>
			<textarea rows="2" cols="45" placeholder=" Escreva o que está pensando..." id="postagem"id="postagem"name="postagem" value="postagem" ><?=$vetorUmRegistro["postagem"];?></textarea><br><br>
			
			<button type="submit">Postar</button>
		</form>

	</body>
</html>
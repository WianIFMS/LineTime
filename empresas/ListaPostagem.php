 <?php 
require_once"conexao.php";
session_start();
$sql= "SELECT * FROM postagem ORDER BY data_postagem DESC";
$resultadosql = $conexao->query($sql);
$vetorRegistros = $resultadosql->fetch_all(MYSQLI_ASSOC);

?>
 

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div style="border: 2px solid red;height: 100px;margin-bottom:15px">
		<a style="float: right;" href="ConfigurarEmpresa.php">Configurações</a> 
		<h2> <a href="NovoPost.php">Novo Poste</a> </h2>
		<h2> <a href="logout.php">Sair</a> </h2>

	</div>
	 <?php
    // Inicio do foreach ------------------------------------------------
    foreach ($vetorRegistros as $vetorUmRegistro) {
      // Select do usuario que postou esta postagem
     $sql= "SELECT * FROM empresas WHERE id_empresa = ?";

      $sqlprep = $conexao->prepare($sql);
      $sqlprep->bind_param("i" ,$vetorUmRegistro["id_empresa"]);
      $sqlprep->execute();
      $resultadoSql = $sqlprep->get_result();
      $usuario = $resultadoSql->fetch_assoc();    
     
  ?> 
<?php if ($_SESSION["id"]== $vetorUmRegistro["id_empresa"]) {?>

	<div style="border: 1px solid green;margin-bottom: 2px;width: 50%;float: center;margin-left: 25%">

	
		<form method="post" action="NovoPost.php" enctype="multipart/form-data">
              <input type="hidden" name="id" id="id" value="<?=$vetorUmRegistro['id'];?>">
			<button type="submit">Editar</button>
		</form>
		<form method="post" action="ExcluirPost.php" enctype="multipart/form-data">
              <input type="hidden" name="id" id="id_empresa" value="<?=$vetorUmRegistro['id'];?>">
			<button>Excluir</button>
		</form>
				
		<h5 style="margin-left: 40%"><?=$usuario["nome"];?></h2>
			<h6 style="margin-left: 40%;margin-top: -15px">CNPJ: <?=$usuario["cnpj"];?></h6>

		<h3 style="margin-left: 5px"><?=$vetorUmRegistro["titulo"];?></h1>
		<img src="">
		<h5 style="margin-left: 5px"><?=$vetorUmRegistro["postagem"];?></h5>
		<h5 style="margin-left: 40%"><?=$usuario["cidade"];?></h5>
	

</div>
	<?php
}
}
	?>
</body>
</html>
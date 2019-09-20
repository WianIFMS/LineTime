<?php
session_start();
require_once"conexao.php";

$sql= "SELECT * FROM empresas ";
$resultadosql = $conexao->query($sql);
$vetorRegistros = $resultadosql->fetch_all(MYSQLI_ASSOC);


 $sql= "SELECT * FROM empresas WHERE id_empresa = ?";

      $sqlprep = $conexao->prepare($sql);
      $sqlprep->bind_param("i" ,$vetorUmRegistro["id_empresa"]);
      $sqlprep->execute();
      $resultadoSql = $sqlprep->get_result();
      $usuario = $resultadoSql->fetch_assoc(); 
      ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Configurações</title>
	</head>

	<body>

<?php 
foreach ($vetorRegistros as  $vetorUmRegistro) {
	

if ($_SESSION["id"]== $vetorUmRegistro["id_empresa"]) {?>
	<form method="post" action="EditarEmpresa.php" enctype="multipart/form-data">
              <input type="hidden" name="id_empresa" id="id_empresa" value="<?=$vetorUmRegistro['id_empresa'];?>">
	Nome: <?=$vetorUmRegistro["nome"];?><br>
	CNPJ: <?=$vetorUmRegistro["cnpj"];?><br>
	E-mail: <?=$vetorUmRegistro["email"];?><br>
	Telefone: <?=$vetorUmRegistro["telefone"];?><br>
	Cidade: <?=$vetorUmRegistro["cidade"];?><br>
	UF: <?=$vetorUmRegistro["uf"];?><br><br>
	
	<button type="submit">Editar</button>	
	</form>
	<?php
}
}
	?>

	</body>
</html>
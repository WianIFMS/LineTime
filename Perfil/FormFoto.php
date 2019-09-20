<?php 
session_start();
require_once('conexao.php');

if (isset($_POST['id'])) {
	$id = $_POST['id'];
}else{
	$id = 0;
}

$sql = "SELECT * FROM fotoperfil where id =?";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("i",$id);
$sqlprep->execute();
$sqlResultado = $sqlprep->get_result();
$vetorUmRegistro = $sqlResultado->fetch_assoc();

?>
<form  name="myForm" action="SalvarFoto" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-2">
				<div class="form-group">
				 <label for="id">ID</label>
				 <input value="<?=$vetorUmRegistro['id'];?>" readonly="true" class="form-control" type="number" name="id" id="id" >
				</div>
			<	
			<div class="form-group"> 
			 <label for="foto">FotoPerfil</label>
			 <input value="<?=$vetorUmRegistro['foto'];?>" class="form-control" type="file" name="foto" id="foto" >
			</div> 
			<button type="submit" class="btn btn-success">Enviar</button>
				
	</form>
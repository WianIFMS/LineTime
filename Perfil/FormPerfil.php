<?php require_once('conexao.php');?>

<?php
if (isset($_POST['id'])) {
	$id = $_POST['id'];
}else{
	$id = 0;
}

$sql = "SELECT * FROM perfil where id=?";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("i",$id);
$sqlprep->execute();
$sqlResultado = $sqlprep->get_result();
$vetorUmRegistro = $sqlResultado->fetch_assoc();

?>
<form  name="myForm" action="SalvarPerfil" onsubmit="return validateForm()" method="post" >
		<div class="row">
			<div class="col-md-2">
				<div class="form-group">
				 <label for="id">ID</label>
				 <input value="<?=$vetorUmRegistro['id'];?>" readonly="true" class="form-control" type="number" name="id" id="id" >
				</div>
			</div>	
			<div class="col-md-8">
				<div class="form-group"> 
				 <label for="descrição">Relacionamento</label>
				 <input value="<?=$vetorUmRegistro['relacionamento'];?>" class="form-control" type="text" name="relacionamento" id="relacionamento"  autofocus="true">
				</div>
			</div>
			<div class="col-md-2">		
				<div class="form-group"> 
				 <label for="valor">Profissão</label>
				 <input value="<?=$vetorUmRegistro['profissao'];?>" class="form-control" type="text" name="profissao" id="profissao" >
				</div>
			</div>	
		</div>
		<div class="row">
			<div class="col-md-6">		
				<div class="form-group"> 
				 <label for="mes">Nascimento</label>
				 <input value="<?=$vetorUmRegistro['nascimento'];?>" class="form-control" type="date" name="nascimento" id="nascimento" >
				</div>
			</div>	
			<div class="col-md-6">	
				<div class="form-group"> 
				 <label for="ano">Sexo</label>
				 <input value="<?=$vetorUmRegistro['sexo'];?>" class="form-control" type="text" name="sexo" id="sexo" >
				</div>
			</div>	
		</div>		
			
			<button type="submit" class="btn btn-success">Enviar</button>
			<a href="perfil.php"><button type="#" class="btn btn-success">Cancelar</button></a> 
				
	</form>
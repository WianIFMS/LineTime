<?php require_once('Conexao.php');?>

<?php
if (isset($_POST['id'])) {
	$id_usuario = $_POST['id'];
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
<form  name="myForm" action="SalvarPerfil.php" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-2">
				<div class="form-group">
				 <label for="id">ID</label>
				 <input placeholder="Automatico" value="<?=$vetorUmRegistro['id'];?>" readonly="true" class="form-control" type="number" name="id" id="id">
				</div>
			</div>	
			<div class="col-md-8">
				<div class="form-group"> 
				 <label for="descrição">Relacionamento</label>				
				  <select value="<?=$vetorUmRegistro['relacionamento'];?>"  name="relacionamento" id="relacionamento">
				 	<option value="Solteiro(a)">Solteiro(a)</option>
				 	<option value="Namorando">Namorando</option>
				 	<option value="Casado(a)">Casado(a)</option>
				 	<option value="Divociado(a)">Divociado(a)</option>
				 	<option value="Viuvo(a)">Viuvo(a)</option>
				 	<option value="A espera de um milagre">A espera de um milagre</option>
				 	<option value="Prefiro não responder">Prefiro não responder</option>
				 </select>
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
				
				 <select value="<?=$vetorUmRegistro['sexo'];?>"  name="sexo" id="sexo">
				 	<option value="Masculino">Masculino</option>
				 	<option value="Feminino">Feminino</option>
				 	<option value="Prefiro não responder">Prefiro não responder</option>
				 </select>
				</div>
			</div>	
		</div>		
			
			<button type="submit" class="btn btn-success">Enviar</button>
				
	</form>
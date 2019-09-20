<?php

require_once"conexao.php";



if (isset($_POST['id_empresa'])) {
	$id_empresa = $_POST['id_empresa'];
}else{
	$id_empresa = 0;
}
$sql= "SELECT * FROM empresas ";
$resultadosql = $conexao->query($sql);
$vetorRegistro = $resultadosql->fetch_all(MYSQLI_ASSOC);

$sql = "SELECT * FROM empresas where id_empresa=?";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("i",$id_empresa);
$sqlprep->execute();
$sqlResultado = $sqlprep->get_result();
$vetorUmRegistro = $sqlResultado->fetch_assoc();

?>
	<form method="post" action="SalvarMudancasEmpresa.php" enctype="multipart/form-data">
             <input type="hidden" name="id_empresa" id="id_empresa" value="<?=$vetorUmRegistro['id_empresa'];?>"><br>
            Nome: <input id="nome" type="text" name="nome" value="<?=$vetorUmRegistro["nome"];?>"><br>
            CNPJ: <input type="number" name="cnpj" value="<?=$vetorUmRegistro["cnpj"];?>"><br>
            E-mail: <input type="email" name="email" value="<?=$vetorUmRegistro["email"];?>"><br>
            Telefone: <input type="number" name="telefone" value="<?=$vetorUmRegistro["telefone"];?>"><br>
            Cidade: <input type="text" name="cidade" value="<?=$vetorUmRegistro["cidade"];?>"><br>
            UF: <input type="text" name="uf" value="<?=$vetorUmRegistro["uf"];?>"><br><br>
			<button type="submit">Salvar Mudanças</button>	
	</form>
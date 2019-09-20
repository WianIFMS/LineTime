<?php
require_once"conexao.php";
		$id_empresa = $_POST['id_empresa'];
		$nome = $_POST['nome'];
		$cnpj =$_POST['cnpj'];
	    $telefone =$_POST['telefone'];
	    $email = $_POST['email'];
        $cidade =$_POST['cidade'];
        $uf = $_POST["uf"];        

        $sql = "UPDATE empresas SET nome=?,cnpj=?,telefone=?,email=?,cidade=?,uf=? where id_empresa =?";
		$sqlprep = $conexao->prepare($sql);
		$sqlprep->bind_param("sdssssi",$nome,$cnpj,$telefone,$email,$cidade,$uf,$id_empresa);
		$sqlprep->execute();

		header("location: ConfigurarEmpresa.php");
?>
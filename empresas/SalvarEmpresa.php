<?php

require_once"conexao.php";

// Inserindo informações no banco

if(isset($_POST['nome']) && isset($_POST['cnpj'])&& isset($_POST['tipo_negocio'])&& isset($_POST['cidade']) )
{
	if($_POST['nome'] != "" && $_POST['cnpj'] != "" && $_POST['tipo_negocio'] != ""  && $_POST['cidade'] != "" )
	{
    
		$nome = $_POST['nome'];
		$cnpj =$_POST['cnpj'];
	    $tipo_negocio =$_POST['tipo_negocio'];
                $cidade =$_POST['cidade'];
                   
      
		
	     
	         $sql = "INSERT INTO empresas(nome,cnpj,tipo_negocio,cidade) values(?,?,?,?)";

		$sqlprep = $conexao->prepare($sql);
		$sqlprep->bind_param("sdss", $nome,$cnpj,$tipo_negocio,$cidade);

		$sql2 = "SELECT * FROM empresas WHERE cnpj = '$cnpj'";
		$insert = mysqli_query($conexao,$sql2) or die("erro");
		if (mysqli_num_rows($insert) == 0) {
		   
		 $sqlprep->execute();
		 header("Location: administracao.html");
		}else{
		 echo "ja existe";
		}
	} 
	else
	{
		echo "Não foi possivel cadastrar";
	}
}
?>
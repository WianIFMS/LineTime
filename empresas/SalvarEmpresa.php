<?php

require_once"conexao.php";



if(isset($_POST['nome']) && isset($_POST['cnpj'])&& isset($_POST['tipo_negocio'])&& isset($_POST['cidade']) )
{
	if($_POST['nome'] != "" && $_POST['cnpj'] != "" && $_POST['tipo_negocio'] != ""  && $_POST['cidade'] != "" )
	{
    // Inicio Arquivo de upload
 
date_default_timezone_set("America/Sao_paulo");
$dataEHora = date('dmYHi');
$nome_arquivo = 'fotos/'. $dataEHora . $_FILES['foto']['name'];
$nome_arquivo_tmp = $_FILES['foto']['tmp_name'];
$msgErroArquivo = "";
if (move_uploaded_file($nome_arquivo_tmp,$nome_arquivo)==false) {
	$msgErroArquivo = "Arquivo de foto não pode ser enviado";
}
		$nome = $_POST['nome'];
		$cnpj =$_POST['cnpj'];
	    $tipo_negocio =$_POST['tipo_negocio'];
        $cidade =$_POST['cidade'];
         $foto = $_FILES["foto"];        

      
		
	     
	         $sql = "INSERT INTO empresas(nome,cnpj,tipo_negocio,cidade,foto) values(?,?,?,?,?)";

		$sqlprep = $conexao->prepare($sql);
		$sqlprep->bind_param("sdss", $nome,$cnpj,$tipo_negocio,$cidade,$nome_arquivo);

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
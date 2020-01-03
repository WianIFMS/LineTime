<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//require_once"autoload.php";
require_once"Conexao.php";

$sql2 = "SELECT  id,data_postagem FROM  postagens ORDER BY  id DESC LIMIT 0 , 30";

// Inserindo informações no banco

if(isset($_POST['nome']) &&   isset($_POST['celular']) && isset($_POST['email']) && isset($_POST['senha']))
{
	if($_POST['nome'] != ""   && $_POST['celular'] != ""  && $_POST['email'] != "" && $_POST['senha'] != "" )
	{
    
		$nome = $_POST['nome'];		
	    $nascimento =$_POST['nascimento'];
        $celular =$_POST['celular'];
        $email =$_POST['email'];
		$senha =$_POST['senha'];      
	    $senha = md5($senha);
	     
	    $sql = "INSERT INTO usuarios(nome,nascimento,celular,email,senha) values(?,?,?,?,?)";
		$sqlprep = $conexao->prepare($sql);
		$sqlprep->bind_param("sddss", $nome,$nascimento,$celular,$email,$senha);

		$sql2 = "SELECT * FROM usuarios WHERE email = '$email'";
		$insert = mysqli_query($conexao,$sql2) or die("erro");
		if (mysqli_num_rows($insert) == 0) {
	

		 $sqlprep->execute();
		 header("Location: FormLogin.php");
		}else{
		 echo "ja existe";
		}
	} 
	else
	{
		echo "Não foi possivel cadastrar";
	}
}

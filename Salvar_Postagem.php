<?php

session_start();

 require_once"Conexao.php";

 $postagem = $_POST['postagem'];

 $id = $_POST['id'];

 $id_usuario = $_SESSION['id'];

$sql2 ="SELECT * from usuarios where id=?";



if ($id==0) 

{

	$sql = "INSERT INTO postagens(postagem, id_usuario) values(?,?)";

  	$sqlprep = $conexao->prepare($sql);

	$sqlprep->bind_param("si", $postagem, $id_usuario);

     $sqlprep->execute();

}

else

{

//se o id for 0 eh uma atualização (update)

$sql = "UPDATE postagens set postagem=? where id=?";

$sqlprep = $conexao->prepare($sql);

$sqlprep->bind_param("si", $postagem, $id);

$sqlprep->execute();

$msgOk = "Aluno atualizado com sucesso.";

}





?>

<?php header('location: index.php?msgOk='.$msgOk);?>
?>
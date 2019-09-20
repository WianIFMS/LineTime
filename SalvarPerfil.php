<?php

require_once("Conexao.php");

$relacionamento = $_POST["relacionamento"];
$profissao = $_POST["profissao"];
$nascimento = $_POST["nascimento"];
$sexo = $_POST["sexo"];
$id = $_POST["id"];

$sql = "UPDATE usuarios SET relacionamento=?,profissao=?,nascimento=?,sexo=? where id=?";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("ssssi", $_POST["relacionamento"], $_POST["profissao"], $_POST["nascimento"], $_POST["sexo"], $_POST["id"]);
var_dump($sqlprep->execute());
$msgOk = "Conta atualizada com sucesso";

header("location: perfil.php?msgOk=" . $msgOk);
?> 
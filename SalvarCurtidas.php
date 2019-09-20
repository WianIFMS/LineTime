<?php

require_once"Conexao.php";

$gostei = $_POST["gostei"];
$naogostei = $_POST["naogostei"];

$sql = "insert into contador(gostei,naogostei)values(?,?)";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("ii", $gostei, $naogostei);
$sqlprep->execute();

header("location: index.php");

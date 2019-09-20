<?php 
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "projetoline";

// Criando conexão
$conn = new mysqli($servidor, $usuario, $senha, $bd);
// checando conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//processa novo cadastro
$cnpj = "";
$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$endereco = $_POST ['endereco']; 






$sql = "INSERT INTO cadastro_empresa (cnpj, nome, tipo, endereco)
VALUES ('$cnpj', '$nome', '$tipo', ' $endereco')";
 
 
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

 ?>
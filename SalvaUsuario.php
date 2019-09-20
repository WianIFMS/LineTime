<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once"Conexao.php";
// Inserindo informações no banco
//print_r($_POST);
if (isset($_POST['nome']) && isset($_POST['celular']) && isset($_POST['usuario']) && isset($_POST['senha'])) {
    if ($_POST['nome'] != "" && $_POST['celular'] != "" && $_POST['usuario'] != "" && $_POST['senha'] != "") {

        $nome = $_POST['nome'];
        $nascimento = $_POST['nascimento'];
        $celular = $_POST['celular'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $senha = md5($senha);

        $sql = "INSERT INTO usuarios(nome,nascimento,celular,usuario,senha) values(?,?,?,?,?)";
        $sqlprep = $conexao->prepare($sql);
        $sqlprep->bind_param("sddss", $nome, $nascimento, $celular, $eusuario, $senha);

        $sql2 = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
        $insert = mysqli_query($conexao, $sql2) or die("erro");

        $result = mysqli_query($conexao, "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha' LIMIT 1") OR die(erro);
        
        if (mysqli_num_rows($insert) == 0) {

            $sqlprep->execute();
            header("Location: FormLogin.php");
        } else {
            echo "já existe uma conta com esse email, fassa login ou cadastre outro!";
        }
    } else {
        echo "Não foi possivel cadastrar, tente novamente mas tarde!";
    }
}

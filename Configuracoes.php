<?php require_once('Conexao.php'); 

session_start();
if (!isset($_SESSION['email']) && !isset($_SESSION['senha'])) {
    header("Location: FormLogin.php");
}

$sql = "SELECT * FROM usuarios ";
$resultadosql = $conexao->query($sql);
$vetorRegistros = $resultadosql->fetch_all(MYSQLI_ASSOC);

$sql = "SELECT * FROM usuarios where id =?";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("i", $id);
$sqlprep->execute();
$sqlResultado = $sqlprep->get_result();
$vetorUmRegistro = $sqlResultado->fetch_assoc();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Configurações</title>
    </head>
    <body>
        <h1>Configurações</h1><h1><a href="perfil.php"> Perfil</a></h1>
        <?php foreach ($vetorRegistros as $value) {
            
        } ?>

        <h4>Nome:</h4> <?= $value['nome']; ?>

<?php //} ?>

        <h3>Mudar Nome</h3>
        <form method="post" action="MudarNome.php">
            <input type="hidden" name="id" value="<?= $value['id'] ?>">
            <label>Novo nome</label>
            <input type="text" name="nome" id="nome" >
            <button type="submit">Salvar</button>
        </form>

        <h1>Mudar Senha</h1>

        <form name="form1" method="post" action="MudarSenha.php">	
            <label>Senha</label>
            <input type="password" name="senha" id="senha">
            <label>Nova Senha</label>
            <input type="password" name="rep_senha" id="rep_senha">

            <button type="submit" onclick="return validar()">Salvar</button>
        </form>
    </body>
    <script language="javascript" type="text/javascript">
        function validar() {

            var senha = form1.senha.value;
            var rep_senha = form1.rep_senha.value;

            if (senha != rep_senha) {
                alert('Senhas diferentes');
                form1.senha.focus();
                return false;
            }
        }


    </script>
</html>
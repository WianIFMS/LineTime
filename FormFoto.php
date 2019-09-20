<?php
require_once('Conexao.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];
} else {
    $id = 0;
}

$sql = "SELECT * FROM usuarios where id =?";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("i", $id);
$sqlprep->execute();
$sqlResultado = $sqlprep->get_result();
$vetorUmRegistro = $sqlResultado->fetch_assoc();
?>
<form  action="SalvarFoto"  method="post" enctype= "multipart/form-data">
    <div class="row">
        <div class="col-md-2">
            <div class="form-group">
              
                <input hidden="ture" value="<?= $vetorUmRegistro['id']; ?>" readonly="true" class="form-control" type="number" name="id" id="id" >
            </div>

            <div class="form-group"> 
               
                <input type="file"  value="<?= $vetorUmRegistro['fotoperfil']; ?>" class="form-control" name="fotoperfil" id="fotoperfil" >
                <img src="<?= $vetorUmRegistro['fotoperfil']; ?>"> <br><br>
            </div> 
            <button type="submit" class="btn btn-success">Salvar</button><br>
            
            </form>
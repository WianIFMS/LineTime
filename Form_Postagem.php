<?php 

require_once('Conexao.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 

if (isset($_POST['id'])) {

	$id= $_POST['id'];

}else{

$id = 0;

}

$sql = "SELECT * FROM postagens";

$sqlprep = $conexao->query($sql);
$vetorRegistros = $sqlprep->fetch_all(MYSQLI_ASSOC);

foreach ($vetorRegistros as $vetorUmRegistro ) {

}

?>

     <form method="post" action="CtlPostagem.php?op=salvar">

                                

                    			<input value="<?=$vetorUmRegistro['id'];?>" type="hidden" name="id" id="id">

                    			<textarea rows="2" cols="45" placeholder=" Escreva o que está pensando..." id="postagem"id="postagem"name="postagem" value="postagem" ><?=$vetorUmRegistro["postagem"];?></textarea>

                                <a class="pure-button pure-button-active-2" href="#" id="button-postheader-1"> <i class="fas fa-angle-double-right"></i></a>

                                <button type="submit" class="button-warning pure-button" id="button-postheader-2"><i class="fas fa-sign-in-alt" ></i> Publicar</button>

                                <button class="button-warning pure-button" id="button-postheader-3"><i class="fas fa-map-marker-alt" ></i> Localização</button>

</form>
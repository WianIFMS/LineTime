 <?php
   session_start();

   ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 

   require_once"Conexao.php";
 
    if (!isset($_SESSION['email']) && !isset($_SESSION['senha'])) {
       header("Location: FormLogin.php");
   }
    ?>
    <?php 

   	 /* $sql= "SELECT * FROM usuarios ";
      $sqlprep = Conexao::getConexao()->query($sql);      
      $usuario = $sqlprep->fetch_all(MYSQLI_ASSOC);*/
/*
       $sql2= "SELECT * FROM usuarios ";
       $sqlprep = Conexao::getConexao()->query($sql2);
       $vetorUsuario = $sqlprep->fetch_all(MYSQLI_ASSOC);

     $sql3= "SELECT * FROM postagens";

      $postou = Conexao::getConexao()->query($sql3);
      $vetorPostagem = $postou->fetch_all(MYSQLI_ASSOC);*/
      ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive pricing table.">
    <title>Perfil</title>
    
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
    <!--<![endif]-->
    
    
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="css/layouts/pricing-old-ie.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel="stylesheet" href="css/layouts/pricing.css">
        <!--<![endif]-->
</head>
<body>
    <style>
        /* Customization to limit height of the menu */
        .custom-restricted {
            height: 200px;
            width: 310px;
            border: 1px solid gray;
            border-radius: 4px;
            margin-left: 4.5px;
            margin-top:-380px;
        }
    </style>


<div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href=""><font color="#00CD66">Line<font color="#B22222">T</font>ime<img src="imageshtml.png" class="avatar" width="24" height="24" alt=""></a></font>

        <ul class="pure-menu-list">
            <li class="pure-menu-item email-item-unread"><a href="../index.php" class="pure-menu-link">Pagina Principal <i class="fas fa-user-circle"></i></a></li>
            <li class="pure-menu-item email-item-unread-2"><a href="#" class="pure-menu-link" id="configuracoes-1">Configurações <i class="fas fa-cog"></i></a></li>
            <li class="pure-menu-item email-item-unread-2"><a href="#" class="pure-menu-link" id="configuracoes"> <i class="fas fa-cog"></i></a></li>
        </ul>
    	
</div>

<div class="banner">    
<button class="button-choose pure-button" id="button-editar-capa">Editar <i class="fas fa-cog"></i></button>
<button class="button-choose pure-button" id="button-editar-capa-2"><i class="fas fa-cog"></i></button>
</div>

<div class="l-content">
    <div class="pricing-tables pure-g">
        <div class="pure-u-1 pure-u-md-1-3">
            <div class="pricing-table pricing-table-free">
                   <div class="card" style="width: 22rem;height: 12rem; ">
                   <?php
						$sql= "SELECT * FROM usuarios";
						$resultadosql = $conexao->query($sql);
						$variable = $resultadosql->fetch_all(MYSQLI_ASSOC);

?>  
<?php foreach ($variable as $key) {
  /*  $sql= "SELECT * FROM usuarios ";
      $sqlprep = Conexao::getConexao()->query($sql);      
      $usuario = $sqlprep->fetch_all(MYSQLI_ASSOC);*/
      ?>
   <?php if ($key["id"] == $_SESSION["id"]) {?>
                    <form method="post" action="FormFoto.php" enctype="multipart/form-data">
                      <input id="id"type="hidden" name="id" value="<?=$key['id'];?>"  >
  						<img name="foto_perfil" id="foto_perfil" src="<?=$key["foto_perfil"];?>" class="card-img-top" alt="...">

  							<div class="card-body">
    
                            </div>
                        </img>      
					</div> 
                   
                  
                  <button class="button-choose pure-button" type="submit">Editar <i class="fas fa-cog"></i></button>
             
                
              </form>
             <?php } ?>
               <?php } ?>
            </div>
        </div>

        <div class="pure-u-1 pure-u-md-1-6">
			
            <div class="pricing-table pricing-table-biz pricing-table-selected">
                <div class="pricing-table-header">
                    <h2><i class="fas fa-id-card-alt"></i> Sobre <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span></h2>

                    
                </div>

                <ul class="pricing-table-list">
                    <li><a href="#">Galeria de fotos <i class="fas fa-camera-retro"></i></a></li>
                    <li><a href="#">Vizualização de perfil <i class="fas fa-eye"></i></a></li>
                     <?php 

$sql= "SELECT * FROM perfil";
$resultadosql = $conexao->query($sql);
$vetorRegistros = $resultadosql->fetch_all(MYSQLI_ASSOC);
?>
                        <?php foreach ($vetorRegistros as $value) { 
                            // Select do usuario que postou esta postagem
    /*  $sql= "SELECT * FROM usuarios ";
      $sqlprep = Conexao::getConexao()->query($sql);      
      $usuario = $sqlprep->fetch_all(MYSQLI_ASSOC);*/
      //$id_user = $_SESSION["id"];



        if ($value["id_usuario"] == $_SESSION["id"]) { 
       // var_dump($_SESSION);
//var_dump($value["id_usuario"]);
         ?>
                            
            <form method="post" action="FormPerfil.php" enctype="multipart/form-data">
              <input type="hidden" name="id" id="id" value="<?=$value["id"];?>">
                    <li><b>Relacionamento:</b><?=$value["relacionamento"];?></li>
                    
                    <li ><b>Profissão:</b><?=$value["profissao"];?></li>
                    <li><a href="#"><span class="badge badge-pill badge-success">Seguindo e Seguidores <i class="fas fa-user-friends"></i></span></a></li>
                    <li><b>Nascimento:</b>  <?=$value["nascimento"];?></li>
                    <li><b>Sexo:</b><?=$value["sexo"];?></li>
                    <li><b>Estudos: <a href="#" onmouseover="moverInstituicao(this)" onmouseout="moutInstituicao(this)"
                        style="background-color:transparent;"> Instituição </a> / <a href="#" onmouseover="moverPeriodo(this)" onmouseout="moutPeriodo(this)"
                        style="background-color:transparent;">Período </a> / <a href="#" onmouseover="moverCurso(this)" onmouseout="moutCurso(this)"
                        style="background-color:transparent;">Curso </a></b>
					</li>						
									   	
                </ul>
                <div class="tabela-mobile">
                    <div class="pure-menu pure-menu-scrollable custom-restricted">
                        <ul class="pure-menu-list">
                            <li class="pure-menu-item"><a href="#" class="pure-menu-link">Galeria de fotos <i class="fas fa-camera-retro"></i></a></li>
                             <li class="pure-menu-item"><a href="#" class="pure-menu-link">Vizualização de perfil <i class="fas fa-eye"></i></a></li>
                            
                            <li class="pure-menu-item"><a href="#" class="pure-menu-link"><b>Relacionamento:</b> <?=$value["relacionamento"];?></a></li>
                           
                            <li class="pure-menu-item"><a href="#" class="pure-menu-link"><b>Profissão:</b> <?=$value["profissao"];?></a></li>
                            <li class="pure-menu-item"><a href="#" class="pure-menu-link"><span class="badge badge-pill badge-success">Seguindo e Seguidores <i class="fas fa-user-friends"></i></span></a></li>
                           
                            <li class="pure-menu-item"><a href="#" class="pure-menu-link"><b>Idade:</b><?=$value["nascimento"];?></a></li>
                            <li class="pure-menu-item"><a href="#" class="pure-menu-link"><b>Sexo:</b><?=$value["sexo"];?></a></li>
                            <li class="pure-menu-item"><b>Estudos: <a href="#" onmouseover="moverInstituicao(this)" onmouseout="moutInstituicao(this)"
                                style="background-color:transparent;"> Instituição </a> / <a href="#" onmouseover="moverPeriodo(this)" onmouseout="moutPeriodo(this)"
                                style="background-color:transparent;">Período </a> / <a href="#" onmouseover="moverCurso(this)" onmouseout="moutCurso(this)"
                                style="background-color:transparent;">Curso </a></b>
                            </li>
                        </ul>
                    </div>
                </div>
                
                
                   <button class="button-choose pure-button" id="button-editar-informacoes" type="submit">Editar Informações <i class="fas fa-cog"></i></button>
                

             </form>
              <?php } ?>
        <?php } ?>

       
            </div>
        	<div class="pure-u-2 pure-u-md-1-5" id="nome-span">	
            	<h3 class="nome-usuario"> <?php echo $_SESSION['nome'];?> </h3>
            	<br>
                
                <h6 id="span-status"> <span class="badge badge-pill badge-success">Meu perfil <i class="fas fa-chevron-circle-down"></i></span>  <span class="badge badge-pill badge-dark">Seu perfil tem (0) visualizações <i class="fas fa-eye"></i></span> - <span class="badge badge-dark"><font color="#9BCD9B"> Seguidores- <font color="#fff">5.234.00</font> <i class="fas fa-user-friends"></i></font></span>  <span class="badge badge-dark" id="span-seguindo"><font color="#9BCD9B"> Seguindo- <font color="#fff">300</font> <i class="fas fa-user-friends"></i></font></span> </h6>  	
                 <hr class="linha"></hr>
            </div>
            <div class="jumbotron jumbotron-fluid">
                    <h2 class="display-5"><font color="#000000"> <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Publicações </font></h2> </li>
                      </ol>
                    </nav>
            </div>
            
            <div class="card" id="card-2">
			  	<div class="dropdown"  data-toggle="dropdown">
				  	<div class="card-body">
				     	Caracteristicas do <b><span class="badge badge-dark"><font color="#9BCD9B "><?php echo $_SESSION['nome'];?></font> <i class="fas fa-chevron-circle-down"></i></span></b>
                      </div>
					<div class="dropdown-menu">
	  					<a class="dropdown-item disabled" href="#" tabindex="-1" aria-disabled="true"><span class="badge badge-light"><b>Cabelo: <font color="#556B2F ">(Crespo / Preto)</font></span></b></a>
	  					<a class="dropdown-item disabled" href="#" tabindex="-1" aria-disabled="true"><span class="badge badge-light"><b>Cor dos olhos: <font color="#556B2F ">(Castanho escuro)</font></span></b></a>
	  					<a class="dropdown-item disabled" href="#" tabindex="-1" aria-disabled="true"><span class="badge badge-light"><b>Tamanho: <font color="#556B2F ">(1.70)</span></font></b> </a>
					</div>
				</div>
			</div>
            
            <hr class="linha-2"></hr>
         <div class="list-inner">
		        <table class="pure-table">
                <div class="pure-u-1">   
                        <div class="separacao"> </div>
                        <?php 

$sql= "SELECT * FROM postagens ORDER BY data_postagem DESC";
$resultadosql = $conexao->query($sql);
$vetorRegistros = $resultadosql->fetch_all(MYSQLI_ASSOC);
?>
                        <section class="post">
                            <?php
 
    // Inicio do foreach ------------------------------------------------
    foreach ($vetorRegistros as $vetorUmRegistro) {
      // Select do usuario que postou esta postagem
      /* $sql= "SELECT * FROM usuarios ";
      $sqlprep = Conexao::getConexao()->query($sql);      
      $usuario = $sqlprep->fetch_all(MYSQLI_ASSOC);
    
     // var_dump($_SESSION);
      //var_dump($vetorUmRegistro["id_usuario"]);

   $sql3= "SELECT * FROM postagens";

      $postou = Conexao::getConexao()->query($sql3);
      $vetorPostagem = $postou->fetch_all(MYSQLI_ASSOC);*/

  ?> 
  <?php  if ($vetorUmRegistro["id_usuario"] == $_SESSION["id"]) {?>
  
                                <div class="quadrado">
                                    <header class="post-header">
                                           <img width="52" height="52"  class="post-avatar" src="<?=$key["foto_perfil"];?>">
       
                                            <h3 class="post-title"> <?php echo $_SESSION['nome'];?></h3>
                                                <div id="hora"><i class="fas fa-stopwatch"></i>  Publicou <?=$vetorUmRegistro["data_postagem"];?> </div>
                                                <hr></hr>
                                                <p class="post-meta">
                                                   <?=$vetorUmRegistro["postagem"];?>
                                                <h6 class="email-subject-2"><font color="#191970">Público <i class="fas fa-user-friends"></i></font></h6>
                                                </p>
                                    </header>
        
                                  <div class="post-description">
                                        <p class="email-desc-2">
                                        <h3>
                                    
                                        </h3>     
                                        </p>   
                                    </div>

                                    <form class="pure-form">
                                        <hr id="hr-post"></hr>
                                       <input class="pure-input-1-2" type="text" placeholder="Comente a postagem" id="input-coment-post">
                                        <a class="pure-button pure-button-active" href="#" id="button-acao-comentario"><i class="fas fa-angle-double-right"></i></a><a class="comentarios" href="#" data-toggle="modal" data-target="#exampleModalCenter">Comentarios <i class="fas fa-comments"></i> 
        
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Comentarios</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                (Comentario Usuario)
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                <input class="pure-input-1-2" type="text" placeholder="Comente a postagem" id="input-coment-post">
                                                <a class="pure-button pure-button-active" href="#" id="button-acao-comentario"><i class="fas fa-angle-double-right"></i></a>
                                            </div>
                                            </div>
                                        </div>
                                        </div>	
        
                                        </a>
                                        
                                            <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#"><font color="#556B2F"><i class="fas fa-hand-peace"></i> Top  </font><span class="badge badge-success">11</span></a></li>
                                                <li class="breadcrumb-item"><a href="#"><font color="#8B1A1A"><i class="fas fa-thumbs-down"></i> Não Gostei  </font><span class="badge badge-danger">4</span></a></li>
                                                <li class="breadcrumb-item"><a href="#"><font color="#2F4F4F"><i class="fas fa-share-square"></i> Compartilhar  <span class="badge badge-dark">2</span></li>
        
                                            </ol>
                                            </nav>	
                                                    
                                    </form>	
                                 </div>
                                                <?php }?>    
                                                <?php }?>      
                            </section>
                            
                   
                </div>
            </table>        
        </div>
            <div class="fab"  ontouchstart="">
                <button class="main" >
                </button>
                    <ul>
                        <li>
                            <button id="opcao3">
                                <font color="#556B2F"><i class="fas fa-comments"></i></font>
                            </button>
                        </li>
                    </ul>
            </div>
        </div>

        
        
    </div> 
</div>
     
<div class="footer">
    <p>
       Uma nova experiência para nossos usuarios - linetime.com
    </p>
</div>
</div>



</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script type="text/javascript">
$('.dropdown-toggle').dropdown()

/* -- Função de interação do nome do Instituto --  */

function moverInstituicao(obj){
obj.innerHTML="Instituto Federal MS"
}

/* -- Função de interação do nome do Instituto --  */ 
function moutInstituicao(obj){
obj.innerHTML="Instituição"
}

/* -- Função de interação do nome do Período --  */
function moverPeriodo(obj){
    obj.innerHTML="3 Semestre"
}

/* -- Função de interação do nome do Período --  */
function moutPeriodo(obj){
    obj.innerHTML="Período"
} 

/* -- Função de interação do nome do Curso --  */
function moverCurso(obj){
    obj.innerHTML="Sistemas para Internet"
}

/* -- Função de interação do nome do Curso --  */
function moutCurso(obj){
    obj.innerHTML="Curso"
} 
</script>

</html>

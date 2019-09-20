 <?php require_once"conexao.php";?>

  <?php
session_start();
   $sql= "SELECT * FROM fotoperfil";
$resultadosql = $conexao->query($sql);
$variable = $resultadosql->fetch_all(MYSQLI_ASSOC);
?>  
<?php foreach ($variable as $key) {
     $sql= "SELECT * FROM usuarios WHERE id = ?";

      $sqlprep = $conexao->prepare($sql);
      $sqlprep->bind_param("i" ,$vetorUmRegistro["id_usuario"]);
      $sqlprep->execute();
      $resultadoSql = $sqlprep->get_result();
      $usuario = $resultadoSql->fetch_assoc();
      ?>

   
                    <form method="post" action="FormFoto.php" enctype="multipart/form-data">
  						<img src="<?=$key["foto"];?>" class="card-img-top" alt="...">

  							<div class="card-body">
    
                            </div>
                        </img>      
					</div> 
                        <?php } ?>

  <?php

   $sql= "SELECT * FROM postagens";
$resultadosql = $conexao->query($sql);
$variable = $resultadosql->fetch_all(MYSQLI_ASSOC);
?>  
<?php foreach ($variable as $value) {
     $sql= "SELECT * FROM usuarios WHERE id = ?";

      $sqlprep = $conexao->prepare($sql);
      $sqlprep->bind_param("i" ,$vetorUmRegistro["id_usuario"]);
      $sqlprep->execute();
      $resultadoSql = $sqlprep->get_result();
      $usuario = $resultadoSql->fetch_assoc();
      ?>
      
   
           <form method="post" action="FormFoto.php" enctype="multipart/form-data" style="float: right;">
                 <img src="<?=$value["foto"];?>" class="card-img-top" alt="...">

          
        
                   <?php } ?>
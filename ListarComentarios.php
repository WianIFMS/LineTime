<?php 
require_once"autoload.php";

$sql= "SELECT * FROM comentarios ORDER BY data_comentario DESC";

$resultadosql = Conexao::getConexao()->query($sql);

$vetorRegistros = $resultadosql->fetch_all(MYSQLI_ASSOC);




?>



  <?php
  
      $sql= "SELECT * FROM usuarios WHERE id = ?";

      $sqlprep = Conexao::getConexao()->prepare($sql);
      $sqlprep->bind_param("i" ,$vetorUmRegistro["id_usuario"]);
      $sqlprep->execute();
      $resultadoSql = $sqlprep->get_result();
      $usuario = $resultadoSql->fetch_assoc();

$sql= "SELECT * FROM comentarios WHERE id = ?";

      $sqlprep = Conexao::getConexao()->prepare($sql);
      $sqlprep->bind_param("i" ,$vetorUmRegistro["id"]);
      $sqlprep->execute();
      $resultadoSql = $sqlprep->get_result();
      $comentario = $resultadoSql->fetch_assoc();
  ?> 

<?php foreach ($vetorRegistros as $key => $value): ?>

<table>
 
<td><?=$value["comentario"];?><td>
  </table>     
<?php endforeach ?>

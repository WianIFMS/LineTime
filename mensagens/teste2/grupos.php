<div id="content">
	<?php
		
		require_once("../conexao.php");


		$sql = "SELECT * FROM usuarios_grupos WHERE id_usuario = ?";
		$sqlprep = $conexao->prepare($sql);
      	$sqlprep->bind_param("i" ,$_SESSION["id"]);
      	$sqlprep->execute();
      	$resultadoSql = $sqlprep->get_result();
      	$seleciona = $resultadoSql->fetch_all(MYSQLI_ASSOC);

		if(count($seleciona) <= 0){
			echo "Nenhum grupo encontrado";
		}else{
		foreach($seleciona as $row){
			$id_grupo = $row['id_grupo'];

			$sqlgrupo = "SELECT * FROM grupos WHERE id = ?";
			$sqlPrepGrupo = $conexao->prepare($sqlgrupo);
      		$sqlPrepGrupo->bind_param("i", $id_grupo);
      		$sqlPrepGrupo->execute();
      		$resultadoSqlGrupo = $sqlPrepGrupo->get_result();
      		$selecionaGrupo = $resultadoSqlGrupo->fetch_all(MYSQLI_ASSOC);

      		
      		foreach($selecionaGrupo as $rowGrupo){
      			$nome = $rowGrupo["nome"];
	?>
		<h5 class="h5-nomeConversas"> <span class="badge badge-success"><?php echo $nome;?></span> </h5>
		<a href="paginas/conversa-grupo.php?id_grupo=<?php echo $id_grupo;?>" target="chat" class="btn btn-info"><button class="button-xsmall pure-button" >Visualizar Conversa <i class="fas fa-eye"></i></button></a>
	
	<hr/>
	<?php }}}?>
</div>
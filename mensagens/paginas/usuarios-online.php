<?php
	session_start();
	require_once("../../conexao.php");

	$sql = "SELECT nome FROM usuarios WHERE online = 1 AND id != ?";

    $sqlprep = $conexao->prepare($sql);
    $sqlprep->bind_param("i", $_SESSION["id"]);
    $sqlprep->execute(); 
    $result = $sqlprep->get_result();
    $linha = $result->fetch_all(MYSQLI_ASSOC);
?>
<li class="pure-menu-heading email-item-unread"><span class="badge badge-success"><b>Online  (<?php echo count($linha);?>)</b></span></li>

	                      
	<?php foreach($linha as $onlines){?>  						
    <li class="pure-menu-item-2"><a href="#" class="pure-menu-link"><img width="22" height="22" alt="Tilo Mitra&#x27;s avatar" class="post-avatar" src="img/common/tilo-avatar.png"><?php echo $onlines["nome"];?><font color="#008B45"><i class="fas fa-comments"></i></font></a></li>
   	<?php }?>
						                  
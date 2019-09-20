<?php 
	session_start();
	require_once("../../conexao.php");
	
	$_SESSION["id_grupo"] = $_GET["id_grupo"];
?>
<html>
<head>
		<title>	Mensagens LT</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

		<link rel="stylesheet" href="../css/layouts/email.css">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

		<script type="text/javascript">
			$(document).ready(function(){
				comeca();
			})

			var timerI = null;
			var timerR = false;

			function para(){
				if(timerR)
					clearTimeout(timerI);
					timerR = false;
			}

			function comeca(){
				para();
				lista();
			}

			function lista(){
				$.ajax({
					url:"lista.php",
					success: function(textStatus){
						$("#lista").html(textStatus); //Mostra o resultado da página lista.php
					}
				})//Mostra o resultado da página lista.php
					
			
				timerI = setTimeout("lista()", 3000); //Tempo de espera para atualizar novamente
				timerR = true;
			}
</script>
</head>

<body>
<style>
.button-xsmall {
    font-size: 70%;
    color:white ;
    background:#556B2F ;
}
#btn-removerConversa{
    background:#8B1A1A;
}
.email-item-unread-4{
    border-bottom: 3px solid #BEBEBE;
}
.email-item-unread-5{
    border-bottom: 3.5px solid #556B2F;
}
/*.email-item-unread-6{
    border-bottom: 3.5px solid #2F4F4F;
}*/
.email-item-unread-7{
   border-bottom: 3.5px solid #DCDCDC;

}
.span-h6{
    margin-left:3px;
}
.pure-input-rounded{
    margin-left:3px;
}
.card-header{
    color:white;
    background:#000000;
    height:5%;
}
.card-footer{
    background:#000000;
    height:5%;
    margin-top:30px;
}
.input-ecreverMensagem{
    margin-top:5px;
    width:40%;
}
</style>

<div id="layout" class="content pure-g row" style="height:100%">
    

    <div id="main" class="pure-u-1" style="height:100%">
        <div class="email-content" style="height:100%">

            <div class="email-content-body">
                <div class="card text-center">
                    <div class="card-header">
                        <div class="usuario-header">
                            <img width="22" height="22" alt="Tilo Mitra&#x27;s avatar" class="post-avatar-2" src="../img/common/tilo-avatar.png">
                            Tilo Mitra <font color="#008B45"><i class="fas fa-comments"></i> </font> 
                        </div>
                    </div>
                    <form class="pure-form" id="form-chat" action="" method="POST" enctype="multipart/form-data">    
                        <input type="text" name="mensagem" class="pure-input-rounded input-ecreverMensagem" placeholder="Escrever Mensagem">
                        <input type="hidden" name="env" value="envMsg"/>
                        <button type="submit" class="pure-button"><b>Enviar</b> <font color="#556B2F"> <i class="fas fa-sign-in-alt" ></i> </font></button>
                    </form>

                    <?php
                    //Código para enviar mensagem --------------------------------------------------------------------

                        if(isset($_POST['env']) && $_POST['env'] == "envMsg"){
                            $mensagem = $_POST['mensagem'];
                            $id_grupo = $_GET["id_grupo"];
                            $id_de = $_SESSION["id"];

                            if(empty($mensagem)){
                                echo "<code>Digite sua mensagem</code>";
                            }else{
                                $sql = "INSERT INTO mensagens(id_de, id_grupo, mensagem, dt_mensagem) VALUES(?, ?, ?, ?)";
                                $sqlprep = $conexao->prepare($sql);                         //prepara sql
                                $sqlprep->bind_param("ssss", $id_de, $id_grupo, $mensagem, date("Y:m:d H:i"));                   //atribui parametros ao sql
                                $sqlprep->execute();
                                if($sqlprep !=""){
                                    echo "<code>Mensagem enviada</code>";
                                }else{
                                    echo "<code>Erro ao enviar a mensagem.</code>";
                                }
                            }
                        }
                    // Fim do código para enviar mensagem --------------------------------------------------------------
                    ?>
                    
                    <div id="lista">
                    	
                    </div>

                    <div class="card-footer text-muted">
                        
                    </div>
                    <button class="secondary-button email-item-unread-5 pure-button"><font color="#556B2F"><i class="fas fa-users"></i></font> <b>Criar Grupo</b></button>
                 </div>   
            </div>
        </div>
    </div>
</div>

<script src="https://yui-s.yahooapis.com/3.18.1/build/yui/yui-min.js"></script>
<script>
    YUI().use('node-base', 'node-event-delegate', function (Y) {

        var menuButton = Y.one('.nav-menu-button'),
            nav        = Y.one('#nav');

        // Setting the active class name expands the menu vertically on small screens.
        menuButton.on('click', function (e) {
            nav.toggleClass('active');
        });

        // Your application code goes here...

    });
</script>


</body>


</html>
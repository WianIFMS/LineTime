<?php 
    session_start();
?>
<html>
<head>
		<title>	Mensagens LT</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

		<link rel="stylesheet" href="css/layouts/email.css">

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
                    url:"paginas/usuarios-online.php",
                    success: function(textStatus){
                        $("#onlines").html(textStatus); //Mostra o resultado da página lista.php
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
.input-escreverMensagem{
    margin-top:5px;
    width:40%;
}
.teste{
    width: 300px;
}
</style>

<div id="layout" class="content pure-g">
    <div id="nav" class="pure-u">
        <a href="#" class="nav-menu-button">Menu</a>

        <div class="nav-inner">
            <div class="pure-u-1-2">
                <button class="button-saida email-item-unread-4"><i class="fas fa-backspace"></i> <a href="../logoff.php"> Sair</a></button>
                <a href="../index.php"> Home</a>
                <h3 class="email-content-title"> <img src="imageshtml.png" class="avatar" width="45" height="45" alt=""> </h3>
            </div> 

            <h5><font color="#FFFFFF">Todos os seus</font> <span class="badge badge-success"> Seguidores <i class="fas fa-user-friends"></i></span></h5>

            <hr></hr>
            <ul class="pure-menu-list" id="onlines">
	                        					
	              <?php //require_once("paginas/usuarios-online.php"); ?>	
		            						
			</ul>
            
            <hr></hr>
            <ul class="pure-menu-list ">

		        <li class="pure-menu-heading email-item-unread"><span class="badge badge-dark"><b>Offine  (3)</b></span></li>

		            <img width="22" height="22" alt="Tilo Mitra&#x27;s avatar" class="post-avatar" src="img/common/file-icons.png">
		            							
		            <li class="pure-menu-item-2"><a href="#" class="pure-menu-link">Caio </a> 

		           	</li>	

		           	<img width="22" height="22" alt="Tilo Mitra&#x27;s avatar" class="post-avatar" src="img/common/file-icons.png">

		            <li class="pure-menu-item-2"><a href="#" class="pure-menu-link">Jhonata </a>

		            </li>
		            							
		          	<img width="22" height="22" alt="Tilo Mitra&#x27;s avatar" class="post-avatar" src="img/common/file-icons.png">	

		            <li class="pure-menu-item-2"><a href="#" class="pure-menu-link">Wian </a>

		        </li>
		     </ul>    							
        </div>
    </div>

    <div id="list" class="pure-u-1">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"> <b>Conversas</b> <img src="imageshtml.png" class="avatar" width="26" height="26" alt=""></li>
            </ol>
        </nav>
        <form class="pure-form">
            <h6 class="span-h6"> <span class="badge badge-light email-item-unread-7"><font color="#2F4F4F">Busque suas conversas através do nome do seu seguidor</font> </span></h6>
            <input type="text" class="pure-input-rounded" placeholder="Pesquisar usuario">
            <button type="submit" class="pure-button email-item-unread-5"><b>Buscar</b> <i class="fas fa-search-plus"></i></button>
        </form>
       
        <div class="email-item email-item-unread email-item-unread-3 pure-g">
            <div class="pure-u-1">
            	<img width="26" height="26" alt="Tilo Mitra&#x27;s avatar" class="post-avatar" src="img/common/tilo-avatar.png">
                <?php require_once("paginas/grupos.php");?>

            </div>
        </div>

    </div>

        <iframe name="chat" width="74%" height="99%" >
                
        </iframe>

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

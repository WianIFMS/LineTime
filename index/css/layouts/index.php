<?php
	session_start();
	require_once("conexao.php");

    if (!isset($_SESSION['email']) && !isset($_SESSION['senha'])) {
       header("Location: login.php");
   }
    ?>
    <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive email layout.">
    <title>LineTime.com</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="css/layouts/email-old-ie.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel="stylesheet" href="css/layouts/email.css">
        <!--<![endif]-->
</head>
<body>

<div class="corpo">
    <div id="layout" class="content pure-g">
        <div id="nav" class="pure-u">
            
            <a href="#" class="nav-menu-button"> Menu <i class="fas fa-bars"></i></a>

            <div class="pure-u-1-2">
                        <h3 class="email-content-title"> <img src="imageshtml.png" class="avatar" width="45" height="45" alt=""> </h3>
            </div>        

            <div class="nav-inner">
                  
                <div class="pure-menu">
                    <ul class="pure-menu-list email-item-unread-2">
                        
                    	<li class="pure-menu-item"><a href="#" class="pure-menu-link">Perfil <i class="far fa-id-card"></i><br> </a></li>
                        <li class="pure-menu-item"><a href="#" class="pure-menu-link"> Menssagens <span class="badge badge-success">19</span><br> </a></li>
                        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Galeria de fotos <i class="fas fa-camera-retro"></i></a></li>
                        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Empresas <i class="fas fa-user-tie"></i></a></li>
                        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Seguidores <i class="fas fa-user-friends"></i></a></li>

                        <li class="pure-menu-heading email-item-unread"><b>Status</b></li>
                        <div class="custom-control custom-switch">
						  <input type="checkbox" class="custom-control-input" id="customSwitch1">
						  <label class="custom-control-label" for="customSwitch1"><i class="fas fa-comment-medical"></i> <font color="#008B45"> (Online)</font></label>
						</div>
						<div class="custom-control custom-switch">
						  <input type="checkbox" class="custom-control-input" id="customSwitch2">
						  <label class="custom-control-label" for="customSwitch2"><i class="fas fa-comment-slash"></i> <font color="#B22222">(Indisponível)</font></label>
						</div>
                        
                    </ul>
                </div>
            </div>
        
            <form class="pure-form" id="barra-pesquisa">
                <li class="pure-menu-heading email-item-unread">Pesquisar</li>
                <input class="input_busca" id="name" type="text" placeholder="Pesquisar usuarios">
                <button class="button-success pure-button" id="button-pesquisa"><i class="fas fa-search-plus"></i></button>
            </form>

        </div>

        <div id="list" class="pure-u-1">
            <div class="list">
	            			<a href="#" class="nav-menu-button-dois"> Atividade  <i class="fas fa-globe-americas"></i> </a>
	            
	            <div class="list-inner">
		            <table class="pure-table">	
		                    <thead>
		                        <tr>
		                            <th><span class="badge badge-light">Atividade</span> -  <i class="fas fa-globe-americas"> </i> </th>
		                        </tr>
		                    </thead>
		            </table> 

		            <div class="email-item email-item-selected email-item-unread email-item-unread-11 pure-g">
		                
		                <div class="pure-u">
		                    <img width="64" height="64" alt="Tilo Mitra&#x27;s avatar" class="email-avatar" src="img/common/tilo-avatar.png">
		                </div>

		                <div class="pure-u-3-4">
		                    <h5 class="email-name">Tilo Mitra</h5>
		                    <h6 class="email-subject"> <font color="#006400"><span class="badge badge-pill badge-success">Seguindo <i class="fas fa-user-friends"></i></font> </span></h6>
		                    <p class="email-desc">
		                      <b> Acabou de publicar algo...</b>
		                    </p>
		                </div>
		            </div>

		            <div class="email-item email-item-selected email-item-unread email-item-unread-11 pure-g">
		                <div class="pure-u">
		                    <img width="64" height="64" alt="Eric Ferraiuolo&#x27;s avatar" class="email-avatar" src="img/common/ericf-avatar.png">
		                </div>

		                <div class="pure-u-3-4">
		                    <h5 class="email-name">Eric Ferraiuolo</h5>
		                    <h6 class="email-subject"> <font color="#006400"><span class="badge badge-pill badge-success">Seguindo <i class="fas fa-user-friends"></i></font> </span></h6>
		                    <p class="email-desc">
		                      <b> Acabou de publicar algo...</b>
		                    </p>
		                </div>

		            </div>

		            <div class="email-item email-item-selected email-item-unread email-item-unread-11 pure-g">
		                <div class="pure-u">
		                    <img width="64" height="64" alt="YUI&#x27;s avatar" class="email-avatar" src="img/common/yui-avatar.png">
		                </div>

		                <div class="pure-u-3-4">
		                    <h5 class="email-name">YUI Library</h5>
		                    <h6 class="email-subject"> <font color="#B22222"><span class="badge badge-pill badge-danger">Anuncio <i class="fas fa-comment-dollar"></i></font> </span></h6>
		                    <h4 class="email-subject">Sucesso da nova rede social</h4>
		                    <p class="email-desc">
		                       Rede social com novas ferramentas e com boas perspectivas dos usuarios, vem fazendo sucesso no mundo inteiro.
		                    </p>
		                </div>
		            </div>

		            <div class="email-item email-item-selected email-item-unread email-item-unread-11 pure-g">
		                <div class="pure-u">
		                    <img width="64" height="64" alt="Reid Burke&#x27;s avatar" class="email-avatar" src="img/common/reid-avatar.png">
		                </div>

		                <div class="pure-u-3-4">
		                    <h5 class="email-name">Reid Burke</h5>
		                    <h6 class="email-subject"> <font color="#006400"><span class="badge badge-pill badge-success">Seguindo <i class="fas fa-user-friends"></i></font> </span></h6>
		                    <p class="email-desc">
		                      <b> Acabou de publicar algo...</b>
		                    </p>
		                </div>
		            </div>

		            <div class="email-item email-item-selected email-item-unread email-item-unread-11 pure-g">
		                <div class="pure-u">
		                    <img width="64" height="64" alt="Andrew Wooldridge&#x27;s avatar" class="email-avatar" src="img/common/andrew-avatar.png">
		                </div>

		                <div class="pure-u-3-4">
		                    <h5 class="email-name">Andrew Wooldridge</h5>
		                    <h6 class="email-subject"> <font color="#006400"><span class="badge badge-pill badge-success">Seguindo <i class="fas fa-user-friends"></i></font> </span></h6>
		                    <p class="email-desc">
		                      <b> Acabou de publicar algo...</b>
		                    </p>
		                </div>
		            </div>

		            <div class="email-item email-item-selected email-item-unread email-item-unread-11 pure-g">
		                <div class="pure-u">
		                    <img width="64" height="64" alt="Yahoo! Finance&#x27;s Avatar" class="email-avatar" src="img/common/yfinance-avatar.png">
		                </div>

		                <div class="pure-u-3-4">
		                    <h5 class="email-name">Yahoo! Finance</h5>
		                    <h6 class="email-subject"> <font color="#B22222"><span class="badge badge-pill badge-danger">Anuncio <i class="fas fa-comment-dollar"></i></font> </span></h6>
		                    <h4 class="email-subject">Novidades do governo brasileiro.</h4>
		                    <p class="email-desc">
		                         Derrota do governo na Câmara é resposta de Maia à queda de Bebianno.
		                    </p>
		                </div>
		            </div>

		            <div class="email-item email-item-selected email-item-unread email-item-unread-11 pure-g">
		                <div class="pure-u">
		                    <img width="64" height="64" alt="Yahoo! News&#x27; avatar" class="email-avatar" src="img/common/ynews-avatar.png">
		                </div>

		                <div class="pure-u-3-4">
		                    <h5 class="email-name">Yahoo! News</h5>
		                    <h6 class="email-subject"> <font color="#B22222"><span class="badge badge-pill badge-danger">Anuncio <i class="fas fa-comment-dollar"></i></font> </span></h6>
		                    <h4 class="email-subject">Summary for April 3rd, 2012</h4>
		                    <p class="email-desc">
		                        We found 10 news articles that you may like.
		                    </p>
		                </div>
		            </div>
		        </div>    
	        </div>    
       </div>

	        	<div id="historias" class="pure-u-1"> 
	        		<table class="pure-table">
	                    <thead>
	                        <tr>
	                            <th><font color="#000000"><span class="badge badge-light">Momento</span> - <i class="fas fa-hourglass-half"></i> <a class="pure-button pure-button-active-2" href="#"><i class="fas fa-history"></i></a> </th>
	                        </tr>
	                    </thead>
	            	</table> 
	        	
	            	<div class="email-item email-item-selected-2 email-item-unread-3 pure-g">
                
		                <div class="pure-u">
		                    <div class="img-historias"><img width="64" height="64" alt="Tilo Mitra&#x27;s avatar" class="email-avatar-h" src="img/common/tilo-avatar.png"> </div>
		                </div>

		                <div class="pure-u">
		                    <div class="img-historias"><img width="64" height="64" alt="Tilo Mitra&#x27;s avatar" class="email-avatar-h" src="img/common/reid-avatar.png"></div>
		                </div>

		                <div class="pure-u">
		                    <div class="img-historias"><img width="64" height="64" alt="Tilo Mitra&#x27;s avatar" class="email-avatar-h" src="img/common/andrew-avatar.png"></div>
		                </div>

		                <div class="pure-u">
		                    <div class="img-historias"><img width="64" height="64" alt="Tilo Mitra&#x27;s avatar" class="email-avatar-h" src="img/common/tilo-avatar.png"></div>
		                </div>

		                <p class="email-desc pure-u-1">
		                	<font color="#006400"><span class="badge badge-pill badge-success">Seguindo <i class="fas fa-user-friends"> </i> </span></font>
                    		<b><font color="#fff">Linha do tempo das pessoas que está seguindo, atualizada</font> - <a href="#">Clique para ver todos.</a></b>
                      	</p>	

            		</div>

	        	</div>	

	        	<div id="empresas" class="pure-u-1"> 
	        		<table class="pure-table" id="cabecalho-empresas">
	                    <thead>
	                        <tr>
	                            <th><font color="#000000"> <span class="badge badge-secondary">Empresas e Anuncios</span> - <i class="fas fa-user-tie"></i> <a class="pure-button pure-button-active-2" href="#"><i class="fas fa-history"></i></a> </th> </font>
	                        </tr>
	                    </thead>
	            	</table>

	            	<div class="email-item email-item-selected email-item-unread email-item-unread-11 pure-g">
                		<div class="pure-u">
                    		<img width="64" height="64" alt="Reid Burke&#x27;s avatar" class="email-avatar" src="img/common/americanas.png">
                		</div>

		                <div class="pure-u-3-4" id="corpo-empresas">
		                    <h5 class="email-name" id="h5-nome">Lojas Americanas</h5>
		                    <h6 class="email-subject"> <font color="#B22222"><span class="badge badge-pill badge-danger">Anuncio <i class="fas fa-comment-dollar"></i></font> </span></h6>
							
							<p class="email-desc" id="post-empresas">
		                     	<b> Estamos contratando em diversas áreas, para saber mais envie seu CV -</b>
		                    	<b> <a href="#">Enviar CV.</a></b>
		                    </p>
				
						</div>
            		</div>

            		<div class="email-item email-item-selected email-item-unread email-item-unread-11 pure-g">
                		<div class="pure-u">
                    		<img width="64" height="64" alt="Reid Burke&#x27;s avatar" class="email-avatar" src="img/common/walmart.png">
                		</div>

		                <div class="pure-u-3-4">
		                    <h5 class="email-name">Walmart</h5>
		                    <h6 class="email-subject"> <font color="#B22222"><span class="badge badge-pill badge-danger">Anuncio <i class="fas fa-comment-dollar"></i></font> </span></h6>
		                    <p class="email-desc">
		                     	<b> Promoções de verduras nessa semana -</b>
		                    	<b> <a href="#">Confira a promoção.</a></b>
		                    </p>
		                </div>
            		</div>

	            </div>	


                <div class="pure-u-1">

                    <div class="pure-table-2">
                        <h2 class="email-content-title-2"> <font color="#2E8B57">Line<font color="#B22222">T</font>ime</font></h2> 
                   		<button class="button-saida email-item-unread-4"><i class="fas fa-backspace"></i> Sair</button>
                    
                    </div>
                    

                    <div class="pure-table-3">

                    	<header class="post-header" id="post-header">
                                <img width="48" height="48" alt="Tilo Mitra&#x27;s avatar" class="post-avatar-p" src="img/common/ericf-avatar.png">

                                
                    			
                    			<textarea rows="2" cols="45" placeholder=" Escreva o que está pensando..." id="textarea"></textarea>
                               		
                                <a class="pure-button pure-button-active-2" href="#" id="button-postheader-1"> <i class="fas fa-angle-double-right"></i></a>
                                <button class="button-warning pure-button" id="button-postheader-2"><i class="fas fa-sign-in-alt" ></i> Publicar</button>
                                <button class="button-warning pure-button" id="button-postheader-3"><i class="fas fa-map-marker-alt" ></i> Localização</button>
                        </header>
                      
                    </div>
                </div>    
                <div class="separacao"> </div>
                
                <div class="pure-u-4-5">   
                    <div class="separacao"> </div>
                    
                    <section class="post">
                        <div class="quadrado">
                            <header class="post-header">
                                <img width="48" height="48" alt="Tilo Mitra&#x27;s avatar" class="post-avatar" src="img/common/tilo-avatar.png">

                                     <h3 class="post-title"> Tilo Mitra </h3>
                                        <div id="hora"><i class="fas fa-stopwatch"></i>  Publicou a 4min </div>
                                        <hr></hr>
                                        <p class="post-meta">
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

                    </section>
                     
                   
                    <section class="post">
                        <div class="quadrado">
                            <header class="post-header">
                                <img width="48" height="48" alt="Tilo Mitra&#x27;s avatar" class="post-avatar" src="img/common/ericf-avatar.png">

                                <h3 class="post-title"> Eric Ferraiuolo </h3>
                                <div id="hora"><i class="fas fa-stopwatch"></i>  Publicou a 20min </div>
                                <hr></hr>
                                <p class="post-meta">
                                        <h6 class="email-subject-2"><font color="#191970">Público <i class="fas fa-user-friends"></i></font></h6>
                                </p>
                            </header>

                            <div class="post-description">
                                <p class="email-desc">
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
                    </section>

                   
                    <section class="post">
                        <div class="quadrado">
                            <header class="post-header">
                                <img width="48" height="48" alt="Tilo Mitra&#x27;s avatar" class="post-avatar" src="img/common/yui-avatar.png">

                                <h3 class="post-title"> YUI LIBRARY </h3>
                                <div id="hora"><i class="fas fa-stopwatch"></i>  Publicou a 1h </div>
                                <hr></hr>
                                <p class="post-meta">
                                        <h6 class="email-subject-2"><font color="#B22222">Anuncio <i class="fas fa-comment-dollar"></i></font></h6>
                                </p>
                            </header>

                            <div class="post-description">
                                <p class="email-desc">
                                    <h3>
                                        

                                    </h3>    
                                </p>   
                            </div>
                        	<form class="pure-form">
                                <hr id="hr-post"></hr>
                                <input class="pure-input-1-2" type="text" placeholder="Comente a postagem" id="input-coment-post">
                            	<a class="pure-button pure-button-active" href="#" id="button-acao-comentario"><i class="fas fa-angle-double-right"></i></a>
                                <nav aria-label="breadcrumb">
									  <ol class="breadcrumb">
									    <li class="breadcrumb-item"><a href="#"><font color="#556B2F"><i class="fas fa-hand-peace"></i> Top  </font><span class="badge badge-success">11</span></a></li>
									    <li class="breadcrumb-item"><a href="#"><font color="#8B1A1A"><i class="fas fa-thumbs-down"></i> Não Gostei  </font><span class="badge badge-danger">4</span></a></li>
									    <li class="breadcrumb-item"><a href="#"><font color="#2F4F4F"><i class="fas fa-share-square"></i> Compartilhar  <span class="badge badge-dark">2</span></li>

									  </ol>
									</nav>

                            </form> 

                        </div>
                    </section>

                    
                    <section class="post">
                        <div class="quadrado">
                            <header class="post-header">
                                <img width="48" height="48" alt="Tilo Mitra&#x27;s avatar" class="post-avatar" src="img/common/reid-avatar.png">

                                <h3 class="post-title"> Reid Burke </h3>
                                <div id="hora"><i class="fas fa-stopwatch"></i>  Publicou a 1h </div>
                                <hr></hr>
                                <p class="post-meta">
                                        <h6 class="email-subject-2"><font color="#191970">Público <i class="fas fa-user-friends"></i></font></h6>
                                </p>
                            </header>

                            <div class="post-description">
                                <p class="email-desc">
                                  <h3>
                                    
                                  </h3>  
                                </p>   
                            </div>
                            <form class="pure-form">
                                <hr id="hr-post"></hr>
                                <input class="pure-input-1-2" type="text" placeholder="Comente a postagem" id="input-coment-post">
                            	<a class="pure-button pure-button-active" href="#" id="button-acao-comentario"><i class="fas fa-angle-double-right"></i></a>
                                <nav aria-label="breadcrumb">
									  <ol class="breadcrumb">
									    <li class="breadcrumb-item"><a href="#"><font color="#556B2F"><i class="fas fa-hand-peace"></i> Top  </font><span class="badge badge-success">11</span></a></li>
									    <li class="breadcrumb-item"><a href="#"><font color="#8B1A1A"><i class="fas fa-thumbs-down"></i> Não Gostei  </font><span class="badge badge-danger">4</span></a></li>
									    <li class="breadcrumb-item"><a href="#"><font color="#2F4F4F"><i class="fas fa-share-square"></i> Compartilhar  <span class="badge badge-dark">2</span></li>

									  </ol>
									</nav>

                            </form> 

                        </div>
                    </section>

                    
                    <section class="post">
                        <div class="quadrado">
                            <header class="post-header">
                                <img width="48" height="48" alt="Tilo Mitra&#x27;s avatar" class="post-avatar" src="img/common/andrew-avatar.png">

                                <h3 class="post-title"> ANDREW WOOLDRIDGE </h3>
                                 <div id="hora"><i class="fas fa-stopwatch"></i>  Publicou a 1h </div>
                                <hr></hr>
                                <p class="post-meta">
                                        <h6 class="email-subject-2"><font color="#191970">Público <i class="fas fa-user-friends"></i></font></h6>
                                </p>
                            </header>

                            <div class="post-description">
                                <p class="email-desc">
                                    <h3>
                                   

                                 <p>
                                    
                                </p>   
                                    </h3>
                                </p>   
                            </div>
                            <form class="pure-form">
                                <hr id="hr-post"></hr>
                                <input class="pure-input-1-2" type="text" placeholder="Comente a postagem" id="input-coment-post">
                            	<a class="pure-button pure-button-active" href="#" id="button-acao-comentario"><i class="fas fa-angle-double-right"></i></a>
                                <nav aria-label="breadcrumb">
									  <ol class="breadcrumb">
									    <li class="breadcrumb-item"><a href="#"><font color="#556B2F"><i class="fas fa-hand-peace"></i> Top  </font><span class="badge badge-success">11</span></a></li>
									    <li class="breadcrumb-item"><a href="#"><font color="#8B1A1A"><i class="fas fa-thumbs-down"></i> Não Gostei  </font><span class="badge badge-danger">4</span></a></li>
									    <li class="breadcrumb-item"><a href="#"><font color="#2F4F4F"><i class="fas fa-share-square"></i> Compartilhar  <span class="badge badge-dark">2</span></li>

									  </ol>
									</nav>

                            </form> 
                        </div>
                    </section>
                
                    
                    <section class="post">
                        <div class="quadrado">
                            <header class="post-header">
                                <img width="48" height="48" alt="Tilo Mitra&#x27;s avatar" class="post-avatar" src="img/common/yfinance-avatar.png">

                                <h3 class="post-title"> YAHOO! FINANCE </h3>
                                 <div id="hora"><i class="fas fa-stopwatch"></i>  Publicou a 3h </div>
                                <hr></hr>
                                <p class="post-meta">
                                        <h6 class="email-subject-2"><font color="#B22222">Anuncio <i class="fas fa-comment-dollar"></i></font></h6>
                                </p>
                            </header>

                            <div class="post-description">
                                <p class="email-desc">
                                    <h3>
                                       

                                  <p>
                                    
                                </p>  
                                    </h3>
                                </p>   
                            </div>
                            <form class="pure-form">
                                <hr id="hr-post"></hr>
                                <input class="pure-input-1-2" type="text" placeholder="Comente a postagem" id="input-coment-post">			
                            	<a class="pure-button pure-button-active" href="#" id="button-acao-comentario"><i class="fas fa-angle-double-right"></i></a>
                                <nav aria-label="breadcrumb">
									  <ol class="breadcrumb">
									    <li class="breadcrumb-item"><a href="#"><font color="#556B2F"><i class="fas fa-hand-peace"></i> Top  </font><span class="badge badge-success">11</span></a></li>
									    <li class="breadcrumb-item"><a href="#"><font color="#8B1A1A"><i class="fas fa-thumbs-down"></i> Não Gostei  </font><span class="badge badge-danger">4</span></a></li>
									    <li class="breadcrumb-item"><a href="#"><font color="#2F4F4F"><i class="fas fa-share-square"></i> Compartilhar  <span class="badge badge-dark">2</span></li>

									  </ol>
									</nav>

                            </form> 

                        </div>
                    </section>
				
					<div class="pure-u-1">
                    	<div class="pure-table-2">
                    		<header class="post-header">
                    			<div class="amigos-online">
                    				<table class="pure-table email-item-unread-2">
					                    
                    					<table class="pure-table">
						                    <thead>
						                        <tr>
						                            <th><font color="#000000"> online - <i class="fas fa-user-friends"></i></a></th> </font> </th>
						                        </tr>
						                    </thead>
            							</table> 

					                     <ul class="pure-menu-list ">
	                        					
	                        					<li class="pure-menu-heading email-item-unread"><span class="badge badge-success"><b>Online  (2)</b></span></li>

	                        					<img width="22" height="22" alt="Tilo Mitra&#x27;s avatar" class="post-avatar" src="img/common/tilo-avatar.png">
	                        						
	                        					<li class="pure-menu-item-2"><a href="#" class="pure-menu-link">Tilo Mitra <font color="#008B45"><i class="fas fa-comments"></i> </font></a> 

	                        					</li>
						                    	
						                    	<img width="22" height="22" alt="Tilo Mitra&#x27;s avatar" class="post-avatar" src="img/common/reid-avatar.png">

						                    	<li class="pure-menu-item-2"><a href="#" class="pure-menu-link">Reid Burke <font color="#008B45"><i class="fas fa-comments"></i> </font> </a>
						                    	
						                    	</li>	
		            						
						                    

						                    </ul>
	            							<ul class="pure-menu-list ">

		            							<li class="pure-menu-heading email-item-unread-3"><span class="badge badge-dark"><b>Offine  (3)</b></span></li>

		            							<img width="22" height="22" alt="Tilo Mitra&#x27;s avatar" class="post-avatar" src="img/common/file-icons.png">
		            							
		            							<li class="pure-menu-item-2"><a href="#" class="pure-menu-link">Caio </a> 

		            							</li>	

		            							<img width="22" height="22" alt="Tilo Mitra&#x27;s avatar" class="post-avatar" src="img/common/file-icons.png">

		            							<li class="pure-menu-item-2"><a href="#" class="pure-menu-link">Jhonata </a>

		            							</li>
		            							
		            							<img width="22" height="22" alt="Tilo Mitra&#x27;s avatar" class="post-avatar" src="img/common/file-icons.png">	

		            							<li class="pure-menu-item-2"><a href="#" class="pure-menu-link">Wian </a>

		            							</li>
		            						
		            							<div class="fab"  ontouchstart="">
												  <button class="main" >
												  </button>
												  <ul>
												    <li>
												      <button id="opcao3">
												      <i class="fas fa-redo-alt"></i>
												      </button>
												    </li>
												  </ul>
												</div>

		            						</ul>	
                    			</div>	
                    		</header>	
                    	</div>	
                	</div>
                </div>
                
            

    <script src="https://yui-s.yahooapis.com/3.18.1/build/yui/yui-min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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

        YUI().use('node-base', 'node-event-delegate', function (A) {
    
            var atividadeMenu = A.one('.nav-menu-button-dois'),
            	list       = A.one('#list');
            	    
            // Setting the active class name expands the menu vertically on small screens.
            
            atividadeMenu.on('click', function (e) {
                list.toggleClass('active');
            });

            // Your application code goes here...

        });
    	
    	var modal = document.getElementById('myModal');
		// Get the button that opens the modal
		var btn = document.getElementById("myBtn");
		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];
		// When the user clicks on the button, open the modal 
		btn.onclick = function() {
 		 modal.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
  			modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		  if (event.target == modal) {
		    modal.style.display = "none";
		  }
		}
		
		$('#myModal').modal(options)

    </script>
</div>
</body>

</html>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once"autoload.php";
?>
<!DOCTYPE html>

<head>
    <title>Cadastro </title>

    <link rel="stylesheet" href="formatacao.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilo.css" media="(min-width: 480px) and (max-width: 900px)"/>
    <link rel="stylesheet" href="estilo.css" media="screen and (max-width: 480px)" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 

    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">

    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="header">

            <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
                <a class="pure-menu-heading" href=""><font color="#00CD66">Line<font color="#B22222">T</font>ime<img src="imageshtml.png" class="avatar" width="24" height="24" alt=""></a></font>

                <ul class="pure-menu-list">
                    <li class="pure-menu-item email-item-unread"><a href="#" class="pure-menu-link">Entrar na conta <i class="fas fa-user-circle"></i></a></li>
                    <li class="pure-menu-item email-item-unread-2"><a href="CtlUsuario.php?op=form" class="pure-menu-link">Nova Conta <i class="fas fa-user-plus"></i></a></li>
                </ul>

            </div>
        </div>

        <div class="Corpo">	
            <div class="container">
                <div class="cadastro">
                    <hr></hr>
                    <h1 class="display-4"><b><font color="#2E8B57">Cadastro-</font></b> <img src="imageshtml.png" class="avatar" width="60" height="60" alt=""></h1>
                    <p class="lead"><font color="#A52A2A"><b>Olá sejá bem vindo, cadastre-se faça amizades novas, converse, relaciona-se.</b></font></p>
                </div>
            </div>

            <div class="campo_cadastro">
                <div id="formulario_2">
                    <h3> <font color="#2F4F4F"><div id="campo_cadastro">Campo de Cadastro</div></font> </h3>

                    <form id="formulario2" method="post" action="SalvaUsuario.php">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput"> <b>Nome de Usuario</b></label>
                                    <input id="n1" name="nome" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nome e sobrenome">
                                </div>
                            </div>	
                            <div class="col-md-6">	
                                <!--<div class="form-group">
                                        <label for="formGroupExampleInput2"><b>Infrome Seu nome</b></label>
                                        <input id="n2" name="ultimonome" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Informe seu nome">
                                </div>-->
                            </div>	
                            <div class="col-md-6">	
                                <div class="form-group">
                                    <label for="nascimento"><b>Data de nascimento</b></label>
                                    <input id="n2" name="nascimento" type="date" class="form-control" id="nascimento" placeholder="Informe sua data de nascimento">
                                </div>
                            </div>	
                            <div class="col-md-6">	
                                <div class="form-group">
                                    <label for="celular"><b>Número de celular</b></label>
                                    <input id="n2" name="celular" type="text" class="form-control" id="celular" placeholder="Informe número de celular">
                                </div>
                            </div>	
                            <div class="col-md-6">	
                                <div class="form-group">
                                    <div id="email_1">
                                        <label for="formGroupExampleInput"> <b>Informe seu email</b></label>
                                        <input id="email1" name="usuario" type="email" class="form-control" id="formGroupExampleInput" placeholder="Digite seu email">
                                    </div>
                                </div>
                            </div>	
                            <div class="col-md-6">	
                                <div class="form-group">
                                    <div id="senha_1">
                                        <label for="formGroupExampleInput2"><b>*Escolha uma Senha</b></label>
                                        <input id="senha1" name="senha" type="password" class="form-control" id="formGroupExampleInput2" placeholder="Digite sua senha">
                                    </div>
                                </div>
                            </div>


                        </div>

                </div>
                <div id="button"><button type="submit" class="btn btn-success btn-lg btn-block">Cadastrar</button></div>
                </form>
                <h5><a href="FormLogin.php" class="btn btn-danger btn-lg btn-block">Entrar na conta</a></h5>

            </div>	
        </div>
    </div>
</body>				
</html>			
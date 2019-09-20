<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A layout example that shows off a responsive product landing page.">
        <title>Login</title>

        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">


        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">


        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">


        <link rel="stylesheet" href="CSS/layouts/marketing.css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    </head>

    <body>
        <style scoped>
            .button-success {
                background: #1cb841; /* this is a green */
            }
            .button-warning {
                background: rgb(223, 117, 20); /* this is an orange */
            }

        </style>

        <div class="header">

            <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
                <a class="pure-menu-heading" href=""><font color="#00CD66">Line<font color="#B22222">T</font>ime<img src="imageshtml.png" class="avatar" width="24" height="24" alt=""></a></font>

                <ul class="pure-menu-list">
                    <li class="pure-menu-item email-item-unread"><a href="FormLogin.php" class="pure-menu-link">Entrar na conta <i class="fas fa-user-circle"></i></a></li>
                    <li class="pure-menu-item email-item-unread-2"><a href="FormUsuario.php" class="pure-menu-link">Nova conta <i class="fas fa-user-plus"></i></a></li>
                </ul>

            </div>
        </div>

        <div class="splash-container">
            <div class="splash">
                <h1 class="splash-head"><font color="#000000"><font color="#006400">L</font>ine<font color="#FF4040">T</font>ime.com  <img src="imageshtml.png" class="avatar" width="100" height="100" alt=""></h1></font>
                <p class="splash-subhead">
                    Deslize  para obter mais informações <img src="icone_29.png" class="avatar" width="25" height="25" alt="">
                </p>
                <p>
                    <a href="#email" class="pure-button pure-button-primary" id="botaoLogin"><font color="#556B2F">Login</font></a>
                </p>
            </div>
        </div>

        <div class="content-wrapper">
            <div class="content">
                <h2 class="content-head is-center"><font color="#2E8B57">Line<font color="#8B1A1A">T</font>ime</font> pensado em você <i class="fas fa-brain"></i></h2>

                <div class="pure-g">
                    <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">

                        <h3 class="content-subhead">
                            <i class="fab fa-android"></i>
                            LineTime para Andoid
                        </h3>
                        <p>
                            Downloads da LineTime já disponibilizados em aparelhos android baixe já.
                        </p>
                    </div>
                    <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                        <h3 class="content-subhead">
                            <i class="fab fa-app-store-ios"></i>
                            LineTime para IOS
                        </h3>
                        <p>
                            Downloads da LineTime já disponibilizados em aparelhos IOS baixe já.
                        </p>
                    </div>
                    <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                        <h3 class="content-subhead">
                            <i class="fas fa-box-open"></i>
                            Conheça todas as nossas ferramentas
                        </h3>
                        <p>
                            Ferramentas incriveis com o objetivo de proporcionar mais interagilidade e conforto
                            para cada usuário.
                        </p>
                    </div>
                    <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                        <h3 class="content-subhead">
                            <i class="fas fa-arrow-alt-circle-down"></i>
                            Deslize para entrar na conta ou cadastrar-se
                        </h3>
                        <p>
                            Mais abaixo temos a opção para você se cadastrar, caso não faça parte da nossa comudidade.
                        </p>
                    </div>
                </div>
            </div>

            <div class="ribbon l-box-lrg pure-g">
                <div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-2-5">
                    <img width="200" alt="File Icons" class="pure-img-responsive" src="img/common/file-icons.png">
                </div>
                <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5">

                    <h2 class="content-head content-head-ribbon">Clique em cadastrar- se e faça parte da comunidade LineTime.</h2>

                    <p>
                        Para realizarseu o cadastro, primeiro clique no botão abaixo, depois informe algumas informações
                        válidas para a realização do cadastro, como por exemplo: email válido, seu nome, alguns dados
                        pessoais e uma senha.
                        <br></br>

                        <button class="button-warning pure-button " id="botaoCadastro">Cadastrar- se</button>
                    </p>
                </div>
            </div>

            <div class="content">
                <h2 class="content-head is-center">Realize seu login.</h2>

                <div class="pure-g">
                    <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
                        <form class="pure-form pure-form-stacked" method="post" action="valida_login.php">

                            <p><h2><i class="fas fa-user-circle"></i> Sua conta </h2></p>

                            <fieldset>

                                <label for="email">Informe seu Email <i class="fas fa-at"></i></label>
                                <input id="email" type="email" placeholder="Seu email" id="email" name="usuario">

                                <label for="password">Informe sua senha <i class="fas fa-key"></i></label>
                                <input id="password" type="password" placeholder="Sua senha" id="senha" name="senha">

                                <button type="submit" class="button-success pure-button">Entrar na conta</button>
                            </fieldset>
                        </form>
                    </div>

                    <div class="l-box-lrg pure-u-1 pure-u-md-3-5">
                        <h4>Dicas de segurança</h4>
                        <p>
                            Crie uma senha forte.
                            Claro, não compartilhe-a com ninguém.
                            Saia do LineTime em computadores públicos.
                            Veja onde a sua conta está logada.
                            Veja quais apps controlam a sua conta.
                        </p>

                        <br></br>

                        <h2>Entre e divirta- se <i class="fas fa-smile-wink"></i></h2>

                    </div>
                </div>

            </div>

            <div class="footer l-box is-center">
                Uma nova experiência para nossos usuarios - linetime.com
            </div>

        </div>
        <script type="text/javascript">

            <script src="jquery.js"></script>

            <            script>
$(document).ready(functi                        on() {

            $('.botaoLogin').click(funct                ion() {
    $('html, body').an                imate({
    scrollTop: $('#email').offse                t().top
    },                1000);
    }                );
    
    }); </sc            ript>


        </body>
</html>

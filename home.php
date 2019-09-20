<?php
session_start();
require_once("Conexao.php");

if (!isset($_SESSION['email']) && !isset($_SESSION['senha'])) {
    header("Location: FormLogin.php");
}

$sql = "SELECT * FROM usuarios where id =?";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("i", $id);
$sqlprep->execute();
$sqlResultado = $sqlprep->get_result();
$vetorUsuario = $sqlResultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>LineTime</title>
        <link rel="sortcut icon" href="favicon.ico" type="image/x-icon" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A layout example that shows off a responsive email layout.">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="index/css/layouts/email.css">

    </head>
    <body>

        <div class="corpo">
            <div id="layout" class="content pure-g">
                <div id="nav" class="pure-u">

                    <a href="" class="nav-menu-button">Menu<i class="fas fa-bars"></i></a>

                    <div class="pure-u-1-2">
                        <h3 class="email-content-title"><img src="imageshtml.png" class="avatar" width="45" height="45" alt=""></h3>
                    </div>        

                    <div class="nav-inner">

                        <div class="pure-menu">
                            <ul class="pure-menu-list email-item-unread-2">

                                <li class="pure-menu-item"><a href="perfil.php" class="pure-menu-link">Perfil <i class="far fa-id-card"></i><br> </a></li>
                                <li class="pure-menu-item"><a href="mensagens/" class="pure-menu-link"> Grupos </span><br> </a></li>
                                <li class="pure-menu-item"><a href="trocademensagens/index.php" class="pure-menu-link"> Mensagens <span class="badge badge-success">19</span><br> </a></li>
                                <li class="pure-menu-item"><a href="" class="pure-menu-link">Galeria <i class="fas fa-camera-retro"></i></a></li>
                                <li class="pure-menu-item"><a href="empresas/index.html" class="pure-menu-link">Empresas <i class="fas fa-user-tie"></i></a></li>
                                <li class="pure-menu-item"><a href="" class="pure-menu-link">Amigos <i class="fas fa-user-friends"></i></a></li>

                                <li class="pure-menu-heading email-item-unread"><b>Status</b></li>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1"><i class="fas fa-comment-medical"></i> <font color="#008B45"> (Online)</font></label>
                                </div>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                    <label class="custom-control-label" for="customSwitch2"><i class="fas fa-comment-slash"></i> <font color="#B22222">(Ofline)</font></label>
                                </div>
                            </ul>
                        </div>
                    </div>

                    <form class="pure-form" method="POST" action="pesquisar.php" id="barra-pesquisa">

                        <input class="input_busca" id="name" type="text" placeholder="Pesquisar usuarios" name="pesquisar" >
                        <button class="button-success pure-button" type="submit" id="button-pesquisa"><i class="fas fa-search-plus">Pesquisar</i></button>
                    </form>
                </div>

                <div id="list" class="pure-u-1">
                    <div class="list">
                        <a href="" class="nav-menu-button-dois"> Atividade  <i class="fas fa-globe-americas"></i></a>

                        <div class="list-inner">
                            <table class="pure-table">	
                                <thead>
                                    <tr>
                                        <th><font color="#000000">Atividade - </font> <i class="fas fa-globe-americas"> <span class="badge badge-pill badge-primary">1</span></i> </th>
                                    </tr>
                                </thead>
                            </table> 

                            <div class="email-item email-item-selected email-item-unread pure-g">

                                <div class="pure-u">
                                    <?php if ($vetorUsuario["id"] == $_SESSION['id']) {?>
                                    
                                   
                                    <img width="64" height="64" alt="<?=$vetorUsuario['nome']; ?>" class="email-avatar" src="<?=$vetorUsuario['fotoperfil']; ?>">
                                <?php } ?>
                                </div>

                                <div class="pure-u-3-4">
                                    <h5 class="email-name"><?php echo $_SESSION['nome']; ?></h5>
                                    <h6 class="email-subject"> <font color="#006400">Amigo <i class="fas fa-user-friends"></i></font></h6>
                                    <p class="email-desc">
                                        <b> Acabou de publicar algo...</b>
                                    </p>
                                </div>
                            </div>

                            <div class="email-item email-item-selected email-item-unread pure-g">
                                <div class="pure-u">
                                    <img width="64" height="64" alt="Eric Ferraiuolo&#x27;s avatar" class="email-avatar" src="img/common/ericf-avatar.png">
                                </div>

                                <div class="pure-u-3-4">
                                    <h5 class="email-name">Eric Ferraiuolo</h5>
                                    <h6 class="email-subject"> <font color="#006400">Amigo <i class="fas fa-user-friends"></i></font></h6>
                                    <p class="email-desc">
                                        <b> Acabou de publicar algo...</b>
                                    </p>
                                </div>

                            </div>

                            <div class="email-item email-item-selected email-item-unread pure-g">
                                <div class="pure-u">
                                    <img width="64" height="64" alt="YUI&#x27;s avatar" class="email-avatar" src="img/common/yui-avatar.png">
                                </div>

                                <div class="pure-u-3-4">
                                    <h5 class="email-name">YUI Library</h5>
                                    <h6 class="email-subject"> <font color="#B22222">Anuncio <i class="fas fa-comment-dollar"></i></font></h6>
                                    <h4 class="email-subject">Sucesso da nova rede social</h4>
                                    <p class="email-desc">
                                        Rede social com novas ferramentas e com boas perspectivas dos usuarios, vem fazendo sucesso no mundo inteiro.
                                    </p>
                                </div>
                            </div>

                            <div class="email-item email-item-selected email-item-unread pure-g">
                                <div class="pure-u">
                                    <img width="64" height="64" alt="Reid Burke&#x27;s avatar" class="email-avatar" src="img/common/reid-avatar.png">
                                </div>

                                <div class="pure-u-3-4">
                                    <h5 class="email-name">Reid Burke</h5>
                                    <h6 class="email-subject"> <font color="#006400">Amigo <i class="fas fa-user-friends"></i></font></h6>
                                    <p class="email-desc">
                                        <b> Acabou de publicar algo...</b>
                                    </p>
                                </div>
                            </div>

                            <div class="email-item email-item-selected email-item-unread pure-g">
                                <div class="pure-u">
                                    <img width="64" height="64" alt="Andrew Wooldridge&#x27;s avatar" class="email-avatar" src="img/common/andrew-avatar.png">
                                </div>

                                <div class="pure-u-3-4">
                                    <h5 class="email-name">Andrew Wooldridge</h5>
                                    <h6 class="email-subject"> <font color="#006400">Amigo <i class="fas fa-user-friends"></i></font></h6>
                                    <p class="email-desc">
                                        <b> Acabou de publicar algo...</b>
                                    </p>
                                </div>
                            </div>

                            <div class="email-item email-item-selected email-item-unread pure-g">
                                <div class="pure-u">
                                    <img width="64" height="64" alt="Yahoo! Finance&#x27;s Avatar" class="email-avatar" src="img/common/yfinance-avatar.png">
                                </div>

                                <div class="pure-u-3-4">
                                    <h5 class="email-name">Yahoo! Finance</h5>
                                    <h6 class="email-subject"> <font color="#B22222">Anuncio <i class="fas fa-comment-dollar"></i></font></h6>
                                    <h4 class="email-subject">Novidades do governo brasileiro.</h4>
                                    <p class="email-desc">
                                        Derrota do governo na Câmara é resposta de Maia à queda de Bebianno.
                                    </p>
                                </div>
                            </div>

                            <div class="email-item email-item-selected email-item-unread pure-g">
                                <div class="pure-u">
                                    <img width="64" height="64" alt="Yahoo! News&#x27; avatar" class="email-avatar" src="img/common/ynews-avatar.png">
                                </div>

                                <div class="pure-u-3-4">
                                    <h5 class="email-name">Yahoo! News</h5>
                                    <h6 class="email-subject"> <font color="#B22222">Anuncio <i class="fas fa-comment-dollar"></i></font></h6>
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
                                <th><font color="#000000">Historias - <i class="fas fa-landmark"></i> <a class="pure-button pure-button-active-2" href=""><i class="fas fa-history"></i></a></th>
                            </tr>
                        </thead>
                    </table> 

                    <div class="email-item email-item-selected-2 email-item-unread-3 pure-g">

                        <div class="pure-u">
                            <div class="img-historias">
                                <img width="64" height="64" alt="Tilo Mitra&#x27;s avatar" class="email-avatar-h" src="img/common/tilo-avatar.png">
                            </div>
                        </div>


                        <div class="pure-u">
                            <div class="img-historias">

                                <img width="64" height="64" alt="Tilo Mitra&#x27;s avatar" class="email-avatar-h" src="img/common/reid-avatar.png">

                            </div>
                        </div>

                        <div class="pure-u">
                            <div class="img-historias">
                                <img width="64" height="64" alt="Tilo Mitra&#x27;s avatar" class="email-avatar-h" src="img/common/andrew-avatar.png">
                            </div>
                        </div>

                        <div class="pure-u">
                            <div class="img-historias">
                                <img width="64" height="64" alt="Tilo Mitra&#x27;s avatar" class="email-avatar-h" src="img/common/tilo-avatar.png">
                            </div>
                        </div>

                        <p class="email-desc pure-u-1">
                            <font color="#006400">Amigos <i class="fas fa-user-friends"></i></font>
                            <b>
                                Linha do tempo de seus amigos, atualizada - <a href="">Clique para ver todos.</a>
                            </b>
                        </p>	
                    </div>
                </div>	
                <div id="empresas" class="pure-u-1"> 
                    <table class="pure-table" id="cabecalho-empresas">
                        <thead>
                            <tr>
                                <th><font color="#000000">Empresas e Anuncios - <i class="fas fa-user-tie"></i> <a class="pure-button pure-button-active-2" href=""><i class="fas fa-history"></i></a></th></font>
                            </tr>
                        </thead>
                    </table>
                    <?php
                    require_once"conexao.php";

                    $sql = "SELECT * FROM postagem ORDER BY data_postagem DESC";
                    $resultadosql = $conexao->query($sql);
                    $vetorRegistros = $resultadosql->fetch_all(MYSQLI_ASSOC);
                    ?>
                    <?php
                    // Inicio do foreach ------------------------------------------------
                    foreach ($vetorRegistros as $vetorUmRegistro) {
                        // Select do usuario que postou esta postagem
                        $sql = "SELECT * FROM empresas WHERE id_empresa = ?";

                        $sqlprep = $conexao->prepare($sql);
                        $sqlprep->bind_param("i", $vetorUmRegistro["id_empresa"]);
                        $sqlprep->execute();
                        $resultadoSql = $sqlprep->get_result();
                        $usuario = $resultadoSql->fetch_assoc();
                        ?> 
                        <div class="email-item email-item-selected email-item-unread pure-g">
                            <div class="pure-u">
                                <img width="64" height="64" alt="<?= $usuario["nome"]; ?>" class="email-avatar" src="<?= $usuario["foto"]; ?>">
                            </div>
                            <div class="pure-u-3-4" id="corpo-empresas">
                                            <!--<iframe src="empresas/ListaTudo.php"></iframe>-->
                                <h5 class="email-name" id="h5-nome"><?= $usuario["nome"]; ?></h5>
                                <h6 class="email-subject"> <font color="#B22222"><?= $vetorUmRegistro["titulo"]; ?><i class="fas fa-comment-dollar"></i></font></h6>
                                <p class="email-desc" id="post-empresas">
                                    <b><?= $vetorUmRegistro["postagem"]; ?></b>
                                </p>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>	
                <div class="pure-u-1">

                    <div class="pure-table-2">
                        <h2 class="email-content-title-2"> <font color="#2E8B57">Line<font color="#B22222">T</font>ime</font></h2> 
                        <button class="button-saida email-item-unread-4"><i class="fas fa-backspace"></i> <a href="logoff.php"> Sair</a></button>

                    </div>
                    <div class="pure-table-3">

                        <header class="post-header" id="post-header">
                            <img width="48" height="48" alt="<?=$vetorUsuario['nome']; ?>" class="post-avatar-p" src="<?=$vetorUsuario['fotoperfil']; ?>">

                            <?php
                            if (isset($_POST['id'])) {
                                $id = $_POST['id'];
                            } else {
                                $id = 0;
                            }

                            $sql = "SELECT * FROM postagens where id=?";
                            $sqlprep = $conexao->prepare($sql);
                            $sqlprep->bind_param("i", $id);
                            $sqlprep->execute();
                            $resultadoSql = $sqlprep->get_result();
                            $vetorUmRegistro = $resultadoSql->fetch_assoc();

                            require_once("Form_Postagem.php");
                            ?>

                        </header>

                    </div>
                </div>    
                <div class="separacao"></div>

                <!---------- INICIO DAS POSTAGENS ------------------------------> 

                <div class="pure-u-4-5">   
                    <div class="separacao"></div>
                    <?php
                    require_once("ListarPostagem.php");
                    ?>
                    <!----------------- FINAL DAPOSTAGEM ---------------------------->


                    <div class="pure-u-1">
                        <div class="pure-table-2">
                            <header class="post-header">
                                <div class="amigos-online">

                                    <table class="pure-table">
                                        <thead>
                                            <tr>
                                                <th><font color="#000000">Amigos online - <i class="fas fa-user-friends"></i></font></th>
                                            </tr>
                                        </thead>
                                    </table> 
         
                                    <ul class="pure-menu-list ">

                                        <li class="pure-menu-heading email-item-unread"><b>Online</b></li>
    <?php
        $sql = "SELECT * FROM usuarios";
        $sqlprep = $conexao->query($sql);
        $vetorRegistros = $sqlprep->fetch_all(MYSQLI_ASSOC);

        foreach ($vetorRegistros  as $value) {
            if ($value['online'] == 1) {          
            
          
    ?>
                                        <img width="22" height="22" alt="Tilo Mitra&#x27;s avatar" class="post-avatar" src="<?= $value['fotoperfil'];?>">

                                        <li class="pure-menu-item-2"><a href="" class="pure-menu-link"><?= $value['nome'];?> <font color="#008B45"><i class="fas fa-comments"></i> </font></a></li>

                                       <!-- <img width="22" height="22" alt="Tilo Mitra&#x27;s avatar" class="post-avatar" src="img/common/reid-avatar.png">

                                        <li class="pure-menu-item-2"><a href="" class="pure-menu-link">Reid Burke <font color="#008B45"><i class="fas fa-comments"></i></font></a>
                                        </li>	-->
 <?php } } ?>  
                                    </ul>
                                 
                                    <ul class="pure-menu-list ">

                                        <li class="pure-menu-heading email-item-unread-3"><b>Offine</b></li>
  <?php
        $sql = "SELECT * FROM usuarios";
        $sqlprep = $conexao->query($sql);
        $vetorRegistros = $sqlprep->fetch_all(MYSQLI_ASSOC);

        foreach ($vetorRegistros  as $value) {
            if ($value['online'] == 0) {          
            
          
    ?>
                                        <img width="22" height="22" alt="Tilo Mitra&#x27;s avatar" class="post-avatar" src="<?= $value['fotoperfil'];?>">

                                        <li class="pure-menu-item-2"><a href="" class="pure-menu-link"><?= $value['nome'];?></a></li>	

                                        
                                    <?php } } ?>
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Online
                                                <span class="badge badge-dark badge-pill">2</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Offine
                                                <span class="badge badge-dark badge-pill">3</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Ver todos
                                                <font color="#556B2F"><i class="fas fa-user-friends"></i></font>
                                            </li>
                                        </ul>
                                    </ul>	
                                </div>	
                            </header>	
                        </div>	
                    </div>
                </div>
            </div>
        </th>
</body>
<script src="https://yui-s.yahooapis.com/3.18.1/build/yui/yui-min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
    YUI().use('node-base', 'node-event-delegate', function (Y) {

        var menuButton = Y.one('.nav-menu-button'),
                nav = Y.one('#nav');

        // Setting the active class name expands the menu vertically on small screens.
        menuButton.on('click', function (e) {
            nav.toggleClass('active');
        });

        // Your application code goes here...

    });

    YUI().use('node-base', 'node-event-delegate', function (A) {

        var atividadeMenu = A.one('.nav-menu-button-dois'),
                list = A.one('#list');
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
    btn.onclick = function () {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    $('#myModal').modal(options)
</script>
</div>
</html>
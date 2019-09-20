
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once"autoload.php";
require_once"Conexao.php";

$sql = "SELECT * FROM postagens  ORDER BY data_postagem DESC";
$resultadosql = $conexao->query($sql);
$vetorRegistros = $resultadosql->fetch_all(MYSQLI_ASSOC);

?>

<section class="post">
   


    <?php
    $sql = "SELECT * FROM postagens WHERE id = ?";

    $sqlprep = $conexao->prepare($sql);
    $sqlprep->bind_param("i", $vetorUmRegistro["id"]);
    $sqlprep->execute();
    $resultadoSql = $sqlprep->get_result();
    $postagem = $resultadoSql->fetch_assoc();

  
    foreach ($vetorRegistros as $vetorUmRegistro) {


                   // Select do usuario que postou esta postagem
            $sql = "SELECT * FROM usuarios WHERE id = ?";
            $sqlprep = $conexao->prepare($sql);
            $sqlprep->bind_param("i", $vetorUmRegistro["id_usuario"]);
            $sqlprep->execute();
            $resultadoSql = $sqlprep->get_result();
            $usuario = $resultadoSql->fetch_assoc();
            $id_user = $_SESSION["id"];

            $sql = "SELECT * FROM amigos WHERE id = ?";
            $sqlprep = $conexao->prepare($sql);
            $sqlprep->bind_param("i", $vetorUmRegistro["id_seguido"]);
            $sqlprep->execute();
            $resultadoSql = $sqlprep->get_result();
            $amigo = $resultadoSql->fetch_assoc();
          
         

           ?>

                    <div class="quadrado">
                        <header class="post-header">
                            <img width="48" height="48" alt=" <?= $usuario["nome"]; ?>" class="post-avatar" src="<?= $usuario["fotoperfil"]; ?>">
                            <h3 class="post-title"><a href="perfil.php?<?= $usuario["nome"];?>"><?=$usuario["nome"];?></a></h3>
                            <div id="hora">
                                <i class="fas fa-stopwatch"></i>
                                Publicou em <?= $postagem["data_postagem"]; ?>
                            </div>
                            <hr></hr>
                            <p class="post-meta">
                 <!-- <td><?= $vetorUmRegistro["id"]; ?><td> -->
                            <td><?= $vetorUmRegistro["postagem"]; ?><td>
                                <h5 class="email-subject-2"><font color="#191970">Público <i class="fas fa-user-friends"></i></font></h5>
                                </p>
                                <form method="post" action="excluir_postagem.php">
                                    <input type="hidden" name="id" value="<?= $vetorUmRegistro["id"]; ?>">
                                    <?php
                                    // Inicio do if ----------------------------------------------
                                    // Se este post for do usuário que está logado
                                    // então mostre os botão de apagar post
                                    if ($vetorUmRegistro["id_usuario"] === $_SESSION["id"]) {
                                        ?>
                                        <button type="submit">Apagar</button>
                                        <?php
                                    }
                                    // Fim do if ------------------------------------------------
                                    ?>

                                </form>

                                <form method="post" action="Form_Postagem.php">
                                    <input type="hidden" name="id" value="<?= $vetorUmRegistro["id"]; ?>">
                                    <?php
                                    // Inicio do if ----------------------------------------------
                                    // Se este post for do usuário que está logado
                                    // então mostre os botão de editar post
                                    if ($vetorUmRegistro["id_usuario"] === $_SESSION["id"]) {
                                        ?>
                                        <button type="submit">Editar</button>

                                        <?php
                                    }
                                    // Fim do if ------------------------------------------------
                                    ?>
                                </form>

                        </header>
                        <div class="post-description">
                            <p class="email-desc-2">
                            <h3></h3>  
                            </p>  
                        </div>
                        <form class="pure-form" action="SalvarComentarios.php" method="post">

                            <hr id="hr-post"></hr>
                            <input type="hidden" name="id" id="id">
                            <input class="pure-input-1-2" type="text" name="comentario" id="comentario" placeholder="Comente a postagem" id="input-coment-post">
                            <button type="submit">comentar</button>
                            <a class="pure-button pure-button-active" href="#" id="button-acao-comentario"><i class="fas fa-angle-double-right"></i></a><a class="comentarios" href="#" data-toggle="modal" data-target="#exampleModalCenter">Comentarios <i class="fas fa-comments"></i></a>
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
                                            <!-- <?php // require_once"ListarComentarios.php";    ?>-->
                                        </div>

                                        <div class="modal-footer">

                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                                            <input class="pure-input-1-2" type="text" placeholder="Comente a postagem" id="input-coment-post">

                                            <button type="submit">comentar</button>
                                            </form>
                                        </div>

                                    </div>

                                </div>

                            </div>                     


                            <nav aria-label="breadcrumb">

                                <ol class="breadcrumb">
                                    <form method="post" action="SalvarCurtidas.php">
                                        <li  name="gostei" value="1" class="breadcrumb-item" type="submit">
                                            <a href="#"  >
                                                <font color="#556B2F">
                                                <i class="fas fa-hand-peace"></i>
                                                <button type="submit" name="gostei" value="1"> top</button>  </font>
                                                <span class="badge badge-success">contador de curtida</span></a></li>

                                    </form>

                                    <form method="post" action="SalvarCurtidas.php">
                                        <li  name="naogostei" value="1" class="breadcrumb-item" type="submit">
                                            <a href="#">
                                                <font color="#8B1A1A">
                                                <i class="fas fa-thumbs-down"></i> 
                                                <button type="submit" name="naogostei" value="1"> Untop</button>  </font>
                                                <span class="badge badge-danger">contador de curtida</span></a></li>

                                    </form>

                                    <li class="breadcrumb-item"><a href="#"><font color="#2F4F4F"><i class="fas fa-share-square"></i> Compartilhar  <span class="badge badge-dark">2</span></li>

                                </ol>

                            </nav>  



                    </div>

                    <?php
                }
        
            // Fim do foreach -----------------------------------------------------------
    
    ?> 

</section>
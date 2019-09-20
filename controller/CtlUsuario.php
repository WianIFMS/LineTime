<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once"Conexao.php";
CtlUsuario::requisicoes();
class CtlUsuario {
    private static $dao;
    private static $arquivoForm;
    private static $arquivoLista;
    
    public static function requisicoes(){
        require_once 'autoload.php';
        self::$dao = new DaoUsuario(Conexao::getConexao());
        self::$arquivoForm = "FormUsuario.php";
        self::$arquivoLista = "ListaUsuario.php";
        if(isset($_GET["op"])) {
            switch ($_GET["op"]) {
                case "listar": self::listar(); break;
                case "salvar": self::salvar(); break;
                case "remover": self::remover(); break;
                case "form": self::form(); break;
              
                default: self::listar(); break;
            }
        }
        else {
            self::listar();
        }
    }
    
    public static function form(){
        if (isset($_POST['id'])) {   // se existe posição id no vetor $_POST
            $id = $_POST['id'];     // arquivo foi chamado pelo form da listagem
        } else {
            $id = 0;                // arquivo não foi chamado pelo form da listagem e sim pelo botao novo
        }
        $usuario = self::$dao->getPorId($id);
        require_once self::$arquivoForm;
    }
    
 
    
    
    public static function listar(){
        $vetorRegistros = self::$dao->getLista();
        if(isset($_GET["msgOk"])) {
            $msgOk = $_GET["msgOk"];
        }
        require_once self::$arquivoLista;
    }
    
    public static function remover(){
        self::$dao->remover($_POST["id"]);
        self::redirectLista("Removido com sucesso.");
    }
    
    public static function salvar(){
   /*     //$daoImagem = new DaoImagem($conexao);
//$daoImagem->salvar($daoImagem->toObjeto($_POST));
date_default_timezone_set('America/Sao_Paulo'); // definir fuso horario
    $dataEHora = date('dmYHi'); // pegar data e hora do servidor
    $nome_arquivo = "fotos/" . $dataEHora . $_FILES["foto_perfil"]["name"]; // definir pasta e nome do arquivo no servidor
    $nome_arquivo_tmp = $_FILES["foto_perfil"]["tmp_name"]; // pegar nome do arquivo temporario no servidor
    $msgErroArquivo = ""; // definir msg de erro vazia
    if(move_uploaded_file($nome_arquivo_tmp, $nome_arquivo)==false){ // se ocorrer erro...
        $msgErroArquivo = "Arquivo de foto não pode ser enviado."; // define msg de erro
    }

    $_POST["foto_perfil"] = $nome_arquivo;*/
        self::$dao->salvar(self::$dao->toObjeto($_POST));
        $msgOk = "Salvo com sucesso. " . $msgErroArquivo;
        self::redirectLista($msgOk);
    }    
    
    public static function redirectLista($msgOk){
        header('location: '.'FormLogin.php?msgOk='.$msgOk);    
    }
    
    
}
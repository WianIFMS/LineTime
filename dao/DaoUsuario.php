<?php


class DaoUsuario
{

    private $conexao;

    function __construct($conexao) {
        $this->conexao = $conexao;
    }

    public function salvar(Usuario $usuario) {
        if ($usuario->getId() == 0) {
            $this->insere($usuario);
        } else {
            $this->altera($usuario);
        }
    }

    public function insere(Usuario $usuario) { // Inserindo informações no banco
        
if($usuario->getNome()==true &&   $usuario->getCelular()!=null && $usuario->getEmail()==true && $usuario->getSenha()==true ){
    if($usuario->getNome() != ""   && $usuario->getCelular() != ""  && $usuario->getEmail() != "" && $usuario->getSenha() != "" )
    {
    
       /* $nome = $_POST['nome'];     
        $nascimento =$_POST['nascimento'];
        $celular =$_POST['celular'];
        $email =$_POST['email'];
        $senha =$_POST['senha'];      
        $senha = md5($senha);*/
        $sql = "INSERT into usuarios(nome,nascimento,celular,email,senha) values(?,?,?,?,?)";
        $sqlprep = $this->conexao->prepare($sql);
        $param = $this->toVetor($usuario);
        $sqlprep->bind_param("sddss", $param["nome"], $param["nascimento"], $param["celular"], $param["email"], $param["senha"]);

        $sql2 = "SELECT * FROM usuarios WHERE email = '$email'";

        $insert = mysqli_query($this->conexao,$sql2) or die("erro");

        if (mysqli_num_rows($insert) == 0) {   
         $sqlprep->execute();      
        }else{
         echo "ja existe";
        }
    } 
    else
    {
        echo "Não foi possivel cadastrar";
    }
} // var_dump($usuario);exit;
   
    }
   

    public function altera(Usuario $usuario) {
        $sql = "UPDATE usuarios set nome=?,nascimento=?,celular=?,email=?,senha=? where id=?";
        $sqlprep = $this->conexao->prepare($sql);
        $param = $this->toVetor($usuario);
        $sqlprep->bind_param("sddssi", $param["nome"], $param["nascimento"], $param["celular"], $param["email"], $param["senha"] ,$param["id"]);
        $sqlprep->execute();
    }

   
     public function remover($id) {
        $sql = "delete from usuarios where id=?";
        $sqlpreparado = $this->conexao->prepare($sql);
        $sqlpreparado->bind_param('i', $id);
        $sqlpreparado->execute();
    }

    public function getLista() {
        $vetorObjetos = array();
        $sql = "SELECT * from usuarios order by nome";
        $reultadoSql = $this->conexao->query($sql);
        $vetorRegistros = $reultadoSql->fetch_all(MYSQLI_ASSOC);
        foreach ($vetorRegistros as $registro) {
            array_push($vetorObjetos, $this->toObjeto($registro));
        }
        return $vetorObjetos;
    }


    public function getListaPesquisa() {
        $vetorObjetos = array();
        if (isset($_POST["pesquisar"])) {
            $pesquisar = $_POST["pesquisar"];
            $pesquisaLike = "%" . $pesquisar . "%";
            $sql = "SELECT * from usuarios where nome like ? order by nome";
            $sqlprep = $this->conexao->prepare($sql);
            $sqlprep->bind_param("ss", $pesquisaLike,$pesquisaLike);
            $sqlprep->execute();
            $resultadoSql = $sqlprep->get_result();
        } else {
            $pesquisar = "";
            $sql = "SELECT * from usuarios order by nome";
            $resultadoSql = $this->conexao->query($sql);
        }
        $vetorRegistros = $resultadoSql->fetch_all(MYSQLI_ASSOC);
        foreach ($vetorRegistros as $registro) {
            array_push($vetorObjetos, $this->toObjeto($registro));
        }
        return $vetorObjetos;
    }

    public function getPorId($id) {
        $sql = "SELECT * from usuarios where id=?";
        $sqlprep = $this->conexao->prepare($sql);
        $sqlprep->bind_param("i", $id);
        $sqlprep->execute();
        $registro = $sqlprep->get_result()->fetch_assoc();
        return $this->toObjeto($registro);
    }

    public function toObjeto($registro) {
        return new Usuario($registro["id"],$registro["nome"], $registro["nascimento"], $registro["celular"],$registro["email"],$registro["senha"]);
    }

    public function toVetor(Usuario $usuario) {
        $vetor = array();
         $vetor["id"] = $usuario->getId();
        $vetor["nome"] = $usuario->getNome();
        $vetor["nascimento"] = $usuario->getNascimento();
        $vetor["celular"] = $usuario->getCelular();
         $vetor["email"] = $usuario->getEmail();
          $vetor["senha"] = $usuario->getSenha();

        return $vetor;
    }



}
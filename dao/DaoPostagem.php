<?php

class DaoPostagem {

    private $conexao;

    function __construct($conexao) {
        $this->conexao = $conexao;
    }

    public function salvar(Postagem $postagem) {
        if ($postagem->getId() == 0) {
            $this->insere($postagem);
        } else {
            $this->altera($postagem);
        }
    }

    public function insere(Postagem $postagem) { // Inserindo informações no banco

        $sql = "INSERT into postagens(postagem,id_usuario) values(?,?)";
        $sqlprep = $this->conexao->prepare($sql);
        $param = $this->toVetor($postagem);
        $sqlprep->bind_param("si", $param["postagem"], $param["id_usuario"]);
  
         $sqlprep->execute();      
       
    }
   

    public function altera(Postagem $postagem) {
        $sql = "UPDATE postagens set postagem=? where id=?";
        $sqlprep = $this->conexao->prepare($sql);
        $param = $this->toVetor($postagem);
        $sqlprep->bind_param("si", $param["postagem"],$param["id"]);
        $sqlprep->execute();
    }

   
     public function remover($id) {
        $sql = "delete from postagens where id=?";
        $sqlpreparado = $this->conexao->prepare($sql);
        $sqlpreparado->bind_param('i', $id);
        $sqlpreparado->execute();
    }

    public function getLista() {
        $vetorObjetos = array();
        $sql = "SELECT * from postagens order by data_postagem";
        $resultadoSql = $this->conexao->query($sql);
        $vetorRegistros = $resultadoSql->fetch_all(MYSQLI_ASSOC);
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
            $sql = "SELECT * from postagens where postagem like ? order by data_postagem";
            $sqlprep = $this->conexao->prepare($sql);
            $sqlprep->bind_param("ss", $pesquisaLike,$pesquisaLike);
            $sqlprep->execute();
            $resultadoSql = $sqlprep->get_result();
        } else {
            $pesquisar = "";
            $sql = "SELECT * from postagens order by data_postagem";
            $resultadoSql = $this->conexao->query($sql);
        }
        $vetorRegistros = $resultadoSql->fetch_all(MYSQLI_ASSOC);
        foreach ($vetorRegistros as $registro) {
            array_push($vetorObjetos, $this->toObjeto($registro));
        }
        return $vetorObjetos;
    }

    public function getPorId($id) {
        $sql = "SELECT * from postagens where id=?";
        $sqlprep = $this->conexao->prepare($sql);
        $sqlprep->bind_param("i", $id);
        $sqlprep->execute();
        $registro = $sqlprep->get_result()->fetch_assoc();
        return $this->toObjeto($registro);
    }

    public function toObjeto($registro) {
        return new Postagem($registro["id"],$registro["postagem"], $registro["id_usuario"]);
    }

    public function toVetor(Postagem $postagem) {
        $vetor = array(); 
        $vetor["id"] = $postagem->getId();      
        $vetor["postagem"] = $postagem->getPostagem();
        $vetor["id_usuario"] = $postagem->getIdUsuario();    

        return $vetor;
    }



}
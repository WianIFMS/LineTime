<?php

class Postagem{
      
     private $id;  
    private $postagem;  
    private $id_usuario;
  

    function __construct( $id,$postagem, $id_usuario) {
       $this->id = $id;  
        $this->postagem = $postagem;    
       $this->id_usuario = $id_usuario;
        
    }

     public function getId() {
        return $this->id;
    }
  public function getPostagem() {
        return $this->postagem;
    }

  
 public function getIdUsuario() {
        return $this->id_usuario;
      }
 public function setId($id) {
        $this->id = $id;
    }
   public function setPostagem($postagem) {
        $this->postagem= $postagem;
    }
 
    public function setIdUsuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }
  

}

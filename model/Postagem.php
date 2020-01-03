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
function getId() {
        return $this->id;
    }
   function getPostagem() {
        return $this->postagem;
    }

  
 function getIdUsuario() {
        return $this->id_usuario;
      }
 function setId($id) {
        $this->id = $id;
    }
     function setPostagem($postagem) {
        $this->postagem= $postagem;
    }
 
     function setIdUsuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }
  

}

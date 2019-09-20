<?php

class Usuario {

    private $id;
    private $nome;  
    private $nascimento;
    private $celular;
    private $email;
    private $senha;
   // private $foto_perfil;

    function __construct($id, $nome, $nascimento,$celular,$email,$senha) {
        $this->id = $id;
        $this->nome = $nome;    
       $this->nascimento = $nascimento;
       $this->celular = $celular;
       $this->email = $email;
       $this->senha = $senha;
        //$this->foto_perfil = $foto_perfil;
        
    }

    function getId() {
        return $this->id;
    }

   function getNome() {
        return $this->nome;
    }

  
 function getNascimento() {
        return $this->nascimento;
      }

  function getCelular() {
        return $this->celular;
    }
 function getEmail() {
        return $this->email;
    }
 function getSenha() {
        return $this->senha;
    }

    function setId($id) {
        $this->id = $id;
    }

     function setNome($nome) {
        $this->nome= $nome;
    }
 
     function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }
      function setCelular($celular) {
        $this->celular = $celular;
    }
      function setEmail($email) {
        $this->email = $email;
    }
      function setSenha($senha) {
        $this->senha = $senha;
    }


}

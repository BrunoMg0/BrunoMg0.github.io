<?php

class Contato {

    private $nome;
    private $email;
    private $fone;
    private $msg;
    
    function __construct() {
        
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }
    
    function getFone() {
        return $this->fone;
    }
    
    function getMsg() {
        return $this->msg;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }
    
    function setFone($fone) {
        $this->fone = $fone;
    }
    
    function setMsg($msg) {
        $this->msg = $msg;
    }

}

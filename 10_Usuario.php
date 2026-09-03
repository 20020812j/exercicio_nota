<?php

class Usuario {
    private $nome;
    private $logado = false;
    
    public function __construct($nome) {
        $this->nome = $nome;
    }
    
    public function login() {
        $this->logado = true;
    }
    
    public function logout() {
        $this->logado = false;
    }
    
    public function estaLogado() {
        return $this->logado;
    }
    
    public function getNome() {
        return $this->nome;
    }
}

?>

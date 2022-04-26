<?php

class Pessoa{
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setBairro() {
        $this->bairro = $bairro;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function setCep() {
        $this->cep = $cep;
    }

    public function getCep() {
        return $this->cep;
    }

    
}

?>
<?php

class Pessoa {
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setBairro($bairro){
        $this->bairro = $bairro;
    }

    public function getBairro(){
        return $this->bairro;
    }

    public function setCep($cep){
        $this->cep = $cep;
    }

    public function getCep(){
        return $this->cep;
    }
}

$temp = new Pessoa();
    $temp->setNome("Mel");
    echo "<h1>" . $temp->getNome() . "</h1><br>";
    $temp->setEndereco("Aguia de Haia");
    echo "<h2>" . $temp->getEndereco() . "</h2><br>";
    $temp->setBairro("AE Carvalho");
    echo "<h3>" . $temp->getBairro() . "</h3><br>";
    $temp->setCep("18546354854");
    echo "<h4>" . $temp->getCep() . "</h4><br>";


?>

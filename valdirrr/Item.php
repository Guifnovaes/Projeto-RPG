<?php
class Item {
    public $nome;
    public $tamanho;
    public $classe;

    public function __construct($nome, $tamanho, $classe) {
        $this->nome = $nome;
        $this->tamanho = $tamanho;
        $this->classe = $classe;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getTamanho() {
        return $this->tamanho;
    }

    public function getClasse() {
        return $this->classe;
    }
}

?>

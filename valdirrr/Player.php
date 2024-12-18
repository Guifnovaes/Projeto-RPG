<?php
class Player {
    public $nickname;
    public $nivel;
    public $inventario;

    public function __construct($nickname) {
        $this->nickname = $nickname;
        $this->nivel = 1;
        $this->inventario = new Inventario(20); 
    }

    public function getNickname() {
        return $this->nickname;
    }

    public function getNivel() {
        return $this->nivel;
    }

    public function getInventario() {
        return $this->inventario;
    }

    public function subirNivel() {
        $this->nivel++;
        $novaCapacidade = $this->inventario->getCapacidadeMaxima() + ($this->nivel * 3);
        $this->inventario->setCapacidadeMaxima($novaCapacidade);
    }

    public function coletarItem(Item $item) {
        if ($this->inventario->adicionarItem($item)) {
            echo "<h2 />";
            echo "{$this->nickname} coletou o item {$item->getNome()}.";
        } else {
            echo "<h2 />";
            echo "<span style='color:red;'>Inventário cheio! {$this->nickname} não pode coletar o item {$item->getNome()}!.</span>" ;
        }
    }

    public function soltarItem(Item $item) {
        if ($this->inventario->removerItem($item)) {
            echo "<br>"; echo "<br>";
            echo "{$this->nickname} Dropou o item {$item->getNome()}.";
        } else {
            echo "<br>";
            echo "{$item->getNome()} não encontrado no inventário de {$this->nickname}.";
        }
    }
}
?>

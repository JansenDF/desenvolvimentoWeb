<div class="titulo">Data</div>

<?php

class Data {
    public $dia = 01;
    public $mes = 01;
    public $ano = 1970;

    public function exibirData(){
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$d1 = new Data();
echo $d1->exibirData() . "<br>";

$d2 = new Data();
$d2->dia = 2;
$d2->mes = 8;
$d2->ano = 1987;
echo $d2->exibirData() . "<br>";
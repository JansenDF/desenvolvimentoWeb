<div class="titulo">Include Objeto</div>

<?php
include('include_cliente.php');
$p = new Pessoa('Jansen', '34');
echo $p->ExibirPessoa() . '<br>';
isset($p);

$c = new Cliente('Daniele', '33', 'daniele.dias');
echo $c->ExibirCliente() . '<br>';
isset($c);


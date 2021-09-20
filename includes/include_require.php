<div class="titulo">Include vs Require</div>

<?php

echo 'Usando include com arquivo INEXISTENTE<br>';
include('Arquivo_inexistente.php');

echo 'Usando require com arquivo INEXISTENTE<br>';
require('Arquivo_inexistente.php');

echo 'Não achou mesmo...?';

<div class="titulo">Sessão</div>

<?php

session_start();

print_r($_SESSION);
echo '<br>';

if(!$_SESSION['nome']){
    $_SESSION['nome'] = 'Jansen';
}

if(!$_SESSION['email']){
    $_SESSION['email'] = 'jansen@zmail.com';
}

print_r($_SESSION);

?>

<p>
    <a href="exercicio.php?dir=sessao&file=basico_sessao_alterar">Acessar sessão</a>
</p>
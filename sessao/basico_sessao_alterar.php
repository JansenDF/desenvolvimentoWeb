<?php
    session_start();
    print_r($_SESSION);
?>
<p>
    <b>Nome:</b> <?= $_SESSION['nome'] ?><br>
    <b>Email:</b> <?= $_SESSION['email'] ?>
</p>

<?php
    $_SESSION['email'] = 'lima@email.com';
?>

<p>
    <a href="exercicio.php?dir=sessao&file=basico_sessao">Voltar</a>
</p>
<p>
    <a href="exercicio.php?dir=sessao&file=basico_sessao_limpar">Limpar Sessão</a>
</p>
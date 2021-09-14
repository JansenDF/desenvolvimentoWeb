<div class="titulo">Desafio Tabela 2</div>

<form action="#" method="POST">
    <label>Linha</label>
    <input type="text" name="linha">
    <label>Coluna</label>
    <input type="text" name="coluna">

    <button type="submit">Enviar</button>
</form>

<?php

$linha = $_POST["linha"];
$coluna = $_POST["coluna"];

echo "$linha";
echo "$coluna";

echo "<table>";

$num = 1;

for($i = 0; $i < $linha; $i++){
    echo "<tr>";
    for($j = 0; $j < $coluna; $j++){
        echo "<td> $num </td>";
        $num++;
    }
    echo "</tr>";
}

echo "</table>";

?>
<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
    }
    table tr {
        border: 1px solid #444;
    }
    table td {
        border: 1px solid #444;
    }
</style>
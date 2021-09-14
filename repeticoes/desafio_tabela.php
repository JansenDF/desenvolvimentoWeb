<div class="titulo">Desafio Tabela</div>

<?php

$matriz = [
    ['01', '02', '03', '04', '05'],
    ['06', '07', '08', '09', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20']
];

echo "<table>";

foreach($matriz as $indice => $linhas){
    if($indice % 2 !== 0){
        echo "<tr class='blue'>";
    }else{
        echo "<tr>";
    }
    foreach($linhas as $numeros){
        echo "<td> $numeros </td>";
    }
    echo "</tr>";
}
echo "</table>"
?>

<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }
    
    table td {
        border: 1px solid #444;
    }

    .blue {
        background-color: blue;
    }
</style>
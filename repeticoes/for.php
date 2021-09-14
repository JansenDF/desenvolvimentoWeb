<div class="titulo">For</div>

<?php

$matriz = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

echo $matriz[0][0];
echo $matriz[0][1];
echo $matriz[0][2];
echo $matriz[0][3];
echo $matriz[0][4];
echo $matriz[1][0];
echo $matriz[1][1];
echo $matriz[1][2];
echo '<hr>';
for($i = 0; $i < count($matriz); $i++){
    for($j = 0; $j < count($matriz[$i]); $j++){
       echo $matriz[$i][$j];
    }
}


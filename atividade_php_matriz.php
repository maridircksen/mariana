<?php
$matriz = array();

$matriz[0][1] = '01';
$matriz[0][2] = '02';
$matriz[1][1] = '11';
$matriz[1][2] = '12';

foreach ($matriz as $itens) {
    foreach ($itens as $item) {
        echo $item . "\n";
    }
}

  



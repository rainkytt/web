<?php
/**
 * Created by PhpStorm.
 */
header('Refresh: 1');
for($rida = 1; $rida <= 5; $rida++) {
    $varv = '#';
    for ($kord = 1; $kord <= 6; $kord++){
        $juhuarv = rand(0, 15);
        $symbol = dechex($juhuarv);
        $varv = $varv.$symbol;
    }
    echo '<font color="'.$varv.'">'.
        'Värviline tekst'.
        '</font>'.
        '<br />';
}
<?php
/**
 * Created by PhpStorm.
 * User: Rain Kütt
 * Date: 21.12.2017
 * Time: 14:20
 */
$arvud = array(); // tühi massiiv
// lisame väärtused
$arvud[] = 5;
$arvud[] = 1;
$arvud[] = 4;
$arvud[] = 2;
$arvud[] = 3;

// väärtustega massiiv
$arvud1 = [1,2,3,4,5];
echo '<pre>';
print_r($arvud);
echo '</pre>';

// korralik väljastus
for($i=0; $i < count($arvud); $i++){
    echo '<b>'.$arvud[$i].'</b><br />';
}

foreach ($arvud1 as $arv){
    echo '<i>'.$arv.'</i><br />';
}

echo '<hr />';

/*
 * 1.
 * Koosta funktsioon nimega looMassiiv,
 * mis võtab parameetrina massiivi elementide
 * arvu ja loob juhuarvudest (täisarvud)
 * vahemikust 100-999 koosneva massiivi.
 * Loodud massiiv tuleb tagastada
 * põhiprogrammile ja kontrollida sisu
 * testväljastuse abil - näiteks print_r
 * */
function looMassiiv($elementideArv){
    $massiiv = array();
    for ($kord=1; $kord <= $elementideArv; $kord++){
        $juhuarv = rand(100, 999);
        $massiiv[] = $juhuarv;
    }
    return $massiiv;
}

$testMassiiv = looMassiiv(5);
echo '<pre>';
print_r($testMassiiv);
echo '</pre>';
echo '<hr />';


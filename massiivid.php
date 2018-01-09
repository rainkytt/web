<b>Massiivid</b>
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


echo "<b>Ülesanne 1</b>";
echo "<p> Koosta funktsioon nimega looMassiiv,
 mis võtab parameetrina massiivi elementide
 arvu ja loob juhuarvudest (täisarvud)
 vahemikust 100-999 koosneva massiivi.
 Loodud massiiv tuleb tagastada
 põhiprogrammile ja kontrollida sisu
 testväljastuse abil - näiteks print_r
 </p>";
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


echo "<b>Ülesanne 2</b>";
echo "<p>
 Loo funktsioon nimega valjastaMassiiv,
 mis võtab parameetrina massiivi ja
 väljastab tema elemendid
 üheveerulise tabeli kujul
 Väljundi loomisel kasutada foreach
 tsükkel</p>";

function valjastaMassiiv($massiiv){
    echo '<table border="1">';
    foreach ($massiiv as $element){
        echo '<tr>';
            echo '<td>';
            echo $element;
            echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
valjastaMassiiv($testMassiiv);
echo '<hr />';


echo "<b>Ülesanne 3</b>";
echo "<p>
 Loo funktsioon nimega vahetaMinMax, mis võtab
 parameetrina täisarvude massiivi (testimises
 võib kasutada looMassiiv funktsiooniga
 genereeritud massiiv)
 ja leiab kõige väiksema ja kõige suurema
 elemendi antud massiivis ning vahetab nende asukohad.
 Kontrolli kas kohad on vahetatud kasutades
 valjastaMassiiv funktsiooni</p>";

function vahetaMinMax(&$massiiv){
    $min = min($massiiv);
    $max = max($massiiv);
    echo 'Miinimum = '.$min.'<br />';
    echo 'Maksimum = '.$max.'<br />';
    for($i = 0; $i < count($massiiv); $i++){
        if($massiiv[$i] == $min){
            $massiiv[$i] = $max;
        } else if($massiiv[$i] == $max) {
            $massiiv[$i] = $min;
        }
        echo $massiiv[$i].'<br />';
    }
}
vahetaMinMax($testMassiiv);
valjastaMassiiv($testMassiiv);
echo '<hr />';


echo "<b>Ülesanne 4</b>";
echo "<p>
 Loo funktsioon nimega elementideKorrutis, mis
 võtab parameetrina täisarvude massiivi ja leiab
 korrutise nendest arvudest, mis on suurem kui 0
 ja mille indeksid on paarisarvud.
 Kontrollimiseks näiteks kasutada järgmine massiiv:
 1, 0, 6, 0, 0, 3, 5
 Tulemus väljastatakse antud funktsiooni abil kujul:
 Tulemus: 1 * 6 * 5 = 30</p>";

function elementideKorrutis ($massiiv) {
    $korrutis = 1;
    for($i = 0; $i < count($massiiv); $i++) {
        if($massiiv[$i] > 0){
            if($i % 2 == 0)
                $korrutis = $korrutis * $massiiv[$i];
        }
    }
    echo 'Massiivi korrutis on: '.$korrutis.'<br />';
}

$massiivKontroll = array(1,0,6,0,0,3,5);
elementideKorrutis($massiivKontroll);
echo '<hr />';


echo "<b>Ülesanne 5</b>";
echo "<p>
 Töötluses kasutada massiiv
 $massiiv = array(1, 1, 1, 2, 2, 2, 2, 3).
 Loo funktsioon mitteDubleeri, mis võtab
 parameetrina massiivi ja ei väljasta dubleeritud
 elemendid. Ehk näide massiivi puhul tuleb väljastada
 ainult 1, 2, 3 - s.t. ilma dubleerimist.
 NB! Lahenduses tuleb kasutada AINULT ÜKS foreach
 tsükli abil, samuti EI SAA kasutada
 grupeerimisfunktisoone ega muuta antud massiivi
</p>";
function mitteDubleeri($massiiv){
    $tulemusM = array();
    foreach($massiiv as $arv){
        if(!in_array($arv, $tulemusM)){
            $tulemusM[] = $arv;
        }
    }
    valjastaMassiiv($tulemusM);
}

$massiiv = array(1, 1, 1, 2, 2, 2, 2, 3);
mitteDubleeri($massiiv);

?>
<?php
/**
 * Created by PhpStorm.
 * User: Rain Kütt
 * Date: 25.01.2018
 * Time: 10:47
 */
require_once 'tekst.php';

// loome teksti objekti
// $minuTekst = new tekst();
// määrame tekstile sisu
// $minuTekst->maaraTekst('Tere maailm');
$minuTekst = new tekst('Tere maailm!');
// vaatame, mis on objekti sees
echo '<pre>';
print_r($minuTekst);
echo '</pre>';
// prindime välja
$minuTekst->prindiTekst();
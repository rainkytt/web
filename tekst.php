<?php
/**
 * Created by PhpStorm.
 * User: Rain Kütt
 * Date: 25.01.2018
 * Time: 10:32
 */

class tekst
{ // klasssi algus
    // omadused ehk väljad ehk fields
    // klassi muutuja ehk variable
    var $sone = ''; // teksti kirjeldavad sõnad
    // meetod ehk funktsioonid ehk method
    // teksti määramine
    // maaraTekst ('Tere maailm')
    function maaraTekst($sone){
        $this->sone = $sone;
    }
    // teksti väljastamine
    function prindiTekst(){
        echo $this->sone.'<br />';
    }
} // klassi lõpp
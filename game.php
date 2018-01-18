<?php
/**
 * Created by PhpStorm.
 * User: Rain Kütt
 * Date: 12.01.2018
 * Time: 8:55
 * method="post" on peidetud
 * method="get" on avalik aadressireal
 * väljasta ka arvamuste arv
 */

function vorm(){
    $serveriArv = $_POST['serveriArv'];
    $serveriArv = isset($serveriArv) ? $serveriArv : rand(1,20);
    $katseteArv = $_POST['katseteArv'];
    $katseteArv = isset($katseteArv) ? ++$katseteArv : 1;
    echo $serveriArv.'<br />';
    echo '<p>Juhuslik arv on vahemikus 1 kuni 20</p>';
    echo '
    <form action="game.php" method="post">
    <input type="hidden" name="serveriArv" value="'.$serveriArv.'">
    <input type="hidden" name="katseteArv" value="'.$katseteArv.'">
    <input type="text" name="kasutajaArv"><br />
    <input type="submit" value="Kontrolli">
    </form>
    ';
}

function vormiAndmed(){
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    $korras = false;
    if (empty($_POST)){
        echo 'Vorm ei saatnud andmed<br />';
    } else {
        echo 'Andmed on saadetud<br />';
        if (empty($_POST['kasutajaArv'])){
            echo 'Andmed peavad olema sisestatud<br />';
        } else {
            echo 'Andmed on sisestatud<br />';
            $korras = true;
        }
    }
    return $korras;
}

function arvuKontroll($kasutajaArv, $serveriArv, $katseteArv){

    if ($kasutajaArv > $serveriArv){
        echo 'Pakutud arv on suurem<br />';

    }
    if ($kasutajaArv < $serveriArv){
        echo 'Pakutud arv on väiksem<br />';

    }
    if (abs($serveriArv - $kasutajaArv) <= 5){
        if ($kasutajaArv == $serveriArv){

            echo 'Õnnitlen, arvasid ära! <br />';
            echo 'Katsete arv: '.$katseteArv.'<br />';
            exit;
        }
        echo 'Aga oled juba väga lähedal<br />';
    }
}

vorm();
//vormiAndmed();
if (vormiAndmed()){
    arvuKontroll($_POST['kasutajaArv'], $_POST['serveriArv'], $_POST['katseteArv']);
} else {
    echo 'Andmed peavad olema sisestatud<br />';
}

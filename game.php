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
    $num_tries = (isset($num_tries)) ? ++$num_tries : 0; //proov2
    echo $serveriArv.'<br />';
    echo '<p>Juhuslik arv on vahemikus 1 kuni 20</p>';
    echo '
    <form action="game.php" method="post">
    <input type="hidden" name="serveriArv" value="'.$serveriArv.'">
    <input type="hidden" name="num_tries" value="<?php print $num_tries; ?>"> <!--proov2-->
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

function arvuKontroll($kasutajaArv, $serveriArv){
    $count=0; //proov1
    if ($kasutajaArv > $serveriArv){
        echo 'Pakutud arv on suurem<br />';
        $count++; //proov1
    }
    if ($kasutajaArv < $serveriArv){
        echo 'Pakutud arv on väiksem<br />';
        $count++; //proov1
    }
    if (abs($serveriArv - $kasutajaArv) <= 5){
        if ($kasutajaArv == $serveriArv){
            $count++; //proov1
            echo 'Õnnitlen, arvasid ära, arvamisi oli kokku: '.$count.$num_tries.'<br />';
            exit;
        }
        echo 'Aga oled juba väga lähedal<br />';
    }
}

vorm();
//vormiAndmed();
if (vormiAndmed()){
    arvuKontroll($_POST['kasutajaArv'], $_POST['serveriArv']);
} else {
    echo 'Andmed peavad olema sisestatud<br />';
}

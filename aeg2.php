<?php
/**
 * Created by PhpStorm.
 * User: Rain Kütt
 * Date: 18.01.2018
 * Time: 14:48
 */
function paev(){
    $valik = '<select name="paev">';
    for($paev = 1; $paev < 32; $paev++){
        $valik = $valik.'<option value="'.$paev.'">'.$paev.'</option>';
    }
    $valik = $valik.'</select>';
    return $valik;
}

function kuu(){
    $kuud = array('Jaanuar', 'Veebruar', 'Märts', 'Aprill', 'Mai', 'Juuni', 'Juuli', 'August', 'September', 'Oktoober', 'November', 'Detsember');
    /*automaatne genereerimine ainult inglise keeles*/
    /*$kuud = array();
    for($i = 1; $i < 13; $i++){
        $kuud[] = date('F', mktime(0, 0, 0, $i));
    }*/
    $valik = '<select name="kuu">';
    foreach($kuud as $kuu){
        $valik = $valik.'<option value="'.$kuu.'">'.$kuu.'</option>';
    }
    $valik = $valik.'</select>';
    return $valik;
}

function aasta(){
    $hetkeAasta = date('Y', time());
    $valik = '<select name="aasta">';
    for($aasta = 1920; $aasta < 2040; $aasta++){
        if($aasta == $hetkeAasta){
            $valik = $valik.'<option value="'.$aasta.'" selected>'.$aasta.'</option>';
        }
        $valik = $valik.'<option value="'.$aasta.'">'.$aasta.'</option>';
    }
    $valik = $valik.'</select>';
    return $valik;
}


function registreerimisVorm(){
    echo ' 
    <form action="" method="post"> 
        <table> 
            <tr> 
                <td>Eesnimi</td> 
                <td colspan="2"><input type="text" name="eesnimi"></td> 
            </tr> 
            <tr> 
                <td>Perenimi</td> 
                <td colspan="2"><input type="text" name="perenimi"></td> 
            </tr> 
            <tr> 
                <td>Aasta</td> 
                <td>Kuu</td> 
                <td>Päev</td> 
            </tr> 
            <tr> 
                <td>'.aasta().'</td> 
                <td>'.kuu().'</td> 
                <td>'.paev().'</td> 
            </tr> 
            <tr> 
                <td colspan="3"> 
                    <input type="submit" value="Registreeri"> 
                </td> 
            </tr> 
        </table> 
    </form> 
    ';
}

registreerimisVorm();

echo '<pre>';
print_r($_POST);
/*
date_default_timezone_set('Europe/Tallinn');
print_r(getdate());*/

date_default_timezone_set('Europe/Tallinn');
$hetkel = time();
    echo $hetkel.'<br />';

$kell = date('H:i');
echo $kell.'<br />';

$aasta = date('Y', $hetkel);
echo $aasta.'<br />';
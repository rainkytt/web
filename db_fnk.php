<?php
/**
 * Created by PhpStorm.
 * User: Rain Kütt
 * Date: 19.01.2018
 * Time: 12:30
 */
require_once 'db_conf.php'; //nõuame conf faili sisu kasutamist

// andmebaasi serveriga ühendamine ja valimine
function yhendus(){
    $yhendus = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if(!$yhendus){
            echo 'Puudub ühendus andmebaasi serveriga<br />';
            echo mysqli_connect_error().'<br />';
            echo mysqli_connect_errno().'<br />';
            return false;
        } else {
            echo 'Ühendus andmebaasi serveriga on olemas<br />';
            return $yhendus;
        }
}

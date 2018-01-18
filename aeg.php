<?php
/**
 * Created by PhpStorm.
 * User: Rain Kütt
 * Date: 17.01.2018
 * Time: 21:31
 */

function paev(){
    $str = '';
    for ($i=1; $i<32; $i++ ){
        $str.="<option value=\"paev\"> $i</option>";
    }
    return $str;
}

function registreerimisVorm(){
    echo '
    <form action="aeg.php" method="post">
    Eesnimi &nbsp;<input type="text" name="eesnimi"><br />
    Perenimi <input type="text" name="perenimi"><br />
    Aasta &emsp;&emsp;Kuu &emsp;&emsp;&emsp;Päev<br />
    <select>
    <option value="aasta">1920</option>
    </select>
    <select>
    <option value="jaanuar">Jaanuar</option>
    <option value="veebruar">Veebruar</option>
    <option value="marts">Märts</option>
    <option value="aprill">Aprill</option>
    <option value="mai">Mai</option>
    <option value="juuni">Juuni</option>
    <option value="juuli">Juuli</option>
    <option value="august">August</option>
    <option value="september">September</option>
    <option value="oktoober">Oktoober</option>
    <option value="november">November</option>
    <option value="detsember">Detsember</option>
    </select>
    <select>'.paev().'</select><br />
    <input type="submit" value="Registreeri"><br />
    </form>
    ';
}



registreerimisVorm();
?>
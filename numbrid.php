<?php
/**
 * Created by PhpStorm.
 * User: Rain Kütt
 * Date: 14.12.2017
 * Time: 12:13
 */
/*echo "<font color=\"red\">1 3 5 7 9</font> \n";
echo "<font color=\"blue\">2 4 6 8 10</font>";*/
for ($arv=1; $arv <= 10; $arv++) {
    if($arv % 2 == 0) {
        $varv = 'blue';
    } else {
        $varv = 'red';
    }
    echo '<font color="'.$varv.'">'.$arv.'</font><br />';
}
//

$a=5; $b=2;
$c=$a++;
$d=$b--;
echo 'a= '.$a.'<br />';
echo 'b= '.$b.'<br />';
echo 'c= '.$c.'<br />';
echo 'd= '.$d.'<br />';
//

$kord=1;
while($kord <= 5) {
    echo '<i>'.$kord++.'</i><br />';
    if($kord==3){
        break;
    }
}
//
$kord=1;
do {
    if($kord==3){
        continue;
    }
    echo '<b>'.$kord.'</b><br />';
} while(++$kord <= 5);

?>



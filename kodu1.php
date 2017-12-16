<?php
/**
 * Created by PhpStorm.
 * User: Rain Kütt
 * Date: 16.12.2017
 * Time: 11:07
 * 1. Koostada funktsioon nimega arvuSumma, mis võtab parameetrina suvalise numbri ja  arvutab numbri arvude summa - juhul, kui on argumendina funktsioonile antud number 123, siis programm peab leidma 1+2+3 summa, ehk 6. Lahendamiseks ei tohi kasutada sõnetöötluse võimalused.

2. Koostada funktsioon nimega otsiNumber, mis võtab parameetrina suvalise arvu ja kindlaks määratud arvu ja arvutab mitu korda määratud arv esineb suvalises numbris, näiteks arv 5 esineb numbris 442158755745 neli korda.  Lahendamiseks ei tohi kasutada sõnetöötluse võimalused
 */
// ül 1
function arvuSumma($num1, $num2, $num3){
    $sum=$num1+$num2+$num3;
    echo "Suvalise arvu $num1$num2$num3 summa on: $num1+$num2+$num3=$sum<br />";
}
arvuSumma(rand(0, 9), rand(0, 9), rand(0, 9));

// ül 2
function otsiNumber($suva1, $suva2, $suva3, $suva4, $suva5){
    $sum2=0;
    if($suva1==5){
        $sum2=$sum2+1;
    } if($suva2==5) {
        $sum2=$sum2+1;
    } if($suva3==5) {
        $sum2 = $sum2 + 1;
    } if($suva4==5) {
        $sum2=$sum2+1;
    } if($suva5==5) {
        $sum2 = $sum2 + 1;
    }
    echo "viiekohalises arvus $suva1$suva2$suva3$suva4$suva5 esineb number 5 täpselt $sum2 korda";
}
otsiNumber(rand(0, 9), rand(0, 9), rand(0, 9), rand(0, 9), rand(0, 9));
?>
<?php
/**
 * Created by PhpStorm.
 * User: Rain Kütt
 * Date: 25.01.2018
 * Time: 11:10
 */
require_once 'tekst.php';
class vTekst extends tekst
{
    // lisame värvi
    var $varv = '';

    /**
     * vTekst constructor.
     * @param string $varv
     */
    public function __construct($sone, $varv)
    {
        parent::__construct($sone);
        $this->maaraVarv($varv);
    }

    function maaraVarv($varv)
    {
        $this->varv = $varv;
    }

    function prindiTekst()
    {
        if ($this->varv == '') {
            parent::prindiTekst(); // TODO: Change the autogenerated stub
        } else {
            echo '<font color="' . $this->varv . '">' . $this->sone.'</font><br />';
        }
    }
}
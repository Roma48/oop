<?php
/**
 * Created by PhpStorm.
 * User: yura
 * Date: 01.03.15
 * Time: 22:13
 */

class kulia {
    protected $r;
    protected $gustina;

    function __construct($r, $gustina)
    {
        $this->r = $r;
        $this->gustina = $gustina;
    }

    function getWeight(){
        $volume = 4.2*pow($this->r, 3);
        $weight = $volume*$this->gustina;
        return (int)$weight;
    }

} 
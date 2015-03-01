<?php
/**
 * Created by PhpStorm.
 * User: yura
 * Date: 01.03.15
 * Time: 22:13
 */

class parallelepiped {
    protected $a;
    protected $b;
    protected $c;
    protected $gustina;

    function __construct($a, $b, $c, $gustina)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->gustina = $gustina;
    }

    function getWeight(){
        $volume = $this->a*$this->b*$this->c;
        $weight = $volume * $this->gustina;
        return $weight;

    }


} 
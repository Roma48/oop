<?php
/**
 * Created by PhpStorm.
 * User: yura
 * Date: 01.03.15
 * Time: 22:13
 */

require_once('parallelepiped.php');

class cub extends parallelepiped {

    function __construct($a, $gustina){
        $this->a = $a;
        $this->b = $a;
        $this->c = $a;
        $this->gustina = $gustina;
    }
}
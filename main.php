<?php
/**
 * Created by PhpStorm.
 * User: yura
 * Date: 01.03.15
 * Time: 20:06
 */


require_once('parallelepiped.php');
require_once('cub.php');
require_once('kulia.php');


$geom = array();

for($i = 0; $i < 10; $i++){
    $geom[$i] = rand(1,3);
    if ($geom[$i] == 1){
        $figura = new parallelepiped(rand(1,10), rand(1,10), rand(1,10), rand(1,10));
        $geom[$i] = $figura->getWeight();
    } elseif ($geom[$i] == 2){
        $figura = new cub(rand(1,9), rand(1,9));
        $geom[$i] = $figura->getWeight();
    } elseif ($geom[$i] == 3){
        $figura = new kulia(rand(1,10), rand(1,10));
        $geom[$i] = $figura->getWeight();
    }
}

echo "not sorted array";
print_r($geom);
echo "\n";

    function buble($arr)
    {
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = 0; $j < count($arr) - 1; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                        $pred = $arr[$j];
                        $arr[$j] = $arr[$j+1];
                        $arr[$j+1] = $pred;
                }
            }
        }
        return $arr;
    }

echo "sorted array";
print_r(buble($geom));









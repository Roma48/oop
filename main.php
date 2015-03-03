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

for($i = 0; $i < 15; $i++){
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
        $sort_geom = array(array($arr[6],$arr[3],$arr[1],$arr[0]), array($arr[10],$arr[7],$arr[4],$arr[2]), array($arr[13],$arr[11],$arr[8],$arr[5]), array($arr[15],$arr[14],$arr[12],$arr[9]));

        return $sort_geom;
    }

echo "sorted array \n ";

$arr = buble($geom);


echo $arr[0][0] . " " .$arr[0][1] . " " .$arr[0][2] . " " .$arr[0][3] . "\n";
echo $arr[1][0] . " " .$arr[1][1] . " " .$arr[1][2] . " " .$arr[1][3] . "\n";
echo $arr[2][0] . " " .$arr[2][1] . " " .$arr[2][2] . " " .$arr[2][3] . "\n";
echo $arr[3][0] . " " .$arr[3][1] . " " .$arr[3][2] . " " .$arr[3][3] . "\n";
















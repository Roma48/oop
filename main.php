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

for($i = 0; $i <= 15; $i++){
    $geom[$i] = rand(1,9);
//    if ($geom[$i] == 1){
//        $figura = new parallelepiped((int)rand(1,10), (int)rand(1,10), (int)rand(1,10), (int)rand(1,10));
//        $geom[$i] = $figura->getWeight();
//    } elseif ($geom[$i] == 2){
//        $figura = new cub((int)rand(1,9), (int)rand(1,9));
//        $geom[$i] = $figura->getWeight();
//    } elseif ($geom[$i] == 3){
//        $figura = new kulia((int)rand(1,10), (int)rand(1,10));
//        $geom[$i] = $figura->getWeight();
//    }
}

echo "not sorted array";
print_r($geom);
echo "\n";

    function buble($arr)
    {
        for ($i = 0; $i <= count($arr); $i++) {
            for ($j = 0; $j < count($arr) - 1; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                        $pred = $arr[$j];
                        $arr[$j] = $arr[$j+1];
                        $arr[$j+1] = $pred;
                }
            }
        }
        $sort_geom = array(
            array($arr[6]   ,$arr[3],   $arr[1],    $arr[0]),
            array($arr[10]  ,$arr[7],   $arr[4],    $arr[2]),
            array($arr[13]  ,$arr[11],  $arr[8],    $arr[5]),
            array($arr[15]  ,$arr[14],  $arr[12],   $arr[9])
        );

        echo "sorted array \n ";

        echo ""  .$sort_geom[0][0] . " " .$sort_geom[0][1] . " " .$sort_geom[0][2] . " " .$sort_geom[0][3] . "\n";
        echo " " .$sort_geom[1][0] . " " .$sort_geom[1][1] . " " .$sort_geom[1][2] . " " .$sort_geom[1][3] . "\n";
        echo " " .$sort_geom[2][0] . " " .$sort_geom[2][1] . " " .$sort_geom[2][2] . " " .$sort_geom[2][3] . "\n";
        echo " " .$sort_geom[3][0] . " " .$sort_geom[3][1] . " " .$sort_geom[3][2] . " " .$sort_geom[3][3] . "\n";
    }



$arr = buble($geom);
















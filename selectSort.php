<?php
/**
 * Created by PhpStorm.
 * User: zimo
 * Date: 2017/8/7
 * Time: 14:51
 */

function selectSort(&$array){

    for ($i = 0;$i<count($array);$i++) {
        //默认当前元素为最小
        $min = $i;
        //对i后面的元素依次进行比较
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$j] < $array[$min]) {
                $min = $j;
            }
        }
        if ($min != $i) {
            $temp = $array[$min];
            $array[$min] = $array[$i];
            $array[$i] = $temp;
        }
    }
    return $array;
}

$array = [6,8,3,9,5,1,2,7];
print_r(selectSort($array));
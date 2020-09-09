<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $arr = ['I'=>1,'V'=>5,'X'=>10,'L'=>50,'C'=>100,'D'=>500,'M'=>1000];
        $sum = 0;
        $next = 0;
        foreach (str_split($s) as $key => $val) {
            if (isset($next) && $arr[$val] <= $next) {
                $sum += $arr[$val];
            } else {
                $sum += $arr[$val] - $next * 2;
            }
            $next = $arr[$val];
        }
        return $sum;
    }
}

$Solution = new Solution();
var_dump($Solution->romanToInt('MCIVII'));

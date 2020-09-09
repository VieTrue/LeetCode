<?php

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $f = ($x < 0) ? '-' : '';
        $str = '';
        foreach (str_split($x) as $key => $val) {
            $str = $val.$str;
        }
        $str = (int)($f.$str);
        if ($str > (pow(2,31)-1) || $str < pow(-2,31)) {
            return 0;
        }
        return $str;
    }
}

$Solution = new Solution();
var_dump($Solution->reverse(-213458468));

<?php

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if ($x < 0) return false;
        $str = '';
        foreach (str_split($x) as $key => $val) {
            $str = $val.$str;
        }
        if ($x == (int)$str) {
            return true;
        } else {
             return false;
        }
    }
}

$Solution = new Solution();
var_dump($Solution->isPalindrome(-213458468));

<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $count = count($strs);
        if ($count == 0) return '';
        if ($count == 1) return reset($strs);
        for ($i = 0; $i < strlen($strs[0]); $i++) {
            $this_char = $strs[0][$i];
            for ($j = 0;$j < $count;$j++) {
                if ($strs[$j][$i] != $this_char) return $prefix ? $prefix : '';
            }
            $prefix .= $this_char;
        }
        return $prefix;
    }
}
$Solution = new Solution();
var_dump($Solution->longestCommonPrefix(["c","c","cc"]));

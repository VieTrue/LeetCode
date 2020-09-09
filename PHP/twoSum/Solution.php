<?php

class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        foreach ($nums as $key => $val) {
            $diff = $target - $val;
            if (!isset($map[$diff])) {
                $map[$val] = $key;
                continue;
            }
            return [$map[$diff], $key];
        }
    }

}

$Solution = new Solution();
var_dump($Solution->twoSum([4, 4, 2, 7, 11, 15], 8));



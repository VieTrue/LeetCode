<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $map = [
            ")" => "(",
            "}" => "{",
            "]" => "[",
        ];
        $len = strlen($s);
        if ($len % 2 == 1) return false;
        $stack = new SplStack();
        for ($i = 0; $i < $len; ++$i) {
            
            if (isset($map[$s[$i]])) {
                if (!$stack->isEmpty()  && $stack->top() == $map[$s[$i]]) {
                    $stack->pop();
                } else {
                    return false;
                }
            } else {
                $stack->push($s[$i]);
            }
        }
        if (count($stack) > 0) {
            return false;
        }
        return true;
    }
}

$Solution = new Solution();
var_dump($Solution->isValid('([]([]({}([][{}[{{4684658}[]{}}]])){[]}){})'));



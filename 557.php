<?php

class Solution
{
    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) : string
    {
        $arr = explode(' ',$s);
        $newArr = [];
        foreach ($arr as $i) {
            $newArr[] = strrev($i);
        }
        $result = implode(' ',$newArr);
        return $result;
    }
}

$s = "Let's take LeetCode contest";
//Output: "s'teL ekat edoCteeL tsetnoc"

$Solution = new Solution;
$res = $Solution->reverseWords($s);

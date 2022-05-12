<?php

class Solution
{
    /**
     * @param Integer $num
     * @return Integer
     */
    function maximum69Number (int $num) : int
    {
        $arr = str_split("$num");
        $newArr = [];
        $changed = false;

        foreach ($arr as $i) {
            if ($i == 6 && !$changed) {
                $i = 9;
                $changed = true;
            }
            $newArr[] = $i;
        }

        return implode('',$newArr);
    }
}

$num = 9669;
//Output: 9969

$Solution = new Solution;
$res = $Solution-> maximum69Number ($num);
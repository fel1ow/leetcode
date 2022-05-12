<?php

class Solution
{
    /**
     * @param Integer[][] $mat
     * @return Integer
     */
    function diagonalSum(array $mat) : int
    {
        $left = 0;
        $right = count(reset($mat))-1;
        $sum = 0;

        for ($i=0; $i<count($mat); $i++) {
            $sum += $mat[$i][$left];
            if ($left != $right) {
                $sum += $mat[$i][$right];
            }
            $left++;
            $right--;
        }

        return $sum;
    }
}

$mat = [[1,2,3],
       [4,5,6],
       [7,8,9]];
//Output: 25
//$mat =
//    [[1,1,1,1],
//    [1,1,1,1],
//    [1,1,1,1],
//    [1,1,1,1]];
//Output: 8

$Solution = new Solution;
$res = $Solution->diagonalSum($mat);

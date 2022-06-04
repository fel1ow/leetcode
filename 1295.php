<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findNumbers(array $nums) : int
    {
        $evenNumbers = 0;

        foreach ($nums as $num) {
            if (strlen("$num") % 2 == 0) {
                $evenNumbers++;
            }
        }

        return $evenNumbers;
    }
}



$nums = [12,345,2,6,7896];
//Output: 2

$Solution = new Solution;
$res = $Solution->findNumbers($nums);

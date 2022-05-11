<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxProductDifference(Array $nums) : int
    {
        sort($nums);
        $numsSize = count($nums);
        if ($numsSize < 4) {
            die; //throw Exception;
        }
        $max1 = $nums[$numsSize-1];
        $max2 = $nums[$numsSize-2];
        $min1 = $nums[0];
        $min2 = $nums[1];
        $maxRes = $max1 * $max2;
        $minRes = $min1 * $min2;
        return $maxRes - $minRes;
    }
}

$nums = [5,6,2,7,4];
//Output: 34

$Solution = new Solution;
$res = $Solution->maxProductDifference($nums);

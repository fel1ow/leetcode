<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxProduct(array $nums) : int
    {
        rsort($nums);
        return ($nums[0]-1)*($nums[1]-1);
    }
}

$nums = [3,4,5,2];
//Output: 12

$Solution = new Solution;
$res = $Solution->maxProduct($nums);
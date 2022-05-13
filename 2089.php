<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function targetIndices($nums, $target) : array
    {
        sort($nums);
        return array_keys($nums,$target);
    }
}

$nums = [1,2,5,2,3];
$target = 2;
//Output: [1,2]

$Solution = new Solution;
$res = $Solution->targetIndices($nums, $target);

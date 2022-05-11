<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function countPairs($nums, $k) {
        $goodPairs = 0;
        for ($i=0; $i<count($nums)-1; $i++) {
            for ($j=$i+1; $j<count($nums); $j++) {
                $check1 = $nums[$i] == $nums[$j];
                $check2 = ($i * $j) % $k == 0;
                $goodPairs = $check1 && $check2 ? $goodPairs+1 : $goodPairs;
            }
        }
        return $goodPairs;
    }
}

$nums = [3,1,2,2,2,1,3];
$k = 2;
//Output: 4

$Solution = new Solution;
$res = $Solution->countPairs($nums,$k);
<?php

class Solution
{
    protected $movesMade = 0; // 1 move = 1 second

    /**
     * @param Integer[][] $points
     * @return Integer
     */
    function minTimeToVisitAllPoints(array $points) : int
    {
        $currentPoint = reset($points);

        for ($i=1; $i<count($points); $i++) {
            $this->moveFromTo($currentPoint,$points[$i]);
            $currentPoint = $points[$i];
        }

        return $this->movesMade;
    }

    protected function moveFromTo(array $from, array $to)
    {
        $diff1 = abs($from[0] - $to[0]);
        $diff2 = abs($from[1] - $to[1]);
        $this->movesMade += max($diff1,$diff2);
    }
}

$points = [[1,1],[3,4],[-1,0]];
//Output: 7

$Solution = new Solution;
$res = $Solution->minTimeToVisitAllPoints($points);
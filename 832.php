<?php

class Solution
{
    /**
     * @param Integer[][] $image
     * @return Integer[][]
     */
    function flipAndInvertImage(array $image) : array
    {
        $result = [];
        foreach ($image as $imageParams) {
            $newImageParams = [];
            foreach ($imageParams as $imageParam) {
                $newImageParams[] = $imageParam ? 0 : 1;
            }
            $result[] = array_reverse($newImageParams);
        }
        return $result;
    }
}

$image = [[1,1,0],[1,0,1],[0,0,0]];
//Output: [[1,0,0],[0,1,0],[1,1,1]]

$Solution = new Solution;
$res = $Solution->flipAndInvertImage($image);


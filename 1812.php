<?php /** @noinspection PhpMultipleClassDeclarationsInspection */

class Solution
{
    /**
     * @param String $coordinates
     * @return Boolean
     */
    function squareIsWhite($coordinates) : bool
    {
        $ABC = range('a','h');
        $parts = str_split($coordinates);
        $letterNumber = array_search($parts[0],$ABC);
        $sum = $letterNumber + 1 + $parts[1];
        $result = $sum % 2 > 0;
        return $result;
    }
}

$coordinates = "a1";
//Output: false

$Solution = new Solution;
$res = $Solution->squareIsWhite($coordinates);




<?php /** @noinspection PhpMultipleClassDeclarationsInspection */

class Solution
{

    /**
     * @param Integer $n
     * @return String
     */
    function generateTheString(int $n) : string
    {
        if ($n == 1) {
            return 'a';
        }
        if ($n % 2) {
            $result = str_repeat('a',$n-2) . 'bc';
        } else {
            $result = str_repeat('a',$n-1) . 'b';
        }

        return $result;
    }
}

$n = 4;
//Output: "pppz"

$Solution = new Solution;
$res = $Solution->generateTheString($n);




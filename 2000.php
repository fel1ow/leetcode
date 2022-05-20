<?php /** @noinspection PhpMultipleClassDeclarationsInspection */

class Solution
{
    /**
     * @param String $word
     * @param String $ch
     * @return String
     */
    function reversePrefix(string $word, string $ch) : string
    {
        $key = strpos($word,$ch);

        if ( $key === false ) {
            return $word;
        }

        $start = substr($word, 0, $key+1);
        $startReverted = strrev($start);
        $end = substr($word, $key+1);
        $result = $startReverted . $end;

        return $result;
    }
}

$word = "abcdefd";
$ch = "d";
//Output: "dcbaefd"

$Solution = new Solution;
$res = $Solution->reversePrefix($word, $ch);
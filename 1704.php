<?php /** @noinspection PhpMultipleClassDeclarationsInspection */

class Solution
{
    /**
     * @param String $s
     * @return Boolean
     */
    function halvesAreAlike(string $s) : bool
    {
        $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
        $sArray = str_split($s);
        $parts = array_chunk($sArray, count($sArray)/2);
        $part1Vowels = array_intersect($parts[0],$vowels);
        $part2Vowels = array_intersect($parts[1],$vowels);

        return count($part1Vowels) == count($part2Vowels);
    }
}

$s = "book";
//Output: true

$Solution = new Solution;
$res = $Solution->halvesAreAlike($s);
<?php /** @noinspection PhpMultipleClassDeclarationsInspection */

class Solution
{
    /**
     * @param String[] $words
     * @param String $pref
     * @return Integer
     */
    function prefixCount(array $words, string $pref) : int
    {
        $sum = 0;

        foreach ($words as $word) {
            $index = strpos($word,$pref);
            $sum = $index === 0 ? $sum+1 : $sum;
        }

        return $sum;
    }
}

$words = ["pay","attention","practice","attend"];
$pref = "at";
//Output: 2

$Solution = new Solution;
$res = $Solution->prefixCount($words, $pref);




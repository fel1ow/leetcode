<?php

class Solution
{
    /**
     * @param String[] $patterns
     * @param String $word
     * @return Integer
     */
    function numOfStrings(array $patterns, string $word) : int
    {
        $occurrence = 0;

        foreach ($patterns as $pattern) {
            if (strpos($word,$pattern) !== false) {
                $occurrence++;
            }
        }

        return $occurrence;
    }
}

$patterns = ["a","abc","bc","d"];
$word = "abc";
//Output: 3

$Solution = new Solution;
$res = $Solution->numOfStrings($patterns, $word);


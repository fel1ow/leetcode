<?php

class Solution
{
    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function truncateSentence($s, $k)
    {
        $givenString = $s;
        $wordsNeededAmount = $k;
        $allWordsArr = explode(' ', $givenString);
        $wordsNeeded = array_chunk($allWordsArr, $wordsNeededAmount);
        $wordsNeeded = implode(' ', $wordsNeeded[0]);
        return $wordsNeeded;
    }
}

$s = "Hello how are you Contestant";
$k = 4;
//Output: "Hello how are you"

$Solution = new Solution;
$res = $Solution->truncateSentence($s, $k);


<?php

class Solution {

    /**
     * @param String[] $words
     * @return Integer
     */
    function uniqueMorseRepresentations(array $words) : int {
        $morseCode = [".-","-...","-.-.","-..",".","..-.","--.","....","..",".---","-.-",".-..","--",
            "-.","---",".--.","--.-",".-.","...","-","..-","...-",".--","-..-","-.--","--.."];
        $ABC = range('a','z');
        $morseWords = [];
        foreach ($words as $word) {
            $letters = str_split($word);
            $morseWord = '';
            foreach ($letters as $letter) {
                $key = array_search($letter,$ABC);
                $morseWord .= $morseCode[$key];
            }
            $morseWords[$morseWord] = $morseWord;
        }

        return count($morseWords);
    }
}


$words = ["gin","zen","gig","msg"];
//Output: 2

$Solution = new Solution;
$res = $Solution->uniqueMorseRepresentations($words);

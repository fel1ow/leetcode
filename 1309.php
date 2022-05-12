<?php

class Solution
{
    /**
     * @param String $s
     * @return String
     */
    function freqAlphabets(string $s) : string
    {
        $resultString = '';
        $ABC = range('a','z');
        $chars = str_split($s);
        $hashes = array_keys($chars,'#');

        foreach ($hashes as $hash) {
            if (!array_key_exists($hash-2,$chars) || !array_key_exists($hash-1,$chars)) {
                unset($chars[$hash]);
            } else {
                $chars[$hash] = $chars[$hash-2].$chars[$hash-1];
                unset($chars[$hash-2]);
                unset($chars[$hash-1]);
            }
        }

        foreach ($chars as $char) {
            $resultString .= $ABC[$char-1];
        }

        return $resultString;
    }
}

$s = "#10##11#12";
//Output: "jkab"

$Solution = new Solution;
$res = $Solution->freqAlphabets($s);

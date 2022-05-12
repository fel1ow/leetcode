<?php

class Solution
{
    /**
     * Result of range('a','z')
     * @var array
     */
    protected $ABC = [];

    function __construct()
    {
        $this->ABC = range('a','z');
    }

    /**
     * @param String $s
     * @return String
     */
    public function replaceDigits(string $s) : string
    {
        $oldArr = str_split($s);
        $newArr = [];

        foreach ($oldArr as $key => $item) {
            if ( is_numeric($item) ) {
                $newArr[] = $this->shift($oldArr[$key-1],$item);
            } else {
                $newArr[] = $item;
            }
        }

        return implode('', $newArr);
    }

    protected function shift($letter, $shiftLength)
    {
        $letterNumber = array_search($letter,$this->ABC);
        return $this->ABC[$letterNumber+$shiftLength];
    }
}

$s = "a1c1e1";
//Output: "abcdef"

$Solution = new Solution;
$res = $Solution->replaceDigits($s);


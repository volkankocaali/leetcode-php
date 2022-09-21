<?php

/**
 * @param $x
 * @return bool
 */
function isPalindrome($x): bool
{
    $number = $x;
    $sum = 0;

    while(floor($number)){
        $rem = $number % 10;
        $sum = $sum * 10 + $rem;
        $number = $number / 10;
    }

    if($sum !== $x){
        return false;
    }
    return true;
}

// isPalindrome(1221);

/**
 * @param $s
 * @return int
 */
function romanToInt($s): int
{
    $result = 0;
    $romans = array(
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1,
    );

    foreach ($romans as $key => $value){
        while(strpos($s, $key) === 0){
            $result += $value;
            $s = substr($s, strlen($key));
        }
    }
    return $result;


}

// romanToInt("MCMXC")

/**
 * @param array $strs
 * @return void
 */
function longestCommonPrefix(array $strs): string
{
    $k = 0;
    $firstPos = 0;
    $longestPrefix = "";

    while (true) {
        if (count($strs) === 0 || !$strs[$firstPos][$k]) {
            return $longestPrefix;
        }

        $nextCharacter = $strs[$firstPos][$k];

        for ($j = 0; $j < count($strs); $j++) {
            if ($strs[$j][$k] != $nextCharacter) {
                return $longestPrefix;
            }
        }

        $k++;
        $longestPrefix = $longestPrefix . $nextCharacter;
    }
}

// longestCommonPrefix(["flower","flow","flight"])
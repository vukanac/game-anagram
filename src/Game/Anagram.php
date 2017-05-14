<?php

namespace Game;

class Anagram
{
    public function isAnagram($string1, $string2)
    {
        if (!is_string($string1) || (!is_string($string2))) {
            return false;
        }
        $string1 = str_replace(' ', '', $string1);
        $string2 = str_replace(' ', '', $string2);

        if (strlen($string1) != strlen($string2)) {
            return false;
        }

        $string1 = strtolower($string1);
        $string2 = strtolower($string2);
        // convert string to array of letters
        $a1 = str_split($string1); // pera
        $a2 = str_split($string2); // repa
        // sort array of letters
        sort($a1); // aepr
        sort($a2); // aepr
        $sortedWord1 = implode('', $a1);
        $sortedWord2 = implode('', $a2);

        if ($sortedWord1 != $sortedWord2) {
            return false;
        }

        return true;
    }
}

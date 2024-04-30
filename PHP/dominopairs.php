<?php
// The objective is to return the first pair of unique dominoes that is not in play on the board.
// If a value of 1-6 is in play 6-1 is not unique as a domino can be rotated.

function solution($A) {
    // Y <= 6 && X <= 6
    // 7*7 = 49 combinations
    $allPairs = [];
    for ($x = 0; $x <= 6; $x++) {
        for ($y = 0; $y <= 6; $y++) {
            $allPairs["$x-$y"] = true;
        }
    }

    foreach ($A as $value)
    {
        $x = substr($value, 0, 1);
        $y = substr($value, 2, 1);
        unset($allPairs["$x-$y"]);
        unset($allPairs["$y-$x"]);
    }
    // Return first unique key after all the pairs was removed.
    foreach ($allPairs as $key => $value)
    {
        return $key;
    }
}
echo solution(['0-0', '0-1', '2-3', '2-0']);

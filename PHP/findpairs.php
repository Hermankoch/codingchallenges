<?php
// The objective is to find any numbers in an array which does not have a pair. "3,3" is a pair.
function solution($A)
{
    $pairArr = [];
    foreach ($A as $num) {
        if (isset($pairArr[$num])) {
            $pairArr[$num] += 1;
            continue;
        }
        $pairArr[$num] = 1;
    }
    foreach ($pairArr as $unpaired => $value) {
        if ($value % 2 === 1) {
            return $unpaired;
        }
    }
}

echo(solution([9, 3, 9, 3, 9, 7, 9])); // Output should be 7
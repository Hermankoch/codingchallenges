<?php
// The objective is to sum the first 3 positive numbers
// or return the sum of the positive numbers if there is not 3.
function solution($A)
{
    $sum = 0;
    $count = 0;
    for ($i = 0; $i < count($A); $i++) {
        if ($A[$i] > 0) {
            $count++;
            $sum += $A[$i];
        }
        if ($count === 3) {
            return $sum;
        }
    }
    return $sum;
}

echo solution([4, -2, 0, 5, -2, 1, 6]);
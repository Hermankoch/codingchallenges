<?php
// The objective is to find the number which does not have a pair.
// Pairs are one positive and one negative. There is only one number that does not have a pair.
function findUnique($arr): int
{
    $noPair = 0;
    foreach ($arr as $num)
    {
        $noPair += $num;
    }
    return $noPair;
}
echo (findUnique([2, -3, 3, 4, -2]));

/*function findUnique2($arr): int
{
    $check = [];
    foreach ($arr as $num) {
        if (!isset($check[$num])) {
            $check[$num] = false;
        }
        if (isset($check[-$num])) {
            $check[-$num] = true;
            $check[$num] = true;
        }
    }
    foreach ($check as $key => $value) {
        if ($value === false) {
            return $key;
        }
    }
    return 0;
}
*/
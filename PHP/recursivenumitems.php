<?php
// The objective is to implement a counting for a given item in an array.
// The array can be multidimensional so implement a recursive function.
function numberOfItems(array $arr, $item): int {
    $count = 0;
    foreach ($arr as $check) {
        if (!is_array($check)) {
            if ($check == $item) {
                $count++;
            }
        } else {
            // Corrected $count + numberOfItems($check, $item)
            $count += numberOfItems($check, $item);
        }
    }
    return $count;
}

$arr = [
    25,
    "apple",
    ["banana", "strawberry", "apple", 25]
];
echo numberOfItems($arr, 25) . "\n"; // Should output 2
echo numberOfItems($arr, "apple") . "\n"; // Should output 2

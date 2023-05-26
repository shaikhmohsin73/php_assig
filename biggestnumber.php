<?php
function findBiggestNumber($arr) {
    $max = $arr[0]; // Assume the first element is the largest

    $length = count($arr);
    for ($i = 1; $i < $length; $i++) {
        if ($arr[$i] > $max) {
            $max = $arr[$i]; // Update the largest number
        }
    }

    return $max;
}

// Test the function
$array = [5, 3, 9, 2, 7];
$biggestNumber = findBiggestNumber($array);
echo "The biggest number in the array is: " . $biggestNumber;
?>

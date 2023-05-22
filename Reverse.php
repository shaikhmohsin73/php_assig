<?php

function reverseNumber($num)
{
    $num_str = (string) $num;
    $rev_str = strrev($num_str);
    $rev_num = (int) $rev_str;
    return $rev_num;
}

$num1 = 124357482976;
$num2 = 987541236547;

echo "Reverse of " . $num1 . " is " . reverseNumber($num1) . "<br>";
echo "Reverse of " . $num2 . " is " . reverseNumber($num2) . "<br>";
?>
<?php

function isArmstrong($num){
    $num_str = (string) $num;
    $n = strlen($num_str);
    $sum = 0;
    for ($i = 0; $i < $n; $i++) {
        $digit = (int) $num_str[$i];
        $sum += pow($digit, $n);
    }
    if ($sum == $num) {
        return true;
    } else {
        return false;
    }
}
$num1 = 153;
echo $num1 . " is " . (isArmstrong($num1) ? "an Armstrong number" : "not an Armstrong number") . "<br>";
?>

<?php
$num = 123;
$num_of_digits = strlen((string)$num);
$sum = 0;
for ($i = 0; $i < $num_of_digits; $i++) {
  $digit = (int)strval($num)[$i];
  $sum += pow($digit, $num_of_digits);
}
if ($sum == $num) {
  echo $num . " is an Armstrong number";
} else {
  echo $num . " is not an Armstrong number";
}
?>

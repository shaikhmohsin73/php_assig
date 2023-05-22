<?php

function fibonacci($n) {
    $num1 = 0;
    $num2 = 1;
    $count = 0;
    
    
    echo $num1 . " " . $num2 . " ";
    
    while ($count < $n - 2) {
        $num3 = $num1 + $num2;
        echo $num3 . " ";
        $num1 = $num2;
        $num2 = $num3;
        $count++;
    }
}
fibonacci(10);
?>

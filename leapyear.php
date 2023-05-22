<?php

for ($year = 1901; $year <= 2016; $year++) {
   
    if ($year % 4 == 0) {
      
        if ($year % 100 == 0 && $year % 400 != 0) {
            continue;
        }
     
        else {
            echo $year . " is a leap year.<br>";
        }
    }
}
?>

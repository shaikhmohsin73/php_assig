<?php
function isPrime($num)
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
if (isset($_POST['number'])) {
    $number = $_POST['number'];
    if (isPrime($number)) {
        echo $number . " is a prime number.<br>";
    } else {
        echo $number . " is not a prime number.<br>";
    }
}
?>
<form method="post" action="">
    Enter a number: <input type="text" name="number">
    <input type="submit" value="Check">
</form>
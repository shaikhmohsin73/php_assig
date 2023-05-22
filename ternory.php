<?php
if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    $largest = ($num1 > $num2) ? (($num1 > $num3) ? $num1 : $num3) : (($num2 > $num3) ? $num2 : $num3);
    echo "The largest number is: " . $largest;
}
?>
<form method="post">
    <label for="num1">Number 1:</label>
    <input type="text" name="num1"><br>
    <label for="num2">Number 2:</label>
    <input type="text" name="num2"><br>
    <label for="num3">Number 3:</label>
    <input type="text" name="num3"><br>
    <input type="submit" name="submit" value="Find Largest">
</form>

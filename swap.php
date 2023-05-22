<!DOCTYPE html>
<html>
<head>
	<title>Number Swapper</title>
</head>
<body>
	<h1>Number Swapper</h1>
	<form action="" method="POST">
		<label for="num1">First Number:</label>
		<input type="number" id="num1" name="num1" required><br><br>
		<label for="num2">Second Number:</label>
		<input type="number" id="num2" name="num2" required><br><br>
		<input type="submit" name="submit" value="Swap">
	</form>

	<?php
		if (isset($_POST['submit'])) {
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			echo "<br>Before swapping: num1 = " . $num1 . ", num2 = " . $num2;
			$temp = $num1;
			$num1 = $num2;
			$num2 = $temp;
			echo "<br>After swapping: num1 = " . $num1 . ", num2 = " . $num2;
		}
	?>
</body>
</html>


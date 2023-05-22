<!DOCTYPE html>
<html>
<head>
	<title>Number Analyzer</title>
</head>
<body>
	<h1>Number Analyzer</h1>
	<form action="" method="POST">
		<label for="num1">First Number:</label>
		<input type="number" id="num1" name="num1" required><br><br>

		<label for="num2">Second Number:</label>
		<input type="number" id="num2" name="num2" required><br><br>

		<label for="num3">Third Number:</label>
		<input type="number" id="num3" name="num3" required><br><br>

		<input type="submit" name="submit" value="Analyze">
	</form>

	<?php
		if (isset($_POST['submit'])) {
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$num3 = $_POST['num3'];

			echo "<br>The numbers you entered are: " . $num1 . ", " . $num2 . ", " . $num3;

			$max = max($num1, $num2, $num3);
			$min = min($num1, $num2, $num3);

			echo "<br>The maximum number is: " . $max;
			echo "<br>The minimum number is: " . $min;
		}
	?>
</body>
</html>

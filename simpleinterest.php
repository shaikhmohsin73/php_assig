<!DOCTYPE html>
<html>
<head>
	<title>Simple Interest Calculator</title>
</head>
<body>
	<h1>Simple Interest Calculator</h1>
	<form action="" method="POST">
		<label for="amount">Amount:</label>
		<input type="number" id="amount" name="amount" required><br><br>

		<label for="years">Years:</label>
		<input type="number" id="years" name="years" required><br><br>

		<label for="rate">Rate:</label>
		<input type="number" id="rate" name="rate" required><br><br>

		<input type="submit" name="submit" value="Calculate">
	</form>

	<?php
		if (isset($_POST['submit'])) {
			$amount = $_POST['amount'];
			$years = $_POST['years'];
			$rate = $_POST['rate'];

			$interest = ($amount * $years * $rate) / 100;

			echo "<br><br>Simple Interest: " . $interest;
		}
	?>
</body>
</html>

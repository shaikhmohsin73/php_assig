<!DOCTYPE html>
<html>
<head>
	<title>Gross Salary Calculator</title>
</head>
<body>
	<h2>Gross Salary Calculator</h2>
	<form method="post">
		<label for="basic_salary">Basic Salary:</label>
		<input type="number" name="basic_salary" required><br><br>

		<label for="da">DA:</label>
		<input type="number" name="da" required><br><br>

		<label for="hra">HRA:</label>
		<input type="number" name="hra" required><br><br>

		<label for="pf">PF:</label>
		<input type="number" name="pf" required><br><br>

		<input type="submit" name="submit" value="Calculate Gross Salary">
	</form>
	<br>

	<?php
	if(isset($_POST['submit'])) {
		$basic_salary = $_POST['basic_salary'];
		$da = $_POST['da'];
		$hra = $_POST['hra'];
		$pf = $_POST['pf'];

		$gross_salary = $basic_salary + $da + $hra - $pf;

		echo "<h3>Gross Salary: " . $gross_salary . "</h3>";
        echo $basic_salary."<br>";
        echo $da."<br>";
        echo $hra."<br>";
        echo $pf."<br>";
	}
	?>
</body>
</html>

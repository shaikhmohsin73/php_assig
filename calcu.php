<!DOCTYPE html>
<html>
<head>
	<title>Calculate Percentage and Grade</title>
</head>
<body>

	<?php
	// Check if the form has been submitted
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		// Get the marks in each subject from the form
		$physics = $_POST["physics"];
		$chemistry = $_POST["chemistry"];
		$biology = $_POST["biology"];
		$mathematics = $_POST["mathematics"];
		$computer = $_POST["computer"];

		// Calculate total marks and percentage
		$total = $physics + $chemistry + $biology + $mathematics + $computer;
		$percentage = $total / 5;

		// Determine grade based on percentage
		if ($percentage >= 90) {
		    $grade = "A+";
		} elseif ($percentage >= 80) {
		    $grade = "A";
		} elseif ($percentage >= 70) {
		    $grade = "B";
		} elseif ($percentage >= 60) {
		    $grade = "C";
		} elseif ($percentage >= 50) {
		    $grade = "D";
		} else {
		    $grade = "F";
		}

		// Output the results
		echo "Total marks obtained: " . $total . "<br>";
		echo "Percentage: " . $percentage . "%<br>";
		echo "Grade: " . $grade;

	}
	?>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label for="physics">Physics:</label>
		<input type="number" name="physics" required><br>

		<label for="chemistry">Chemistry:</label>
		<input type="number" name="chemistry" required><br>

		<label for="biology">Biology:</label>
		<input type="number" name="biology" required><br>

		<label for="mathematics">Mathematics:</label>
		<input type="number" name="mathematics" required><br>

		<label for="computer">Computer:</label>
		<input type="number" name="computer" required><br>

		<input type="submit" value="Calculate">
	</form>

</body>
</html>

<!DOCTYPE html>
<html>

<head>
	<title>Input</title>
	<link rel="stylesheet" href="StyleSheet1.css">
</head>

<body>
	<?php
	include "Header.php";
	?>
	<div class="content">
		<div class="left">
			<form method="post">
				Employee Name: <input type="text" name="empName"><br></br>
				Employee ID: <input type="text" name="empID"><br></br>
				Telephone Number: <input type="tel" name="phone"><br></br>
				Email Address: <input type="email" name="email"><br></br>
				Position:
				<input type="radio" name="position" value="Manager">Manager
				<input type="radio" name="position" value="Team Lead">Team Lead
				<input type="radio" name="position" value="IT Developer">IT Developer
				<input type="radio" name="position" value="IT Analyst">IT Analyst</br></br>
				Project:
				<select name="projectOption">
					<option value="Project A">Project A</option>
					<option value="Project B">Project B</option>
					<option value="Project C">Project C</option>
					<option value="Project D">Project D</option>
				</select>
				</br></br><button type="submit" value="Submit" name="Submit1">Submit Information</button>
			</form>
		</div>
		<div class="right">
			<?php

			if (empty($_POST["empName"]))
				$name = "";
			else
				$name = $_POST["empName"];

			if (empty($_POST["empID"]))
				$id = "";
			else
				$id = $_POST["empID"];

			if (empty($_POST["phone"]))
				$telNum = "";
			else
				$telNum = $_POST["phone"];

			if (empty($_POST["email"]))
				$email = "";
			else
				$email = $_POST["email"];

			if (empty($_POST["position"]))
				$position = "";
			else
				$position = $_POST["position"];

			if (empty($_POST["projectOption"]))
				$project = "";
			else
				$project = $_POST["projectOption"];


			if (isset($_POST['Submit1'])) {
				echo "Employee Name: " . $name . "</br>";
				echo "Employee ID: " . $id . "</br>";
				echo "Telephone Number: " . $telNum . "</br>";
				echo "Email Address: " . $email . "</br>";
				echo "Position:" . $position . "</br>";
				echo "Project: " . $project . "</br>";
			}
			?>
		</div>
	</div>
	<?php include_once "Footer.php"; ?>
</body>


</html>
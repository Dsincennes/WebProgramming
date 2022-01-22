<?php session_start();
	if (isset($_POST["empName"])) {
		$_SESSION['empName'] = $_POST['empName'];
		$_SESSION["empID"] = $_POST["empID"];
		$_SESSION["phone"] = $_POST["phone"];
		$_SESSION["email"] = $_POST["email"];
		$_SESSION["position"] = $_POST["position"];
		$_SESSION["projectOption"] = $_POST["projectOption"];
		header("Location: Session_RetrieveValues.php");
	}
	?>
<!DOCTYPE html>
<html>

<head>
	<title>Input</title>
	<link rel="stylesheet" type="text/css" href="StyleSheet1.css" />
</head>

<body>
	<?php
	include "Header.php";
	?>
	<div class="content">
		<div class="left">
			<form method="post" action="Session_StoreValues.php">
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
				</br></br><input type="submit" value="Submit Information" name="Submit1">
			</form>
		</div>
	</div>
	<?php include_once "Footer.php"; ?>
</body>


</html>
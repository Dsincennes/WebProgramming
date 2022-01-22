<?php session_start();?>
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
	<div class="content" style="column-count: 1;">
		<?php
		
		if (isset($_SESSION["empName"])) {
			echo "Employee Name: " . $_SESSION["empName"] . "</br>";
			echo "Employee ID: " . $_SESSION["empID"] . "</br>";
			echo "Telephone Number: " . $_SESSION["phone"] . "</br>";
			echo "Email Address: " . $_SESSION["email"] . "</br>";
			echo "Position:" . $_SESSION["position"] . "</br>";
			echo "Project: " . $_SESSION["projectOption"] . "</br>";
		}

		?>
	</div>
	<?php include_once "Footer.php"; ?>
</body>

</html>
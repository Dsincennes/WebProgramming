<html>
	<head>
		<title>PHP LAB5</title>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
	</head>
	<body>
		<?php
			include_once "menu.php";
			include_once "header.php";
			include_once "footer.php";

			define("STUDENT_NUMBER", "041011305");

			// variables
			$firstName = "Donald";
			$middleName = "Joseph";
			$lastName = "Sincennes";


			echo "<div id=\"index\">";
			echo "<br><br>";
			echo "<strong>" ."Name: " .$firstName." ".$middleName." ".$lastName."<br><br>";
			echo "Student ID: " . STUDENT_NUMBER . "<br><br>";
			echo "</strong>";
			echo "Hello World!! " . "This is the first time I am using PHP!!<br><br>";
			echo "Today is " . date("Y/m/d") . "<br>";
			date_default_timezone_set("America/New_York");
			echo "The current time is " . date("h:i:sa");
			echo "<br><br>";
			$d=strtotime("tomorrow");
			echo "Tomorrow is " .date("Y-m-d", $d) . "<br>";

			$d=strtotime("next Monday");
			echo "Next Monday is " .date("Y-m-d", $d) . "<br>";
			echo "</div>";
		?>
	</body>
</html>
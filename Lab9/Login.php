<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<link rel="stylesheet" href="StyleSheet1.css">
</head>

<body>
	<?php
	include "Header.php";
	?>
	<div class="content">
		<?php
		require "MySQLConnectionInfo.php";
		$dbConnection = mysqli_connect($host, $username, $password);
		if (!$dbConnection)
			die("Cant to connect");
		mysqli_select_db($dbConnection, $database);
		$error = " ";
		?>
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			session_start();

			if (isset($_POST["EmailAddressBox"])) {
				$_SESSION["EmailAddress"] = $_POST["EmailAddressBox"];
			}

			if (isset($_POST["PasswordBox"])) {
				$_SESSION["Password"] = $_POST["PasswordBox"];
			}
			$email = $_POST["EmailAddressBox"];
			$password = $_POST["PasswordBox"];
			$query = "SELECT * FROM employee WHERE EmailAddress = '" . $_SESSION["EmailAddress"] . "' AND Password = '" . $_SESSION["Password"] . "'";
			$result = mysqli_query($dbConnection, $query);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_array($result)) {
					$_SESSION["FirstName"] = $row["FirstName"];
					$_SESSION["LastName"] = $row["LastName"];
					$_SESSION["TelephoneNumber"] = $row["TelephoneNumber"];
					$_SESSION["SocialInsuranceNumber"] = $row["SocialInsuranceNumber"];
				}
				header("Location: ViewAllEmployees.php");
				exit;
			} else {
				$error = "Please Check email or password. Unable to login";
			}
		}
		?>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			<h3>Login</h3>
			Email Address: <input type="email" name="EmailAddressBox" style="width: 200px;"><br>
			Password: <input type="password" name="PasswordBox" style="width: 200px;"><br>
			<span class="error" style="color: blue;"> <?php echo $error; ?></span><br></br>
			<button type="submit" value="Submit" name="Submit1">Login</button>
		</form>
	</div>
	<?php include_once "Footer.php"; ?>
</body>

</html>
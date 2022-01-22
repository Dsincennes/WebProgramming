<!DOCTYPE html>
<html>

<head>
	<title>Create Account</title>
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
			die("Couldnt connect to database.");
		mysqli_select_db($dbConnection, $database);

		$error = "";
		?>
<?php
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
         session_start();

         if(isset($_POST["FirstNameBox"])){
          $_SESSION["FirstName"] = $_POST["FirstNameBox"];
         }

         if(isset($_POST["LastNameBox"])){
          $_SESSION["LastName"] = $_POST["LastNameBox"];
         }

         if(isset($_POST["EmailAddressBox"])){
          $_SESSION["EmailAddress"] = $_POST["EmailAddressBox"];
         }

         if(isset($_POST["TelephoneNumberBox"])){
          $_SESSION["TelephoneNumber"] = $_POST["TelephoneNumberBox"];
         }

         if(isset($_POST["SocialInsuranceNumberBox"])){
          $_SESSION["SocialInsuranceNumber"] = $_POST["SocialInsuranceNumberBox"];
         }

         if(isset($_POST["PasswordBox"])){
          $_SESSION["Password"] = $_POST["PasswordBox"];
         }
           $sqlQuery = "INSERT INTO Employee (FirstName, LastName, EmailAddress, TelephoneNumber, SocialInsuranceNumber, Password) 
           VALUES('".$_SESSION["FirstName"]."', '".$_SESSION["LastName"]."', '".$_SESSION["EmailAddress"]."', '".$_SESSION["TelephoneNumber"].
           "', '".$_SESSION["SocialInsuranceNumber"]."', '".$_SESSION["Password"]."')";
           mysqli_query($dbConnection, $sqlQuery);
           header("Location: ViewAllEmployees.php");
        }
        ?>

         <h3><strong>Create your new account</strong></h3>
         Please fill in all information</br>
         <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            First Name: <input type="text" name="FirstNameBox" style="width: 200px;"><br>
            Last Name: <input type="text" name="LastNameBox" style="width: 200px;"><br>
            Email Address: <input type="email" name="EmailAddressBox" style="width: 200px;"><br>
            Phone Number: <input type="tel" name="TelephoneNumberBox" style="width: 200px;"><br>
            SIN: <input type="number" name="SocialInsuranceNumberBox" style="width: 200px;"><br>
            Password: <input type="password" name="PasswordBox" style="width: 200px;"><br>
            <button type="submit" value="Submit" name = "Submit1">Submit Information</button>
         </form>
	</div>
    </div>
	<?php include_once "Footer.php"; ?>
</body>


</html>
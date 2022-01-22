<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <title>View Employee</title>
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

        if (isset($_SESSION)) {
            echo "<h1>Session State Data</h1>";
            if (isset($_SESSION["FirstName"]))
                echo "<b>First Name: </b>" . $_SESSION["FirstName"] . "</br>";

            if (isset($_SESSION["LastName"]))
                echo "<b>Last Name: </b>" . $_SESSION["LastName"] . "</br>";

            if (isset($_SESSION["EmailAddress"]))
                echo "<b>Email: </b>" . $_SESSION["EmailAddress"] . "</br>";

            if (isset($_SESSION["TelephoneNumber"]))
                echo "<b>Phone Number: </b>" . $_SESSION["TelephoneNumber"] . "</br>";

            if (isset($_SESSION["SocialInsuranceNumber"]))
                echo "<b>SIN: </b>" . $_SESSION["SocialInsuranceNumber"] . "</br>";

            if (isset($_SESSION["Password"]))
                echo "<b>Password: </b>" . $_SESSION["Password"] . "</br>";
        }else {
            header("Location: Login.php");
            exit;
          }

        $sqlQuery = "SELECT * FROM employee";
        $result = mysqli_query($dbConnection, $sqlQuery);

        echo "<h1>Database Data</h1>
                       <table>
                       <tr>
                       <th>First Name</th>
                       <th>&emsp;&emsp;Last Name</th>
                       <th>&emsp;&emsp;Email Address</th>
                       <th>&emsp;&emsp;Phone Number</th>
                       <th>&emsp;&emsp;SIN</th>
                       </tr>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row["FirstName"] . "</td>";
            echo "<td>&emsp;&emsp;" . $row["LastName"] . "</td>";
            echo "<td>&emsp;&emsp;" . $row["EmailAddress"] . "</td>";
            echo "<td>&emsp;&emsp;" . $row["TelephoneNumber"] . "</td>";
            echo "<td>&emsp;&emsp;" . $row["SocialInsuranceNumber"] . "</td>";
        }
        echo "</table>";
        mysqli_close($dbConnection);
        ?>
    </div>
    <?php include_once "Footer.php"; ?>
</body>
</html>
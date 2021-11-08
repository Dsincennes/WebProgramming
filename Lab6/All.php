<html>

<head>
    <title>All</title>
    <link rel="stylesheet" type="text/css" href="StyleSheet1.css" />
</head>

<body>
    <div class="content">
        <?php
			include_once "Header.php";
			// variables
			$bottles = 99;
            while($bottles >= 0){
			    if ($bottles == 0){
				    echo "There are no more bottles of beer.";
                    break;
                }
                else{
                echo "$bottles bottles of beer on the wall...<br> $bottles bottles of beer... <br>
                You take one down you pass it around...<br>";
                $bottles --;
                echo "$bottles bottles of beer on the wall<br><br>";
                }
		    }

		?>

    </div>
    <?php include_once "Footer.php";?>
</body>

</html>
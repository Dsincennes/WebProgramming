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
			$bottles = 90;
            while($bottles >= 0){
                if($bottles == 0){
                    echo "There are no more bottles of beer.";
                    break;
                }
			    else if ($bottles == 10){
				    echo "There are only 10 bottles left. <br>You take them down you pass them around...<br>";
                    $bottles -= 10;
                    echo "$bottles bottles of beer on the wall.<br><br>";

                }
                else{
                echo "$bottles bottles of beer on the wall...<br> $bottles bottles of beer... <br>
                You take 10 down you pass it around...<br>";
                $bottles -= 10;
                echo "$bottles bottles of beer on the wall<br><br>";
                }
		    }

		?>
        <?php include_once "Footer.php";?>
    </div>
</body>

</html>
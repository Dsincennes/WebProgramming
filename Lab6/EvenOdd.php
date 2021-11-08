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
            while($bottles >= 1){
                if($bottles == 1){
                    echo "$bottles bottle can serve ONLY ONE guest";
                }
                else if($bottles % 2 != 0){
                    echo "$bottles bottles can serve odd number of guests<br>";
                }
			    else{
				    echo "$bottles bottles can serve even number of guests<br>";
                }
                $bottles --;
		    }

		?>
        <?php include_once "Footer.php";?>
    </div>
</body>

</html>
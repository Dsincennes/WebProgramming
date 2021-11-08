<html>

<head>
    <title>Pattern</title>
    <link rel="stylesheet" type="text/css" href="StyleSheet1.css" />
</head>

<body>
    <div class="content" style="text-align: center">
        <?php
			include_once "Header.php";
      $space = " ";
      $symbol = "*";
      $size = 10;
			echo "<br><br>";
            for ($row = 1; $row <= $size; $row++) {
              for ($col = 1; $col <= $size - $row; $col++) {
                echo "$space";
              }
              for($col = 1; $col <= $row * 2 - 1; $col++){
                  echo "$symbol";
              }
              echo "<br>";
            }
            for ($row = $size -1; $row > 0; $row--) {
              for ($col = 1; $col <= $size - $row; $col++) {
                echo "$space";
              }
              for($col = 1; $col <= $row *2 -1;$col++){
                  echo "$symbol";
              }
              echo "<br>";
            }
            echo "<br><br>";
          
		?>
        <?php include_once "Footer.php";?>
    </div>
</body>

</html>
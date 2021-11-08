<html>

<head>
    <title>Pattern</title>
    <link rel="stylesheet" type="text/css" href="StyleSheet1.css" />
</head>

<body>
<div class="content" style="text-align: left">
    <?php
			include_once "Header.php";
      
      $num1 = 0;
      $num2 = 0;
      $num3 = 0;
      $num4 = 0;
      $num5 = 0;

      for($i = 0; $i < 500; $i++){
        $num = rand(1,50);
        if ($num > 0 && $num <= 10){
          $num1++;
        }
        else if ($num > 10 && $num <= 20){
          $num2++;
        }
        else if ($num > 20 && $num <= 30){
          $num3++;
        }
        else if ($num > 30 && $num <= 40){
          $num4++;
        }
        else if ($num > 40 && $num <= 50){
          $num5++;
        }
      }
      echo "$num1 numbers are randomly generated in the range between 01 - 10<br>";
      echo "$num2 numbers are randomly generated in the range between 11 - 20<br>";
      echo "$num3 numbers are randomly generated in the range between 21 - 30<br>";
      echo "$num4 numbers are randomly generated in the range between 31 - 40<br>";
      echo "$num5 numbers are randomly generated in the range between 41 - 50<br>";
      echo "<br><br>";

      $pnum1 = $num1 * 100 / 500;
      $pnum2 = $num2 * 100 / 500;
      $pnum3 = $num3 * 100 / 500;
      $pnum4 = $num4 * 100 / 500;
      $pnum5 = $num5 * 100 / 500;
      echo "Histogram of stars as a percentage of the number of values are displayed below<br>";
      echo "01 - 10: ";
      for($i = 0; $i < $pnum1; $i++){
        echo "*";
      }
      echo "<br>11 - 20: ";
      for($i = 0; $i < $pnum2; $i++){
        echo "*";
      }
      echo "<br>21 - 30: ";
      for($i = 0; $i < $pnum3; $i++){
        echo "*";
      }
      echo "<br>31 - 40: ";
      for($i = 0; $i < $pnum4; $i++){
        echo "*";
      }
      echo "<br>41 - 50: ";
      for($i = 0; $i < $pnum5; $i++){
        echo "*";
      }

          
		?>
    <?php include_once "Footer.php";?>

</body>

</html>
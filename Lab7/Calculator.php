<html>

<head>
    <title>Calculator.php</title>
    <link rel="stylesheet" type="text/css" href="StyleSheet1.css" />
</head>

<body>
    <div class="content">
        <?php
            include_once "Header.php";
            ?>
        <form>
            <input type="operand_one" name="operand_one" placeholder="Num 1" />
            <select name="operator">
                <option value="Add">+</option>
                <option value="Subtract">-</option>
                <option value="Multiply">*</option>
                <option value="Divide">/</option>
                <option value="Exponent">exp</option>
            </select>
            <input type="operand_two" name="operand_two" placeholder="Num 2" />
            <input type="submit" name="submit" value="=" />
        </form>
        <?php
            $sum = 0;
            if(isset($_GET['submit']))
            {
                echo "<h4>";
                $result1 = $_GET['operand_one'];
                $result2 = $_GET['operand_two'];
                $operator = $_GET['operator'];
                switch($operator){
                    case "Add":
                        echo $result1 . " plus " . $result2 . " equals ";
                        echo $sum = $result1 + $result2;
                    break;
                    case "Subtract":
                        echo $result1 . " minus " . $result2 . " equals ";
                        echo $sum = $result1 - $result2;
                    break;
                    case "Multiply":
                        echo $result1 . " multiplied By " . $result2 . " equals ";
                        echo $sum = $result1 * $result2;
                    break;
                    case "Divide":
                        echo $result1 . " divided By " . $result2 . " equals ";
                        echo $sum = $result1 / $result2;
                    break;
                    case "Exponent":
                        echo $result1 . " to the power of " . $result2 . " equals ";
                        echo $sum = pow($result1, $result2);
                    break;
                }
                $prime = true;
                for($i = 2; $i <= $sum / 2; $i++){
                    if($sum % $i == 0){
                        $prime = false;
                    }
                }
                echo "</h4><h3><br>";
                echo $sum . " is";
                if($prime != false){
                    echo " a prime number";
                }else
                {
                    echo " not a prime number";
                } 
                echo "<br><br><br>";
                if($sum % 2 == 0){
                    echo $sum . " is an even number.";
                }else{
                    echo $sum . " is an odd number.";
                }
                echo "</h3>";
            }         
        ?>
    </div>
    <?php include_once "Footer.php";?>
</body>
</html>
<html>

<head>
    <title>Arrays.php</title>
    <link rel="stylesheet" type="text/css" href="StyleSheet1.css" />
</head>

<body>
    <div class="content">
        <?php
	include_once "Header.php";
        $November = array (
        "Friday" => array (
                '1st' => 5,
                '2nd' => 12,
                '3rd' => 19,
                '4th' => 26,
        ),
        "Saturday" => array (
                '1st' => 6,
                '2nd' => 13,
                '3rd' => 20,
                '4th' => 27 
        ),
        "Sunday" => array (
                '1st' => 7,
                '2nd' => 14,
                '3rd' => 21,
                '4th' => 28 
        ),
        "Monday" => array (
                '1st' => 1,
                '2nd' => 8,
                '3rd' => 15,
                '4th' => 22,
                '5th' => 29
        ),
        "Tuesday" => array (
                '1st' => 2,
                '2nd' => 9,
                '3rd' => 16,
                '4th' => 23,
                '5th' => 30 
        ),
        "Wednesday" => array (
                '1st' => 3,
                '2nd' => 10,
                '3rd' => 17,
                '4th' => 24 
        ),
        "Thursday" => array (
                '1st' => 4,
                '2nd' => 11,
                '3rd' => 18,
                '4th' => 25 
        ) 
        );

        echo "<h2>Output-1</h2>";
        echo print_r ($November);

        echo "<br>";

        echo "<h2>Output-2</h2>";
        
        $masterKey = array_keys ($November);
        for($i = 0; $i < count($November); $i++) {
                foreach ($November [$masterKey [$i]] as $key => $value) {
                        echo $value. " is the " .$key. " " .$masterKey[$i]. " in November. <br>";
                }
                echo "<br>";
        }

        echo "<h2>Output-3</h2>";
        echo print_r(array_reverse($November));

        echo "<h2>Output-4</h2>";
        $November["Wednesday"]['5th'] = 31;
        echo print_r($November);
        
        ?>

</div>
<?php include_once "Footer.php";?>
</body>

</html>
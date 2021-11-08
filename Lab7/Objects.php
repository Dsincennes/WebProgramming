<html>

<head>
    <title>Objects.php</title>
    <link rel="stylesheet" type="text/css" href="StyleSheet1.css" />
</head>

<body>
    <div class="content">
        <?php
	    include_once "Header.php";

        interface Vehicle{
            public function displayVehicleInfo();
        }

        class LandVehicle implements Vehicle{
            protected $make;
            protected $model;
            protected $year;
            protected $price;

            public function __construct($make, $model, $year, $price)
            {
                $this->make = $make;    
                $this->model = $model;    
                $this->year = $year;    
                $this->price = $price;                
            }

            public function displayVehicleInfo()
            {
                echo "<b>Make: </b>" . $this->make . ", <b>Model: </b>" . $this->model . ", <b>Year: </b>" . $this->year . ", <b>Price: </b>" . $this->price;
            }
        }

        class Car extends LandVehicle{
            private $speedLimit;

            public function __construct($make, $model, $year, $price, $speedLimit){
                parent::__construct ($make, $model, $year, $price);
                $this->speedLimit = $speedLimit;
            }

            public function displayVehicleInfo()
            {
                echo parent::displayVehicleInfo() . ", <b>Speed Limit: </b>" .$this->speedLimit;
            }
        }

        class WaterVehicle implements Vehicle{
            protected $make;
            protected $model;
            protected $year;
            protected $price;

            public function __construct($make, $model, $year, $price)
            {
                $this->make = $make;    
                $this->model = $model;    
                $this->year = $year;    
                $this->price = $price;                
            }

            public function displayVehicleInfo()
            {
                echo "<b>Make: </b>" . $this->make . ", <b>Model: </b>" . $this->model . ", <b>Year: </b>" . $this->year . ", <b>Price: </b>" . $this->price;
            }
            
        }

        class Boat extends WaterVehicle{
            private $boatCapacity;

            public function __construct($make, $model, $year, $price, $boatCapacity){
                parent::__construct ($make, $model, $year, $price);
                $this->boatCapacity = $boatCapacity;
            }

            public function displayVehicleInfo()
            {
                echo parent::displayVehicleInfo() . ", <b>Boat Capacity: </b>" .$this->boatCapacity;
            }
        }

        echo "<h2><u>Car</u></h2><br>";
        $car1 = new Car("Toyota", "Camry", 1992, 2000, 180);
        echo $car1->displayVehicleInfo();
        echo "<br>";
        $car2 = new Car("Honda", "Accord", 2002, 6000, 200);
        echo $car2->displayVehicleInfo();
        echo "<br>";

        echo "<h2><u>Boat</u></h2><br>";
        $boat1 = new Boat("Mitsubishi", "Turbo", 1999, 20000, 18);
        echo $boat1->displayVehicleInfo();
        echo "<br>";
        $boat2 = new Boat("Hyundai", "XT", 2012, 26000, 8);
        echo $boat2->displayVehicleInfo();
        echo "<br>";

        ?>

    </div>
    <?php include_once "Footer.php";?>
</body>

</html>
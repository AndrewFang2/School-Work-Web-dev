<html>
	<head>
		<title>Lab 5</title>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
	</head>

	<body>
		<div id="header"><h1>Computer Engineering Technology - Computing Science<br>Web Programming</h1></div>
	<div id="menu">
    		<a href='Arrays.php'>Arrays</a>&nbsp;
    		<a href='Currency.php'>Currency</a>&nbsp;
    		<a href='Vehicle.php'>Vehicle</a>&nbsp;
	</div>
<?php
interface Vehicle { 
	function displayVehicleInfo();
}
class LandVehicle implements Vehicle{
	protected $make;
    protected $model;
    protected $year;
    protected $price;
    
    function __construct($make,$model,$year,$price) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->price = $price;
    }
    function displayVehicleInfo(){
    	return "Make: ".$this->make.", Model: ".$this->model.", Year: ".$this->year.", Price: ".$this->price;
    }
}

class Car extends LandVehicle {
	private $speedLimit;
    function __construct($make,$model,$year,$price,$speedLimit) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->price = $price;
        $this->speedLimit = $speedLimit;
    }
    function displayVehicleInfo(){
    return "Make: ".$this->make.", Model: ".$this->model.", Year: ".$this->year.", Price: ".$this->price.", Speed Limit: ".$this->speedLimit;
    }
}

class WaterVehicle implements Vehicle{
    protected $make;
    protected $model;
    protected $year;
    protected $price;
    
    function __construct($make,$model,$year,$price) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->price = $price;
    }
    function displayVehicleInfo(){
        return "Make: ".$this->make.", Model: ".$this->model.", Year: ".$this->year.", Price: ".$this->price;
    }
}

class Boat extends WaterVehicle {
	private $boatCapacity;
    function __construct($make,$model,$year,$price,$boatCapacity) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->price = $price;
        $this->boatCapacity = $boatCapacity;
    }
    function displayVehicleInfo(){
    return "Make: ".$this->make.", Model: ".$this->model.", Year: ".$this->year.", Price: ".$this->price.", Boat Capacity: ".$this->boatCapacity;
    }
}
echo "<br>";
echo "<br><h3>Car</h3>";
$obj = new Car("Toyota","Camry","1992","2000","180");
echo $obj->displayVehicleInfo();
echo "<br>";
$obj = new Car("Honda","Accord","2002","6000","200");
echo $obj->displayVehicleInfo();
echo "<br><h3>Boat</h3>";
$obj = new Boat("Mitsubishi","Turbo","1992","20000","18");
echo $obj->displayVehicleInfo();
echo "<br>";
$obj = new Boat("Hyundei","XT","2012","26000","8");
echo $obj->displayVehicleInfo();
?>
<div id="footer">040974861 Andrew Fang fang0064@algonquinlive.com</div>	
</body>
</html>



<?php
// тут можно посмотреть как работать с классами и все. примеры
class Car {
static public $vendor = "aelita";
static public function getVendor (){
print self::$vendor;	
}

function __construct ($brand, $price) {
$this -> brand = $brand;
$this -> price = $price;
}

function getBrand (){
	echo "<br>";
	return $this -> brand;
	
}
function setBrand ($brand) {
	$this -> brand = $brand;
}

}

class Car2 extends Car {

function __construct ($brand, $price, $color, $type) {
	parent::__construct($brand, $price);
	$this -> color = $color;
	$this -> type = $type;
}  

function setColor ($color){
	$this -> color = $color;
}
function getColor () {
	echo "<br>";
	return $this -> color;
}
} 

$mercedes = new Car2 ("bmv", 30000, "red", "diesel");
print_r($mercedes);
echo "<br>";
$mercedes -> setBrand ("mercedes");
$mercedes -> setColor ("white");
print_r($mercedes);
car::$vendor = "tuxedo";
car::getVendor();


abstract class Phone {
	
abstract public function getType();
abstract public function setType($type);
}

class Samsung extends Phone {
	public $type = "samsunga-a";
function getType (){
	return $this -> type;
	 
}
function setType ($type){
$this -> type = $type; 
}
}

class staticExample {
	static public $type = "alkatel";
	static public function getType () {
		print self::$type." emae";
	}
}
print staticExample::$type;
staticExample::getType();


$samsunga = new Samsung ();
//print_r($samsunga -> setType("NokiA"));
//print_r($samsunga -> getType());

abstract class car {
	const RUNCODE = 00001;
static public $valid = "approved";
static public function checkValid () {
	print self::$valid;
}
function __construct ($brand, $color) {
	$this -> brand = $brand;
	$this -> color = $color;
}
abstract public function setBrand($brand);
abstract public function getBrand();

}

trait somefunctions {

public function treiter (){
	echo "its me traier!";
}

}

class car2 extends car {
	use somefunctions;
	function __construct ($brand, $color, $price, $type){
		parent::__construct ($brand, $color);
		$this -> price = $price;
		$this -> type = $type;
	}
function setBrand ($brand) {
	$this -> brand = $brand;
}
function getBrand () {
	print $this -> brand;
}

}



$mercedes = new car2 ("mercedes", "red", 20000, "miniven");
print_r($mercedes);
print car::$valid;
print car::checkValid();
print $mercedes -> treiter();

var_dump(class_exists("car"));
//print_r (get_declared_classes());
if (get_class($mercedes) === "car2") {
	echo "object is car2";
} else {
	echo "undefined class...sorry";
}

foreach (get_class_vars('car2') as $value => $key) {
	echo "$key => $value";
}

interface chargable {
	public function getPrice();
}

?>
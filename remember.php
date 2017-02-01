<?php
// основной класс 
class ShopProduct {
private $title = "Стандартный товар";
private $producerMainName = "Фамилия автора";
private $producerFirstName = "Имя автора";
protected $price = 0.01; //цена
private $discount = 0;

public function __construct($title, $firstName, $mainName, $price) {

$this -> title = $title;
$this -> producerMainName = $firstName;
$this -> producerFirstName = $mainName;
$this -> price = $price;

}

public function GetProducer() {
	return "{$this->producerMainName}"."{$this->producerFirstName}";
}

public function getSummaryLine() {
$base = "{$this->title} ({$this->producerMainName},";
$base .= "{$this->producerFirstName})";
}

public function setDiscount ($num){
	$this -> discount=$num;
}

public function getPrice () {
	return ($this -> price - $this -> discount);
}

}


// класс для сд диска наследуется от шопкласса
class CDProduct extends ShopProduct {
	private $playLength = 0;
	function __construct ($title, $firstName, $mainName, $price, $playLength) {
		parent :: __construct ($title, $firstName, $mainName, $price);
		$this -> $playLength;
	}

function getPlayLength () {
	return $this -> $playLength;
}

function getSummaryLine () {
$base = parent :: getSummaryLine ();
$base .= ": время звучания - {$this -> $playLength}";
return $base;
}
}

// класс для книг наследуется от шопкласса
class BookProduct extends ShopProduct {
	private $numpages = 0;
		function __construct ($title, $firstName, $mainName, $price, $playLength) {
		parent :: __construct ($title, $firstName, $mainName, $price);
		$this -> $numpages;
	}

	function getSummaryLine () {
$base = parent :: getSummaryLine ();
$base .= ": $this -> $numpages стр.";
return $base;
}

}




class ShopProductWriter {
	private $products = array ();
	public function addProduct (ShopProduct $shopProduct) {
		$this -> products[] = $shopProduct;
	}

	public function write () {
		$str = "";
		foreach ($this -> products as $shopProduct) {
			$str .= "{$shopProduct -> title}: ";
			$str .= $shopProduct -> getProducer();
			$str .= "({shopProduct -> getPrice()})\n";
		}
	print $str;
	}
}




}

$product1 = new ShopProduct("nameless", "bandai", "namco", 999);





//echo $product1 -> GetProducer();


//var_dump ($product1);

//class OutputProduct {
//public function output (ShopProduct $ShopProduct) {
//$str = "{$ShopProduct->title} "."{$ShopProduct->producerMainName} "."{$ShopProduct->price}";
//print $str;
//}

?>


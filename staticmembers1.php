<?php

// class House {

// 	public static $size;

// 	public static function getSize()
// 	{
// 		return self::$size;
// 	}
// 	public static function setSize($s)
// 	{
// 		self::$size = $s;
// 	}
// }

// House::setSize(1200);

// echo House::getSize();

class abc {
	public static $objCount = 0;

	public static function getCount()
	{
		return self::$objCount;
	}
	public function __construct()
	{
		self::$objCount++;
	}
}
class xyz extends  abc{
	public static function getCount()
	{
		parent::getCount(); //this will call the parent function first 
		// new functionality here.
	}
}



$a = new abc;
$b = new abc;
// $c = new abc;


echo abc::getCount();


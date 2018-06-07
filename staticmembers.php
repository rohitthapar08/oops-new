<?php

class abc{
	//public static $data = 'test data';
	public  $data = 'test data';
	public function xyz()
	{
		echo"xyz function";
	}
}
// abc::xyz();
// echo abc::xyz();
$a = new abc();

$a->data = 'object1';

$b = new abc();

$b->data = 'object2';

echo $b->data;

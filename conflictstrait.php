<?php

trait one{
	public function test()
	{
		echo "test mehtod from one trait";
	}
}
trait two{
	public function test()
	{
		echo "test mehtod from two trait";
	}
}
class abc {
	use one, two{
		two::test insteadof one;
		one::test as Onetest;//use both the trait

	}
}

$obj =  new abc;
$obj->test();
$obj->Onetest();
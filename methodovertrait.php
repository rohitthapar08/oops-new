<?php

class Base {
	public function abc()
	{
		echo "abc method from base class";
	}
}
trait Test {
	public function abc()
	{
		echo "abc method from test trait";
	}
}
class Child extends Base
{
	use Test;
	public function abc()
	{
		echo "abc method from child";
	}

}
$obj = new Base;
$obj = new Child;

$obj->abc();
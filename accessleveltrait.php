<?php

trait abc {
	private function xyz()
	{
		echo  "xyz from abc";
	}
}
class test{
	use abc{
		abc::xyz as public;
	}

}
$obj = new test;

$obj->xyz();
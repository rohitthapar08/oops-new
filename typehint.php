<?php

// function test(array $arr)
// {
// 	echo "<table>";
// 	foreach ($arr as $k => $v) {
// 		echo "<tr><td>$k</td><td>$v</td></tr>";
// 	}
// 	echo "</table>";
// }

// $array = ['abc'=>'ABC','xyz'=>'XYZ'];
// $array = 'adsasdas';


// test($array); 
interface test {
	public function doSomething();
}
class ABC implements test {
	public function doSomething()
	{
		echo  "doing something from abc class"; 
	}
}
class XYZ implements test {
	public function doSomething()
	{
		echo  "doing something xyz class"; 
	}
	public function doSomethingElse()
	{
		echo  "doing something else"; 
	}
// 	public function __construct(ABC $abc)
// 	{
// 		$this->abc = $abc; 
// 	}
}
function test(test $abc)
{
	$abc->doSomething();
}
$abc = new ABC();
test($abc);
<?php
	class TV{
		public $model;
		public $volume;

		function volumeUp()
		{
			$this->volume++;
		}
		function volumeDown()
		{
			$this->volume--;
		}
		function __construct($m ,$v)
		{
			$this->model = $m;
			$this->volume = $v;
		}
	} 
	$tv = new TV('def' , 2);
	$tv_one = new TV('xyz' , 4); 
	echo $tv->model;

?>

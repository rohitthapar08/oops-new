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

	class TvTimer extends TV {
		public $timer = true;

	}
	class  Plasma extends TV{
		public  $plasma  =  true;
	}
	$tv = new TvTimer('timer' , 2);
	$plasma =  new Plasma('plasma' ,  3);
	echo $plasma->model;
?>


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
	class plasmaTv extends  TV{
		public $model = 'def'; //  model got override here

		function __construct(){

		}
	}
	$plasma = new plasmaTv(); 
	echo $plasma->model;


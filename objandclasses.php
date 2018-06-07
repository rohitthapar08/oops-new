<?php
	class TV{
		public $model = 'xyz';
		public $volume = 1;

		function volumeUp()
		{
			$this->volume++;
		}
		function volumeDown()
		{
			$this->volume--;
		}
	} 
	$tv_one = new TV;
	$tv_two = new TV;
	$tv_one->volumeUp();
	$tv_two->volumeUp();

	$tv_one->volumeDown();
	$tv_one->model = 'abc';

	echo $tv_two->model;

?>
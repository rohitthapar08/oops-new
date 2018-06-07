<?php
	class TV{
		protected $model;
		private $volume;

		public function volumeUp()
		{
			$this->volume++;
		}
		public function volumeDown()
		{
			$this->volume--;
		}
		protected function getModel()
		{
			return $this->model;
		}
		public  function __construct($m ,$v)
		{
			$this->model = $m;
			$this->volume = $v;
		}

	} 
	class plasma extends TV{
		public function getModel()
		{
			return $this->model;
		}
	}

	//public  private protected


	// $tv = new Tv('abc' , 3);
	$tv =  new plasma('abc' , 4);
	//$tv->model  = 'xyz';
	echo  $tv->getModel();
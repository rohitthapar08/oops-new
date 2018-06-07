<?php

namespace def {
	class xyz {
		public function __construct()
		{
			echo "xyz from def namespace";
		}
	}
}
namespace{
	class xyz {
		public function __construct()
		{
			echo "xyz from global namespace";
		}
	}
	use def\xyz as def;
	$obj = new def;
}

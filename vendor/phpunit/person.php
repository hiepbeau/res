<?php 
	
	/**
	*  
	*/
	class Person extends AnotherClass
	{

		public $name;
		
		function __construct($name)
		{
			# code...

			$this->name = $name;
		}

		public function getName(){
			return $this->name;
		}
	}

 ?>
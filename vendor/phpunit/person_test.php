<?php 
	require 'person.php';
	/**
	* 
	*/
	class Person_test extends PHPUnit_Framework_TestCase
	{

		public $test;
		public function setUp(){
			$this->test = new person('huy');

		}
		
		public function testName(){
			$name = $this->test->getName();
			$this->assertTrue($name=='huy');
		}
	}
 ?>
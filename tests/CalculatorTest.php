<?php 
require 'calculator.php';

/**
* 
*/
class CalculatorTest extends PHPUnit_Framework_TestCase
{
	
	public function testSumNumber()
	{
		$this->assertEquals(301,Calculator::Sum(5,25));
	}
}
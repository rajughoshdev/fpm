<?php 

class ValidatePasswordTest extends PHPUnit_Framework_TestCase {
/*	public function testInValidLength(){
		$valPass = new VPassword();
		$this->assertTrue($valPass->validLength('1234'));

	}
*/
	public function testValidLength(){
		$valPass = new VPassword();
		$this->assertTrue($valPass->validLength('1234567'));

	}

}



?>
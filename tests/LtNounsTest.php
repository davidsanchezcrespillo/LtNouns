<?php
 
use LtWords\LtNouns\LtNouns;
 
class LtNounsTest extends PHPUnit_Framework_TestCase {
 
  private $_ltNouns;
  
  public function setUp()
  {
	  $this->_ltNouns = new LtNouns;
  }
  
  public function testBasic()
  {
	  $this->assertEquals("", $this->_ltNouns->generateDeclensions(""));
  }
  
  public function testAs() {
	  $asDeclensions = $this->_ltNouns->generateDeclensions("vyras");
	  $this->assertInternalType('array', $asDeclensions);
	  $this->assertInternalType('array', $asDeclensions['singular']);
	  $this->assertInternalType('array', $asDeclensions['plural']);
	  
	  $this->assertEquals('vyras', $asDeclensions['singular']['kas']);
	  $this->assertEquals('vyro', $asDeclensions['singular']['ko']);
	  $this->assertEquals('vyrą', $asDeclensions['singular']['ką']);
	  $this->assertEquals('vyrui', $asDeclensions['singular']['kam']);
	  $this->assertEquals('vyre', $asDeclensions['singular']['kame']);
	  $this->assertEquals('vyru', $asDeclensions['singular']['kuo']);
	  $this->assertEquals('vyre', $asDeclensions['singular']['o']);

	  $this->assertEquals('vyrai', $asDeclensions['plural']['kas']);
	  $this->assertEquals('vyrų', $asDeclensions['plural']['ko']);
	  $this->assertEquals('vyrus', $asDeclensions['plural']['ką']);
	  $this->assertEquals('vyrams', $asDeclensions['plural']['kam']);
	  $this->assertEquals('vyruose', $asDeclensions['plural']['kame']);
	  $this->assertEquals('vyrais', $asDeclensions['plural']['kuo']);
	  $this->assertEquals('vyrai', $asDeclensions['plural']['o']);
  }
  
}


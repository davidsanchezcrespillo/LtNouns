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

  public function testA() {
	  $asDeclensions = $this->_ltNouns->generateDeclensions("knyga");
	  $this->assertInternalType('array', $asDeclensions);
	  $this->assertInternalType('array', $asDeclensions['singular']);
	  $this->assertInternalType('array', $asDeclensions['plural']);
	  
	  $this->assertEquals('knyga', $asDeclensions['singular']['kas']);
	  $this->assertEquals('knygos', $asDeclensions['singular']['ko']);
	  $this->assertEquals('knygą', $asDeclensions['singular']['ką']);
	  $this->assertEquals('knygai', $asDeclensions['singular']['kam']);
	  $this->assertEquals('knygoje', $asDeclensions['singular']['kame']);
	  $this->assertEquals('knyga', $asDeclensions['singular']['kuo']);
	  $this->assertEquals('knyga', $asDeclensions['singular']['o']);

	  $this->assertEquals('knygos', $asDeclensions['plural']['kas']);
	  $this->assertEquals('knygų', $asDeclensions['plural']['ko']);
	  $this->assertEquals('knygas', $asDeclensions['plural']['ką']);
	  $this->assertEquals('knygoms', $asDeclensions['plural']['kam']);
	  $this->assertEquals('knygose', $asDeclensions['plural']['kame']);
	  $this->assertEquals('knygomis', $asDeclensions['plural']['kuo']);
	  $this->assertEquals('knygos', $asDeclensions['plural']['o']);
  }

  public function testE() {
	  $asDeclensions = $this->_ltNouns->generateDeclensions("varškė");

	  $this->assertInternalType('array', $asDeclensions);
	  $this->assertInternalType('array', $asDeclensions['singular']);
	  $this->assertInternalType('array', $asDeclensions['plural']);
	  
	  $this->assertEquals('varškė', $asDeclensions['singular']['kas']);
	  $this->assertEquals('varškės', $asDeclensions['singular']['ko']);
	  $this->assertEquals('varškę', $asDeclensions['singular']['ką']);
	  $this->assertEquals('varškei', $asDeclensions['singular']['kam']);
	  $this->assertEquals('varškėje', $asDeclensions['singular']['kame']);
	  $this->assertEquals('varške', $asDeclensions['singular']['kuo']);
	  $this->assertEquals('varške', $asDeclensions['singular']['o']);

	  $this->assertEquals('varškės', $asDeclensions['plural']['kas']);
	  $this->assertEquals('varškių', $asDeclensions['plural']['ko']);
	  $this->assertEquals('varškes', $asDeclensions['plural']['ką']);
	  $this->assertEquals('varškėms', $asDeclensions['plural']['kam']);
	  $this->assertEquals('varškėse', $asDeclensions['plural']['kame']);
	  $this->assertEquals('varškėmis', $asDeclensions['plural']['kuo']);
	  $this->assertEquals('varškės', $asDeclensions['plural']['o']);
	  
	  $moreDeclensions = $this->_ltNouns->generateDeclensions("katė");
  
	  $this->assertEquals("kačių", $moreDeclensions['plural']['ko']);
  }
}


<?php
 
use LtWords\LtNouns\LtNouns;

/**
 * Unit tests for the LtNouns class.
 * Some references:
 * https://lt.wikipedia.org/wiki/Kir%C4%8Diuot%C4%97
 */ 
class LtNounsTest extends PHPUnit_Framework_TestCase
{
 
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

  public function testIas() {
	  $asDeclensions = $this->_ltNouns->generateDeclensions("kelias");
	  $this->assertInternalType('array', $asDeclensions);
	  $this->assertInternalType('array', $asDeclensions['singular']);
	  $this->assertInternalType('array', $asDeclensions['plural']);
	  
	  $this->assertEquals('kelias', $asDeclensions['singular']['kas']);
	  $this->assertEquals('kelio', $asDeclensions['singular']['ko']);
	  $this->assertEquals('kelią', $asDeclensions['singular']['ką']);
	  $this->assertEquals('keliui', $asDeclensions['singular']['kam']);
	  $this->assertEquals('kelyje', $asDeclensions['singular']['kame']);
	  $this->assertEquals('keliu', $asDeclensions['singular']['kuo']);
	  $this->assertEquals('kely', $asDeclensions['singular']['o']);

	  $this->assertEquals('keliai', $asDeclensions['plural']['kas']);
	  $this->assertEquals('kelių', $asDeclensions['plural']['ko']);
	  $this->assertEquals('kelius', $asDeclensions['plural']['ką']);
	  $this->assertEquals('keliams', $asDeclensions['plural']['kam']);
	  $this->assertEquals('keliuose', $asDeclensions['plural']['kame']);
	  $this->assertEquals('keliais', $asDeclensions['plural']['kuo']);
	  $this->assertEquals('keliai', $asDeclensions['plural']['o']);
  }

  public function testJas() {
	  $asDeclensions = $this->_ltNouns->generateDeclensions("vėjas");
	  $this->assertInternalType('array', $asDeclensions);
	  $this->assertInternalType('array', $asDeclensions['singular']);
	  $this->assertInternalType('array', $asDeclensions['plural']);
	  
	  $this->assertEquals('vėjas', $asDeclensions['singular']['kas']);
	  $this->assertEquals('vėjo', $asDeclensions['singular']['ko']);
	  $this->assertEquals('vėją', $asDeclensions['singular']['ką']);
	  $this->assertEquals('vėjui', $asDeclensions['singular']['kam']);
	  $this->assertEquals('vėjuje', $asDeclensions['singular']['kame']);
	  $this->assertEquals('vėju', $asDeclensions['singular']['kuo']);
	  $this->assertEquals('vėjau', $asDeclensions['singular']['o']);

	  $this->assertEquals('vėjai', $asDeclensions['plural']['kas']);
	  $this->assertEquals('vėjų', $asDeclensions['plural']['ko']);
	  $this->assertEquals('vėjus', $asDeclensions['plural']['ką']);
	  $this->assertEquals('vėjams', $asDeclensions['plural']['kam']);
	  $this->assertEquals('vėjuose', $asDeclensions['plural']['kame']);
	  $this->assertEquals('vėjais', $asDeclensions['plural']['kuo']);
	  $this->assertEquals('vėjai', $asDeclensions['plural']['o']);
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
  
  public function testUs() {
	  $asDeclensions = $this->_ltNouns->generateDeclensions("alus");

	  $this->assertInternalType('array', $asDeclensions);
	  $this->assertInternalType('array', $asDeclensions['singular']);
	  $this->assertInternalType('array', $asDeclensions['plural']);
	  
	  $this->assertEquals('alus', $asDeclensions['singular']['kas']);
	  $this->assertEquals('alaus', $asDeclensions['singular']['ko']);
	  $this->assertEquals('alų', $asDeclensions['singular']['ką']);
	  $this->assertEquals('alui', $asDeclensions['singular']['kam']);
	  $this->assertEquals('aluje', $asDeclensions['singular']['kame']);
	  $this->assertEquals('alumi', $asDeclensions['singular']['kuo']);
	  $this->assertEquals('alau', $asDeclensions['singular']['o']);

	  $this->assertEquals('alūs', $asDeclensions['plural']['kas']);
	  $this->assertEquals('alų', $asDeclensions['plural']['ko']);
	  $this->assertEquals('alus', $asDeclensions['plural']['ką']);
	  $this->assertEquals('alums', $asDeclensions['plural']['kam']);
	  $this->assertEquals('aluose', $asDeclensions['plural']['kame']);
	  $this->assertEquals('alumis', $asDeclensions['plural']['kuo']);
	  $this->assertEquals('alūs', $asDeclensions['plural']['o']);
  }

  public function testJus() {
	  $asDeclensions = $this->_ltNouns->generateDeclensions("pavojus");

	  $this->assertInternalType('array', $asDeclensions);
	  $this->assertInternalType('array', $asDeclensions['singular']);
	  $this->assertInternalType('array', $asDeclensions['plural']);
	  
	  $this->assertEquals('pavojus', $asDeclensions['singular']['kas']);
	  $this->assertEquals('pavojaus', $asDeclensions['singular']['ko']);
	  $this->assertEquals('pavojų', $asDeclensions['singular']['ką']);
	  $this->assertEquals('pavojui', $asDeclensions['singular']['kam']);
	  $this->assertEquals('pavojuje', $asDeclensions['singular']['kame']);
	  $this->assertEquals('pavojumi', $asDeclensions['singular']['kuo']);
	  $this->assertEquals('pavojau', $asDeclensions['singular']['o']);

	  $this->assertEquals('pavojūs', $asDeclensions['plural']['kas']);
	  $this->assertEquals('pavojų', $asDeclensions['plural']['ko']);
	  $this->assertEquals('pavojus', $asDeclensions['plural']['ką']);
	  $this->assertEquals('pavojams', $asDeclensions['plural']['kam']);
	  $this->assertEquals('pavojuose', $asDeclensions['plural']['kame']);
	  $this->assertEquals('pavojais', $asDeclensions['plural']['kuo']);
	  $this->assertEquals('pavojūs', $asDeclensions['plural']['o']);
  }

  public function testIus() {
	  $asDeclensions = $this->_ltNouns->generateDeclensions("amžius");

	  $this->assertInternalType('array', $asDeclensions);
	  $this->assertInternalType('array', $asDeclensions['singular']);
	  $this->assertInternalType('array', $asDeclensions['plural']);
	  
	  $this->assertEquals('amžius', $asDeclensions['singular']['kas']);
	  $this->assertEquals('amžiaus', $asDeclensions['singular']['ko']);
	  $this->assertEquals('amžių', $asDeclensions['singular']['ką']);
	  $this->assertEquals('amžiui', $asDeclensions['singular']['kam']);
	  $this->assertEquals('amžiuje', $asDeclensions['singular']['kame']);
	  $this->assertEquals('amžiumi', $asDeclensions['singular']['kuo']);
	  $this->assertEquals('amžiau', $asDeclensions['singular']['o']);

	  $this->assertEquals('amžiai', $asDeclensions['plural']['kas']);
	  $this->assertEquals('amžių', $asDeclensions['plural']['ko']);
	  $this->assertEquals('amžius', $asDeclensions['plural']['ką']);
	  $this->assertEquals('amžiams', $asDeclensions['plural']['kam']);
	  $this->assertEquals('amžiuose', $asDeclensions['plural']['kame']);
	  $this->assertEquals('amžiais', $asDeclensions['plural']['kuo']);
	  $this->assertEquals('amžiai', $asDeclensions['plural']['o']);
  }
}

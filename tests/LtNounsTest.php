<?php
 
use LtWords\LtNouns\LtNouns;
use LtWords\LtWordTypes\LtWordTypes;

/**
 * Unit tests for the LtNouns class.
 * Some references:
 * https://lt.wikipedia.org/wiki/Kir%C4%8Diuot%C4%97
 */ 
class LtNounsTest extends PHPUnit_Framework_TestCase
{
  private $_ltWordTypes;
  private $_ltNouns;
  
  public function setUp()
  {
      $this->_ltWordTypes = new LtWordTypes;
      $this->_ltNouns = new LtNouns($this->_ltWordTypes);
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
  }

  public function testTe() {
      $asDeclensions = $this->_ltNouns->generateDeclensions("katė");

      $this->assertInternalType('array', $asDeclensions);
      $this->assertInternalType('array', $asDeclensions['singular']);
      $this->assertInternalType('array', $asDeclensions['plural']);
      
      $this->assertEquals('katė', $asDeclensions['singular']['kas']);
      $this->assertEquals('katės', $asDeclensions['singular']['ko']);
      $this->assertEquals('katę', $asDeclensions['singular']['ką']);
      $this->assertEquals('katei', $asDeclensions['singular']['kam']);
      $this->assertEquals('katėje', $asDeclensions['singular']['kame']);
      $this->assertEquals('kate', $asDeclensions['singular']['kuo']);
      $this->assertEquals('kate', $asDeclensions['singular']['o']);

      $this->assertEquals('katės', $asDeclensions['plural']['kas']);
      $this->assertEquals('kačių', $asDeclensions['plural']['ko']);
      $this->assertEquals('kates', $asDeclensions['plural']['ką']);
      $this->assertEquals('katėms', $asDeclensions['plural']['kam']);
      $this->assertEquals('katėse', $asDeclensions['plural']['kame']);
      $this->assertEquals('katėmis', $asDeclensions['plural']['kuo']);
      $this->assertEquals('katės', $asDeclensions['plural']['o']);

      $asDeclensions = $this->_ltNouns->generateDeclensions("katĖ");

      $this->assertInternalType('array', $asDeclensions);
      $this->assertInternalType('array', $asDeclensions['singular']);
      $this->assertInternalType('array', $asDeclensions['plural']);
      
      $this->assertEquals('katė', $asDeclensions['singular']['kas']);
      $this->assertEquals('katės', $asDeclensions['singular']['ko']);
      $this->assertEquals('katę', $asDeclensions['singular']['ką']);
      $this->assertEquals('katei', $asDeclensions['singular']['kam']);
      $this->assertEquals('katėje', $asDeclensions['singular']['kame']);
      $this->assertEquals('kate', $asDeclensions['singular']['kuo']);
      $this->assertEquals('kate', $asDeclensions['singular']['o']);

      $this->assertEquals('katės', $asDeclensions['plural']['kas']);
      $this->assertEquals('kačių', $asDeclensions['plural']['ko']);
      $this->assertEquals('kates', $asDeclensions['plural']['ką']);
      $this->assertEquals('katėms', $asDeclensions['plural']['kam']);
      $this->assertEquals('katėse', $asDeclensions['plural']['kame']);
      $this->assertEquals('katėmis', $asDeclensions['plural']['kuo']);
      $this->assertEquals('katės', $asDeclensions['plural']['o']);
  }

  public function testDe() {
      $asDeclensions = $this->_ltNouns->generateDeclensions("kėdė");

      $this->assertInternalType('array', $asDeclensions);
      $this->assertInternalType('array', $asDeclensions['singular']);
      $this->assertInternalType('array', $asDeclensions['plural']);
      
      $this->assertEquals('kėdė', $asDeclensions['singular']['kas']);
      $this->assertEquals('kėdės', $asDeclensions['singular']['ko']);
      $this->assertEquals('kėdę', $asDeclensions['singular']['ką']);
      $this->assertEquals('kėdei', $asDeclensions['singular']['kam']);
      $this->assertEquals('kėdėje', $asDeclensions['singular']['kame']);
      $this->assertEquals('kėde', $asDeclensions['singular']['kuo']);
      $this->assertEquals('kėde', $asDeclensions['singular']['o']);

      $this->assertEquals('kėdės', $asDeclensions['plural']['kas']);
      $this->assertEquals('kėdžių', $asDeclensions['plural']['ko']);
      $this->assertEquals('kėdes', $asDeclensions['plural']['ką']);
      $this->assertEquals('kėdėms', $asDeclensions['plural']['kam']);
      $this->assertEquals('kėdėse', $asDeclensions['plural']['kame']);
      $this->assertEquals('kėdėmis', $asDeclensions['plural']['kuo']);
      $this->assertEquals('kėdės', $asDeclensions['plural']['o']);
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
  
  public function testIs() {
      $asDeclensions = $this->_ltNouns->generateDeclensions("brolis");

      $this->assertInternalType('array', $asDeclensions);
      $this->assertInternalType('array', $asDeclensions['singular']);
      $this->assertInternalType('array', $asDeclensions['plural']);
      
      $this->assertEquals('brolis', $asDeclensions['singular']['kas']);
      $this->assertEquals('brolio', $asDeclensions['singular']['ko']);
      $this->assertEquals('brolį', $asDeclensions['singular']['ką']);
      $this->assertEquals('broliui', $asDeclensions['singular']['kam']);
      $this->assertEquals('brolyje', $asDeclensions['singular']['kame']);
      $this->assertEquals('broliu', $asDeclensions['singular']['kuo']);
      $this->assertEquals('broli', $asDeclensions['singular']['o']);

      $this->assertEquals('broliai', $asDeclensions['plural']['kas']);
      $this->assertEquals('brolių', $asDeclensions['plural']['ko']);
      $this->assertEquals('brolius', $asDeclensions['plural']['ką']);
      $this->assertEquals('broliams', $asDeclensions['plural']['kam']);
      $this->assertEquals('broliuose', $asDeclensions['plural']['kame']);
      $this->assertEquals('broliais', $asDeclensions['plural']['kuo']);
      $this->assertEquals('broliai', $asDeclensions['plural']['o']);
  }  

  public function testDis() {
      $asDeclensions = $this->_ltNouns->generateDeclensions("medis");

      $this->assertInternalType('array', $asDeclensions);
      $this->assertInternalType('array', $asDeclensions['singular']);
      $this->assertInternalType('array', $asDeclensions['plural']);
      
      $this->assertEquals('medis', $asDeclensions['singular']['kas']);
      $this->assertEquals('medžio', $asDeclensions['singular']['ko']);
      $this->assertEquals('medį', $asDeclensions['singular']['ką']);
      $this->assertEquals('medžiui', $asDeclensions['singular']['kam']);
      $this->assertEquals('medyje', $asDeclensions['singular']['kame']);
      $this->assertEquals('medžiu', $asDeclensions['singular']['kuo']);
      $this->assertEquals('medi', $asDeclensions['singular']['o']);

      $this->assertEquals('medžiai', $asDeclensions['plural']['kas']);
      $this->assertEquals('medžių', $asDeclensions['plural']['ko']);
      $this->assertEquals('medžius', $asDeclensions['plural']['ką']);
      $this->assertEquals('medžiams', $asDeclensions['plural']['kam']);
      $this->assertEquals('medžiuose', $asDeclensions['plural']['kame']);
      $this->assertEquals('medžiais', $asDeclensions['plural']['kuo']);
      $this->assertEquals('medžiai', $asDeclensions['plural']['o']);
  } 

  public function testTis() {
      $asDeclensions = $this->_ltNouns->generateDeclensions("dangtis");

      $this->assertInternalType('array', $asDeclensions);
      $this->assertInternalType('array', $asDeclensions['singular']);
      $this->assertInternalType('array', $asDeclensions['plural']);
      
      $this->assertEquals('dangtis', $asDeclensions['singular']['kas']);
      $this->assertEquals('dangčio', $asDeclensions['singular']['ko']);
      $this->assertEquals('dangtį', $asDeclensions['singular']['ką']);
      $this->assertEquals('dangčiui', $asDeclensions['singular']['kam']);
      $this->assertEquals('dangtyje', $asDeclensions['singular']['kame']);
      $this->assertEquals('dangčiu', $asDeclensions['singular']['kuo']);
      $this->assertEquals('dangti', $asDeclensions['singular']['o']);

      $this->assertEquals('dangčiai', $asDeclensions['plural']['kas']);
      $this->assertEquals('dangčių', $asDeclensions['plural']['ko']);
      $this->assertEquals('dangčius', $asDeclensions['plural']['ką']);
      $this->assertEquals('dangčiams', $asDeclensions['plural']['kam']);
      $this->assertEquals('dangčiuose', $asDeclensions['plural']['kame']);
      $this->assertEquals('dangčiais', $asDeclensions['plural']['kuo']);
      $this->assertEquals('dangčiai', $asDeclensions['plural']['o']);
  } 

  public function testJis() {
      $asDeclensions = $this->_ltNouns->generateDeclensions("atvejis");

      $this->assertInternalType('array', $asDeclensions);
      $this->assertInternalType('array', $asDeclensions['singular']);
      $this->assertInternalType('array', $asDeclensions['plural']);
      
      $this->assertEquals('atvejis', $asDeclensions['singular']['kas']);
      $this->assertEquals('atvejo', $asDeclensions['singular']['ko']);
      $this->assertEquals('atvejį', $asDeclensions['singular']['ką']);
      $this->assertEquals('atvejui', $asDeclensions['singular']['kam']);
      $this->assertEquals('atvejyje', $asDeclensions['singular']['kame']);
      $this->assertEquals('atveju', $asDeclensions['singular']['kuo']);
      $this->assertEquals('atveji', $asDeclensions['singular']['o']);

      $this->assertEquals('atvejai', $asDeclensions['plural']['kas']);
      $this->assertEquals('atvejų', $asDeclensions['plural']['ko']);
      $this->assertEquals('atvejus', $asDeclensions['plural']['ką']);
      $this->assertEquals('atvejams', $asDeclensions['plural']['kam']);
      $this->assertEquals('atvejuose', $asDeclensions['plural']['kame']);
      $this->assertEquals('atvejais', $asDeclensions['plural']['kuo']);
      $this->assertEquals('atvejai', $asDeclensions['plural']['o']);
  } 

  public function testYs() {
      $asDeclensions = $this->_ltNouns->generateDeclensions("arklys");

      $this->assertInternalType('array', $asDeclensions);
      $this->assertInternalType('array', $asDeclensions['singular']);
      $this->assertInternalType('array', $asDeclensions['plural']);
      
      $this->assertEquals('arklys', $asDeclensions['singular']['kas']);
      $this->assertEquals('arklio', $asDeclensions['singular']['ko']);
      $this->assertEquals('arklį', $asDeclensions['singular']['ką']);
      $this->assertEquals('arkliui', $asDeclensions['singular']['kam']);
      $this->assertEquals('arklyje', $asDeclensions['singular']['kame']);
      $this->assertEquals('arkliu', $asDeclensions['singular']['kuo']);
      $this->assertEquals('arkly', $asDeclensions['singular']['o']);

      $this->assertEquals('arkliai', $asDeclensions['plural']['kas']);
      $this->assertEquals('arklių', $asDeclensions['plural']['ko']);
      $this->assertEquals('arklius', $asDeclensions['plural']['ką']);
      $this->assertEquals('arkliams', $asDeclensions['plural']['kam']);
      $this->assertEquals('arkliuose', $asDeclensions['plural']['kame']);
      $this->assertEquals('arkliais', $asDeclensions['plural']['kuo']);
      $this->assertEquals('arkliai', $asDeclensions['plural']['o']);
  }  

  public function testDys() {
      $asDeclensions = $this->_ltNouns->generateDeclensions("vyzdys");

      $this->assertInternalType('array', $asDeclensions);
      $this->assertInternalType('array', $asDeclensions['singular']);
      $this->assertInternalType('array', $asDeclensions['plural']);
      
      $this->assertEquals('vyzdys', $asDeclensions['singular']['kas']);
      $this->assertEquals('vyzdžio', $asDeclensions['singular']['ko']);
      $this->assertEquals('vyzdį', $asDeclensions['singular']['ką']);
      $this->assertEquals('vyzdžiui', $asDeclensions['singular']['kam']);
      $this->assertEquals('vyzdyje', $asDeclensions['singular']['kame']);
      $this->assertEquals('vyzdžiu', $asDeclensions['singular']['kuo']);
      $this->assertEquals('vyzdy', $asDeclensions['singular']['o']);

      $this->assertEquals('vyzdžiai', $asDeclensions['plural']['kas']);
      $this->assertEquals('vyzdžių', $asDeclensions['plural']['ko']);
      $this->assertEquals('vyzdžius', $asDeclensions['plural']['ką']);
      $this->assertEquals('vyzdžiams', $asDeclensions['plural']['kam']);
      $this->assertEquals('vyzdžiuose', $asDeclensions['plural']['kame']);
      $this->assertEquals('vyzdžiais', $asDeclensions['plural']['kuo']);
      $this->assertEquals('vyzdžiai', $asDeclensions['plural']['o']);
  }  

  public function testJys() {
      $asDeclensions = $this->_ltNouns->generateDeclensions("žvejys");

      $this->assertInternalType('array', $asDeclensions);
      $this->assertInternalType('array', $asDeclensions['singular']);
      $this->assertInternalType('array', $asDeclensions['plural']);
      
      $this->assertEquals('žvejys', $asDeclensions['singular']['kas']);
      $this->assertEquals('žvejo', $asDeclensions['singular']['ko']);
      $this->assertEquals('žvejį', $asDeclensions['singular']['ką']);
      $this->assertEquals('žvejui', $asDeclensions['singular']['kam']);
      $this->assertEquals('žvejyje', $asDeclensions['singular']['kame']);
      $this->assertEquals('žveju', $asDeclensions['singular']['kuo']);
      $this->assertEquals('žvejy', $asDeclensions['singular']['o']);

      $this->assertEquals('žvejai', $asDeclensions['plural']['kas']);
      $this->assertEquals('žvejų', $asDeclensions['plural']['ko']);
      $this->assertEquals('žvejus', $asDeclensions['plural']['ką']);
      $this->assertEquals('žvejams', $asDeclensions['plural']['kam']);
      $this->assertEquals('žvejuose', $asDeclensions['plural']['kame']);
      $this->assertEquals('žvejais', $asDeclensions['plural']['kuo']);
      $this->assertEquals('žvejai', $asDeclensions['plural']['o']);
  } 

  public function testTys() {
      $asDeclensions = $this->_ltNouns->generateDeclensions("žaltys");

      $this->assertInternalType('array', $asDeclensions);
      $this->assertInternalType('array', $asDeclensions['singular']);
      $this->assertInternalType('array', $asDeclensions['plural']);
      
      $this->assertEquals('žaltys', $asDeclensions['singular']['kas']);
      $this->assertEquals('žalčio', $asDeclensions['singular']['ko']);
      $this->assertEquals('žaltį', $asDeclensions['singular']['ką']);
      $this->assertEquals('žalčiui', $asDeclensions['singular']['kam']);
      $this->assertEquals('žaltyje', $asDeclensions['singular']['kame']);
      $this->assertEquals('žalčiu', $asDeclensions['singular']['kuo']);
      $this->assertEquals('žalty', $asDeclensions['singular']['o']);

      $this->assertEquals('žalčiai', $asDeclensions['plural']['kas']);
      $this->assertEquals('žalčių', $asDeclensions['plural']['ko']);
      $this->assertEquals('žalčius', $asDeclensions['plural']['ką']);
      $this->assertEquals('žalčiams', $asDeclensions['plural']['kam']);
      $this->assertEquals('žalčiuose', $asDeclensions['plural']['kame']);
      $this->assertEquals('žalčiais', $asDeclensions['plural']['kuo']);
      $this->assertEquals('žalčiai', $asDeclensions['plural']['o']);
  } 

  public function testTi() {
      $asDeclensions = $this->_ltNouns->generateDeclensions("pati");

      $this->assertInternalType('array', $asDeclensions);
      $this->assertInternalType('array', $asDeclensions['singular']);
      $this->assertInternalType('array', $asDeclensions['plural']);
      
      $this->assertEquals('pati', $asDeclensions['singular']['kas']);
      $this->assertEquals('pačios', $asDeclensions['singular']['ko']);
      $this->assertEquals('pačią', $asDeclensions['singular']['ką']);
      $this->assertEquals('pačiai', $asDeclensions['singular']['kam']);
      $this->assertEquals('pačioje', $asDeclensions['singular']['kame']);
      $this->assertEquals('pačia', $asDeclensions['singular']['kuo']);
      $this->assertEquals('pati', $asDeclensions['singular']['o']);

      $this->assertEquals('pačios', $asDeclensions['plural']['kas']);
      $this->assertEquals('pačių', $asDeclensions['plural']['ko']);
      $this->assertEquals('pačias', $asDeclensions['plural']['ką']);
      $this->assertEquals('pačioms', $asDeclensions['plural']['kam']);
      $this->assertEquals('pačiose', $asDeclensions['plural']['kame']);
      $this->assertEquals('pačiomis', $asDeclensions['plural']['kuo']);
      $this->assertEquals('pačios', $asDeclensions['plural']['o']);
  } 

  public function testVTis() {
      $asDeclensions = $this->_ltNouns->generateDeclensions("dantis");

      $this->assertInternalType('array', $asDeclensions);
      $this->assertInternalType('array', $asDeclensions['singular']);
      $this->assertInternalType('array', $asDeclensions['plural']);
      
      $this->assertEquals('dantis', $asDeclensions['singular']['kas']);
      $this->assertEquals('danties', $asDeclensions['singular']['ko']);
      $this->assertEquals('dantį', $asDeclensions['singular']['ką']);
      $this->assertEquals('dančiui', $asDeclensions['singular']['kam']);
      $this->assertEquals('dantyje', $asDeclensions['singular']['kame']);
      $this->assertEquals('dantimi', $asDeclensions['singular']['kuo']);
      $this->assertEquals('dantie', $asDeclensions['singular']['o']);

      $this->assertEquals('dantys', $asDeclensions['plural']['kas']);
      $this->assertEquals('dantų', $asDeclensions['plural']['ko']);
      $this->assertEquals('dantis', $asDeclensions['plural']['ką']);
      $this->assertEquals('dantims', $asDeclensions['plural']['kam']);
      $this->assertEquals('dantyse', $asDeclensions['plural']['kame']);
      $this->assertEquals('dantimis', $asDeclensions['plural']['kuo']);
      $this->assertEquals('dantys', $asDeclensions['plural']['o']);
  } 

  public function testVIs() {
      $asDeclensions = $this->_ltNouns->generateDeclensions("debesis");

      $this->assertInternalType('array', $asDeclensions);
      $this->assertInternalType('array', $asDeclensions['singular']);
      $this->assertInternalType('array', $asDeclensions['plural']);
      
      $this->assertEquals('debesis', $asDeclensions['singular']['kas']);
      $this->assertEquals('debesies', $asDeclensions['singular']['ko']);
      $this->assertEquals('debesį', $asDeclensions['singular']['ką']);
      $this->assertEquals('debesiui', $asDeclensions['singular']['kam']);
      $this->assertEquals('debesyje', $asDeclensions['singular']['kame']);
      $this->assertEquals('debesimi', $asDeclensions['singular']['kuo']);
      $this->assertEquals('debesie', $asDeclensions['singular']['o']);

      $this->assertEquals('debesys', $asDeclensions['plural']['kas']);
      $this->assertEquals('debesų', $asDeclensions['plural']['ko']);
      $this->assertEquals('debesis', $asDeclensions['plural']['ką']);
      $this->assertEquals('debesims', $asDeclensions['plural']['kam']);
      $this->assertEquals('debesyse', $asDeclensions['plural']['kame']);
      $this->assertEquals('debesimis', $asDeclensions['plural']['kuo']);
      $this->assertEquals('debesys', $asDeclensions['plural']['o']);
  } 

  public function testVUo() {
      $asDeclensions = $this->_ltNouns->generateDeclensions("vanduo");

      $this->assertInternalType('array', $asDeclensions);
      $this->assertInternalType('array', $asDeclensions['singular']);
      $this->assertInternalType('array', $asDeclensions['plural']);
      
      $this->assertEquals('vanduo', $asDeclensions['singular']['kas']);
      $this->assertEquals('vandens', $asDeclensions['singular']['ko']);
      $this->assertEquals('vandenį', $asDeclensions['singular']['ką']);
      $this->assertEquals('vandeniui', $asDeclensions['singular']['kam']);
      $this->assertEquals('vandenyje', $asDeclensions['singular']['kame']);
      $this->assertEquals('vandeniu', $asDeclensions['singular']['kuo']);
      $this->assertEquals('vandenie', $asDeclensions['singular']['o']);

      $this->assertEquals('vandenys', $asDeclensions['plural']['kas']);
      $this->assertEquals('vandenų', $asDeclensions['plural']['ko']);
      $this->assertEquals('vandenis', $asDeclensions['plural']['ką']);
      $this->assertEquals('vandenims', $asDeclensions['plural']['kam']);
      $this->assertEquals('vandenyse', $asDeclensions['plural']['kame']);
      $this->assertEquals('vandenimis', $asDeclensions['plural']['kuo']);
      $this->assertEquals('vandenys', $asDeclensions['plural']['o']);
  } 

  public function testMTis() {
      $asDeclensions = $this->_ltNouns->generateDeclensions("naktis");

      $this->assertInternalType('array', $asDeclensions);
      $this->assertInternalType('array', $asDeclensions['singular']);
      $this->assertInternalType('array', $asDeclensions['plural']);
      
      $this->assertEquals('naktis', $asDeclensions['singular']['kas']);
      $this->assertEquals('nakties', $asDeclensions['singular']['ko']);
      $this->assertEquals('naktį', $asDeclensions['singular']['ką']);
      $this->assertEquals('nakčiai', $asDeclensions['singular']['kam']);
      $this->assertEquals('naktyje', $asDeclensions['singular']['kame']);
      $this->assertEquals('naktimi', $asDeclensions['singular']['kuo']);
      $this->assertEquals('naktie', $asDeclensions['singular']['o']);

      $this->assertEquals('naktys', $asDeclensions['plural']['kas']);
      $this->assertEquals('naktų', $asDeclensions['plural']['ko']);
      $this->assertEquals('naktis', $asDeclensions['plural']['ką']);
      $this->assertEquals('naktims', $asDeclensions['plural']['kam']);
      $this->assertEquals('naktyse', $asDeclensions['plural']['kame']);
      $this->assertEquals('naktimis', $asDeclensions['plural']['kuo']);
      $this->assertEquals('naktys', $asDeclensions['plural']['o']);
  } 

  public function testMDis() {
      $asDeclensions = $this->_ltNouns->generateDeclensions("širdis");

      $this->assertInternalType('array', $asDeclensions);
      $this->assertInternalType('array', $asDeclensions['singular']);
      $this->assertInternalType('array', $asDeclensions['plural']);
      
      $this->assertEquals('širdis', $asDeclensions['singular']['kas']);
      $this->assertEquals('širdies', $asDeclensions['singular']['ko']);
      $this->assertEquals('širdį', $asDeclensions['singular']['ką']);
      $this->assertEquals('širdžiai', $asDeclensions['singular']['kam']);
      $this->assertEquals('širdyje', $asDeclensions['singular']['kame']);
      $this->assertEquals('širdimi', $asDeclensions['singular']['kuo']);
      $this->assertEquals('širdie', $asDeclensions['singular']['o']);

      $this->assertEquals('širdys', $asDeclensions['plural']['kas']);
      $this->assertEquals('širdžių', $asDeclensions['plural']['ko']);
      $this->assertEquals('širdis', $asDeclensions['plural']['ką']);
      $this->assertEquals('širdims', $asDeclensions['plural']['kam']);
      $this->assertEquals('širdyse', $asDeclensions['plural']['kame']);
      $this->assertEquals('širdimis', $asDeclensions['plural']['kuo']);
      $this->assertEquals('širdys', $asDeclensions['plural']['o']);
  } 
  
  public function testMIs() {
      $asDeclensions = $this->_ltNouns->generateDeclensions("krosnis");

      $this->assertInternalType('array', $asDeclensions);
      $this->assertInternalType('array', $asDeclensions['singular']);
      $this->assertInternalType('array', $asDeclensions['plural']);
      
      $this->assertEquals('krosnis', $asDeclensions['singular']['kas']);
      $this->assertEquals('krosnies', $asDeclensions['singular']['ko']);
      $this->assertEquals('krosnį', $asDeclensions['singular']['ką']);
      $this->assertEquals('krosniai', $asDeclensions['singular']['kam']);
      $this->assertEquals('krosnyje', $asDeclensions['singular']['kame']);
      $this->assertEquals('krosnimi', $asDeclensions['singular']['kuo']);
      $this->assertEquals('krosnie', $asDeclensions['singular']['o']);

      $this->assertEquals('krosnys', $asDeclensions['plural']['kas']);
      $this->assertEquals('krosnių', $asDeclensions['plural']['ko']);
      $this->assertEquals('krosnis', $asDeclensions['plural']['ką']);
      $this->assertEquals('krosnims', $asDeclensions['plural']['kam']);
      $this->assertEquals('krosnyse', $asDeclensions['plural']['kame']);
      $this->assertEquals('krosnimis', $asDeclensions['plural']['kuo']);
      $this->assertEquals('krosnys', $asDeclensions['plural']['o']);
  }   

  public function testMYs() {
      $asDeclensions = $this->_ltNouns->generateDeclensions("durys");

      $this->assertInternalType('array', $asDeclensions);
      $this->assertInternalType('array', $asDeclensions['singular']);
      $this->assertInternalType('array', $asDeclensions['plural']);
      
      $this->assertEquals('', $asDeclensions['singular']['kas']);
      $this->assertEquals('', $asDeclensions['singular']['ko']);
      $this->assertEquals('', $asDeclensions['singular']['ką']);
      $this->assertEquals('', $asDeclensions['singular']['kam']);
      $this->assertEquals('', $asDeclensions['singular']['kame']);
      $this->assertEquals('', $asDeclensions['singular']['kuo']);
      $this->assertEquals('', $asDeclensions['singular']['o']);

      $this->assertEquals('durys', $asDeclensions['plural']['kas']);
      $this->assertEquals('durų', $asDeclensions['plural']['ko']);
      $this->assertEquals('duris', $asDeclensions['plural']['ką']);
      $this->assertEquals('durims', $asDeclensions['plural']['kam']);
      $this->assertEquals('duryse', $asDeclensions['plural']['kame']);
      $this->assertEquals('durimis', $asDeclensions['plural']['kuo']);
      $this->assertEquals('durys', $asDeclensions['plural']['o']);
  }

  public function testMTys() {
      $asDeclensions = $this->_ltNouns->generateDeclensions("sultys");

      $this->assertInternalType('array', $asDeclensions);
      $this->assertInternalType('array', $asDeclensions['singular']);
      $this->assertInternalType('array', $asDeclensions['plural']);
      
      $this->assertEquals('', $asDeclensions['singular']['kas']);
      $this->assertEquals('', $asDeclensions['singular']['ko']);
      $this->assertEquals('', $asDeclensions['singular']['ką']);
      $this->assertEquals('', $asDeclensions['singular']['kam']);
      $this->assertEquals('', $asDeclensions['singular']['kame']);
      $this->assertEquals('', $asDeclensions['singular']['kuo']);
      $this->assertEquals('', $asDeclensions['singular']['o']);

      $this->assertEquals('sultys', $asDeclensions['plural']['kas']);
      $this->assertEquals('sulčių', $asDeclensions['plural']['ko']);
      $this->assertEquals('sultis', $asDeclensions['plural']['ką']);
      $this->assertEquals('sultims', $asDeclensions['plural']['kam']);
      $this->assertEquals('sultyse', $asDeclensions['plural']['kame']);
      $this->assertEquals('sultimis', $asDeclensions['plural']['kuo']);
      $this->assertEquals('sultys', $asDeclensions['plural']['o']);
  }

  public function testMUo() {
      $asDeclensions = $this->_ltNouns->generateDeclensions("sesuo");

      $this->assertInternalType('array', $asDeclensions);
      $this->assertInternalType('array', $asDeclensions['singular']);
      $this->assertInternalType('array', $asDeclensions['plural']);
      
      $this->assertEquals('sesuo', $asDeclensions['singular']['kas']);
      $this->assertEquals('sesers', $asDeclensions['singular']['ko']);
      $this->assertEquals('seserį', $asDeclensions['singular']['ką']);
      $this->assertEquals('seseriai', $asDeclensions['singular']['kam']);
      $this->assertEquals('seseryje', $asDeclensions['singular']['kame']);
      $this->assertEquals('seserimi', $asDeclensions['singular']['kuo']);
      $this->assertEquals('seserie', $asDeclensions['singular']['o']);

      $this->assertEquals('seserys', $asDeclensions['plural']['kas']);
      $this->assertEquals('seserų', $asDeclensions['plural']['ko']);
      $this->assertEquals('seseris', $asDeclensions['plural']['ką']);
      $this->assertEquals('seserims', $asDeclensions['plural']['kam']);
      $this->assertEquals('seseryse', $asDeclensions['plural']['kame']);
      $this->assertEquals('seserimis', $asDeclensions['plural']['kuo']);
      $this->assertEquals('seserys', $asDeclensions['plural']['o']);
  } 

  public function testME() {
      $asDeclensions = $this->_ltNouns->generateDeclensions("duktė");

      $this->assertInternalType('array', $asDeclensions);
      $this->assertInternalType('array', $asDeclensions['singular']);
      $this->assertInternalType('array', $asDeclensions['plural']);
      
      $this->assertEquals('duktė', $asDeclensions['singular']['kas']);
      $this->assertEquals('dukters', $asDeclensions['singular']['ko']);
      $this->assertEquals('dukterį', $asDeclensions['singular']['ką']);
      $this->assertEquals('dukteriai', $asDeclensions['singular']['kam']);
      $this->assertEquals('dukteryje', $asDeclensions['singular']['kame']);
      $this->assertEquals('dukterimi', $asDeclensions['singular']['kuo']);
      $this->assertEquals('dukterie', $asDeclensions['singular']['o']);

      $this->assertEquals('dukterys', $asDeclensions['plural']['kas']);
      $this->assertEquals('dukterų', $asDeclensions['plural']['ko']);
      $this->assertEquals('dukteris', $asDeclensions['plural']['ką']);
      $this->assertEquals('dukterims', $asDeclensions['plural']['kam']);
      $this->assertEquals('dukteryse', $asDeclensions['plural']['kame']);
      $this->assertEquals('dukterimis', $asDeclensions['plural']['kuo']);
      $this->assertEquals('dukterys', $asDeclensions['plural']['o']);
  } 

  public function testZmogus() {
      $asDeclensions = $this->_ltNouns->generateDeclensions("žmogus");

      $this->assertInternalType('array', $asDeclensions);
      $this->assertInternalType('array', $asDeclensions['singular']);
      $this->assertInternalType('array', $asDeclensions['plural']);
      
      $this->assertEquals('žmogus', $asDeclensions['singular']['kas']);
      $this->assertEquals('žmogaus', $asDeclensions['singular']['ko']);
      $this->assertEquals('žmogų', $asDeclensions['singular']['ką']);
      $this->assertEquals('žmogui', $asDeclensions['singular']['kam']);
      $this->assertEquals('žmoguje', $asDeclensions['singular']['kame']);
      $this->assertEquals('žmogumi', $asDeclensions['singular']['kuo']);
      $this->assertEquals('žmogaus', $asDeclensions['singular']['o']);

      $this->assertEquals('žmonės', $asDeclensions['plural']['kas']);
      $this->assertEquals('žmonių', $asDeclensions['plural']['ko']);
      $this->assertEquals('žmones', $asDeclensions['plural']['ką']);
      $this->assertEquals('žmonėms', $asDeclensions['plural']['kam']);
      $this->assertEquals('žmonėse', $asDeclensions['plural']['kame']);
      $this->assertEquals('žmonėmis', $asDeclensions['plural']['kuo']);
      $this->assertEquals('žmonės', $asDeclensions['plural']['o']);
  } 


  public function testSuo() {
      $asDeclensions = $this->_ltNouns->generateDeclensions("šuo");

      $this->assertInternalType('array', $asDeclensions);
      $this->assertInternalType('array', $asDeclensions['singular']);
      $this->assertInternalType('array', $asDeclensions['plural']);
      
      $this->assertEquals('šuo', $asDeclensions['singular']['kas']);
      $this->assertEquals('šuns', $asDeclensions['singular']['ko']);
      $this->assertEquals('šunį', $asDeclensions['singular']['ką']);
      $this->assertEquals('šuniui', $asDeclensions['singular']['kam']);
      $this->assertEquals('šunyje', $asDeclensions['singular']['kame']);
      $this->assertEquals('šuniu', $asDeclensions['singular']['kuo']);
      $this->assertEquals('šunie', $asDeclensions['singular']['o']);

      $this->assertEquals('šunys', $asDeclensions['plural']['kas']);
      $this->assertEquals('šunų', $asDeclensions['plural']['ko']);
      $this->assertEquals('šunis', $asDeclensions['plural']['ką']);
      $this->assertEquals('šunims', $asDeclensions['plural']['kam']);
      $this->assertEquals('šunyse', $asDeclensions['plural']['kame']);
      $this->assertEquals('šunimis', $asDeclensions['plural']['kuo']);
      $this->assertEquals('šunys', $asDeclensions['plural']['o']);
  } 


  public function testMenuo() {
      $asDeclensions = $this->_ltNouns->generateDeclensions("mėnuo");

      $this->assertInternalType('array', $asDeclensions);
      $this->assertInternalType('array', $asDeclensions['singular']);
      $this->assertInternalType('array', $asDeclensions['plural']);
      
      $this->assertEquals('mėnuo', $asDeclensions['singular']['kas']);
      $this->assertEquals('mėnesio', $asDeclensions['singular']['ko']);
      $this->assertEquals('mėnesį', $asDeclensions['singular']['ką']);
      $this->assertEquals('mėnesiui', $asDeclensions['singular']['kam']);
      $this->assertEquals('mėnesyje', $asDeclensions['singular']['kame']);
      $this->assertEquals('mėnesiu', $asDeclensions['singular']['kuo']);
      $this->assertEquals('mėnesi', $asDeclensions['singular']['o']);

      $this->assertEquals('mėnesiai', $asDeclensions['plural']['kas']);
      $this->assertEquals('mėnesių', $asDeclensions['plural']['ko']);
      $this->assertEquals('mėnesius', $asDeclensions['plural']['ką']);
      $this->assertEquals('mėnesiams', $asDeclensions['plural']['kam']);
      $this->assertEquals('mėnesiuose', $asDeclensions['plural']['kame']);
      $this->assertEquals('mėnesiais', $asDeclensions['plural']['kuo']);
      $this->assertEquals('mėnesiai', $asDeclensions['plural']['o']);
  } 

  public function testPetys() {
      $asDeclensions = $this->_ltNouns->generateDeclensions("petys");

      $this->assertInternalType('array', $asDeclensions);
      $this->assertInternalType('array', $asDeclensions['singular']);
      $this->assertInternalType('array', $asDeclensions['plural']);
      
      $this->assertEquals('petys', $asDeclensions['singular']['kas']);
      $this->assertEquals('peties', $asDeclensions['singular']['ko']);
      $this->assertEquals('petį', $asDeclensions['singular']['ką']);
      $this->assertEquals('pečiui', $asDeclensions['singular']['kam']);
      $this->assertEquals('petyje', $asDeclensions['singular']['kame']);
      $this->assertEquals('petimi / pečiu', $asDeclensions['singular']['kuo']);
      $this->assertEquals('pety', $asDeclensions['singular']['o']);

      $this->assertEquals('pečiai', $asDeclensions['plural']['kas']);
      $this->assertEquals('pečių', $asDeclensions['plural']['ko']);
      $this->assertEquals('pečius', $asDeclensions['plural']['ką']);
      $this->assertEquals('pečiams', $asDeclensions['plural']['kam']);
      $this->assertEquals('pečiuose', $asDeclensions['plural']['kame']);
      $this->assertEquals('pečiais', $asDeclensions['plural']['kuo']);
      $this->assertEquals('pečiai', $asDeclensions['plural']['o']);
  } 

  public function testVIsK() {
      $asDeclensions = $this->_ltNouns->generateDeclensions("ausis");

      $this->assertInternalType('array', $asDeclensions);
      $this->assertInternalType('array', $asDeclensions['singular']);
      $this->assertInternalType('array', $asDeclensions['plural']);
      
      $this->assertEquals('ausis', $asDeclensions['singular']['kas']);
      $this->assertEquals('ausies', $asDeclensions['singular']['ko']);
      $this->assertEquals('ausį', $asDeclensions['singular']['ką']);
      $this->assertEquals('ausiai', $asDeclensions['singular']['kam']);
      $this->assertEquals('ausyje', $asDeclensions['singular']['kame']);
      $this->assertEquals('ausimi', $asDeclensions['singular']['kuo']);
      $this->assertEquals('ausie', $asDeclensions['singular']['o']);

      $this->assertEquals('ausys', $asDeclensions['plural']['kas']);
      $this->assertEquals('ausų', $asDeclensions['plural']['ko']);
      $this->assertEquals('ausis', $asDeclensions['plural']['ką']);
      $this->assertEquals('ausims', $asDeclensions['plural']['kam']);
      $this->assertEquals('ausyse', $asDeclensions['plural']['kame']);
      $this->assertEquals('ausimis', $asDeclensions['plural']['kuo']);
      $this->assertEquals('ausys', $asDeclensions['plural']['o']);
  } 
}

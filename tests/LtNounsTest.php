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
  
}


<?php

use PHPUnit\Framework\TestCase;

/**
*  Corresponding Class to test Base class
*
*  @author Fabrice Yopa
*/
class ApiTest extends TestCase {

    private $api = null;
    private $key = '';

    public function setUp()
    {
        $this->api = new \Diool\Features\Request($this->key);
    }

    /**
  * Just check if the Base has no syntax error
  *
  * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
  * any typo before you even use this library in a real project.
  *
  */
  public function testIsThereAnySyntaxError(){
	$this->assertTrue(is_object($this->api));
	unset($var);
  }

  public function testReturnBalanceObject(){
      $response = $this->api->getBalance();
      $this->assertInstanceOf(\Diool\Response\ErrorResponse::class, $response);
  }


  
}
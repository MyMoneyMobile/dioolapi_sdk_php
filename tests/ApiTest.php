<?php

use PHPUnit\Framework\TestCase;

/**
*  Corresponding Class to test Base class
*
*  @author Fabrice Yopa
*/
class ApiTest extends TestCase {

    private $api = null;
    private $key = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczovL215bW9uZXltb2JpbGUuZXUuYXV0aDAuY29tLyIsInN1YiI6IldkZmZrSDFKZ1lGVGFNMXg4VjNabHZaaGZZb0UzWnRVQGNsaWVudHMiLCJhdWQiOiJodHRwczovL2NvcmUuZGlvb2wuY29tL2FwaS92MS8iLCJpYXQiOjE1MTE4Njk0ODMsImV4cCI6MTU0MzQyNjQzNSwic2NvcGUiOiJhdXRoMHw1OWNlNTM2ODg5OTM3MDBjNjA3MmZiZmYgc3VwZXJfbWVyY2hhbnQgZmFicmljZV95b3BhIGZhYnJpY2VfeW9wYUB5YWhvby5mciBNT05FVEFSWV9BQ0NPVU5UIEFQSV9UUkFOU0ZFUl9BSVJUSU1FIEFQSV9QQVlNRU5UIEFQSV9GVU5EU19UUkFOU0ZFUiIsImd0eSI6ImNsaWVudC1jcmVkZW50aWFscyJ9.pBFfD3dJT2U-WFDhzZzQIIKMt07_Wwk9kgdikvcR548';

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
      $this->assertInstanceOf(\Diool\Response\Balance::class, $response);
  }


  
}
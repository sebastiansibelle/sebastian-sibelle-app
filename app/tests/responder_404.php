<?php

class Responder404 extends WebTestCase 
{
	function setUp()
	{
		$this->get(Request::pnd() . '/whatyoutalkinaboutwillis');
	}

	function tearDown()
	{
		// whatever bro
	}
	
	function test404() 
	{
		$this->assertResponse(404);
	}
	
}

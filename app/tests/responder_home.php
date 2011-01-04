<?php

class ResponderHome extends WebTestCase 
{
	function setUp()
	{
		$this->get(Request::pnd() . HomeResponder::base_url());
	}

	function tearDown()
	{
		// whatever bro
	}
	
	function testHomepage() 
	{
		$this->assertResponse(200);
		$this->assertLink('Mason');
		$this->assertLink('Realised by Squareweave');
	}
	
}

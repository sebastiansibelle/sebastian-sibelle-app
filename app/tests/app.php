<?php
// To enable tests, set 
// Config::set('enable_tests', TRUE);
// in the config.php

class AppTests extends TestSuite 
{
	function __construct() {
		parent::__construct();

		// add in shuriken tests
		$this->addFile(FILE_ROOT . '/app/shuriken/tests/shuriken.php');

		$this->addFile(dirname(__FILE__) . '/responders.php');
	}
}

<?php
class AppTests extends TestSuite 
{
	function __construct() {
		parent::__construct();

		// add in shuriken tests
		$this->addFile(FILE_ROOT . '/app/shuriken/tests/shuriken.php');

		$this->addFile(dirname(__FILE__) . '/responders.php');
	}
}

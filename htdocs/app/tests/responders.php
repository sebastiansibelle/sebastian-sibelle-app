<?php
class RespondersTests extends TestSuite 
{
	function __construct() {
		parent::__construct('Responders tests');
		$this->addFile(dirname(__FILE__) . '/responder_home.php');
		$this->addFile(dirname(__FILE__) . '/responder_404.php');
	}
}

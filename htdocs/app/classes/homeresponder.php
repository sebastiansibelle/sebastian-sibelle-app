<?php
/**
 * Responder implementer.
 * $Id$
 */

class HomeResponder extends Responder
{
	public function respond() {

		$this->display('home/home');
		
		return TRUE;
	}
}


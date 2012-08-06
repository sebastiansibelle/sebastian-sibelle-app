<?php
/**
 * @file
 * @package ApplicationName
 * @class HomeResponder
 * @brief The default home responder for this application
 *
 * The HomeResponder is a dummy responder which the application will default to if no bootstrap pass to modules can be found and no application specific home responder is present. It will respond with an error message to indicate that an app specific home responder should be created.
 * 
 * @author Luke Giuliani
 * @version master
 * @copyright Squareweave Pty Ltd.
 */
class HomeResponder extends Responder
{
	/** 
	 * Handles RESTful requests for the home responder.
	 *
	 * Always displays the template at home/home
	 *
	 * @return bool TRUE
	 */
	public function respond() {
		// Display the template at home/home.php
		$this->display('home/home');
		return TRUE;
	}
}


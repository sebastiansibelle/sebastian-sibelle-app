<?php
/**
 * @file
 * @package ApplicationName
 * @class AdminResponder
 * @brief The abstraction of an admin responder.
 *
 * This class should be extended for all admin responder classes. 
 *
 * @author Luke Giuliani
 * @version master
 * @copyright Squareweave Pty Ltd.
 */
abstract class AdminResponder extends RestResponder
{
	/**
	 * Require an admin user.
	 * 
	 * Checks for already logged in users in session data.
	 * Forces HTTPS for admin if argument provided.
	 * There are two instances of requiring admin: 
	 * 	- The first is normal page call.
	 *  - The second is a file upload via swf. 
	 * In the latter case, the session id should also be uploaded via post.
	 * So set the session using the provided data.
	 * 
	 */
	public function require_admin($force_https = FALSE)
	{
		// Check for the session id
		if (Request::post('session_id') != null)
		{
			Session::load_session(Request::post('session_id'));
		}

		// Force HTTPS protocol for Admin.
		if($force_https === TRUE)
		{
			Response::force_https();
		}
	
		// Check that the user is an Admin
		if ( User::current()->admin != 1 )
		{
			if (Request::post('ajax') || Request::get('ajax')) 
			{
				$ar = new AjaxResponse(FALSE, "You need to be logged in as an admin to do that.", 401);
				$ar->out();
			} else 
			{
				Session::error("You need to be logged in to access the admin panel.");
				Response::redirect(LoginResponder::base_url());
			}
			
			die();
		} else 
		{
			return;
		}
	}

	/** 
	 * Handles RESTful requests.
	 *
	 * Checks nonces for POST requests and then directs to the appropriate handler depending on content type.
	 * Requires that the user be an admin.
	 * Sets the Theme to the admin theme.
	 * Adds tha admin url to javascript.
	 * 
	 * @return The appropriate response handler for the HTTP Request Method and Content Type.
	 */
	public function respond() 
	{
		// Always reset the cross login nonces. I'm too paranoid otherwise :)
		// Response::reset_nonce('cross_auth');
		$this->require_admin();
		Theme::type(Theme::ADMIN);
		
		Response::add_to_javascript('admin', array('url' => AdminResponder::base_url()));
		return parent::respond();
	}
	
	/**
	 * The base url for the responder.
	 *
	 * To access the contact form in a browser you will need to navigate to this address.
	 * @return The base url for this responder. 
	 */
	public static function base_url() 
	{
		return parent::base_url() . 'admin/';
	}
}


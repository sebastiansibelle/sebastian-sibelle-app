<?php
/**
 * @file
 * @package ApplicationName
 * @class Bootstrap
 * @brief Runs the Shuriken system-wide setup for a page load.
 *
 * Sets the system up for PHP autoload, intialises the Shuriken modules, and Database.
 * Runs the Shuriken installer if it is required.
 * Sets up HTTP compression of HTML output.
 * Checks for design 404s to save effort.
 * Redirects the request to a Responder 
 * And if no Responder is found generates a 404 error message.
 * 
 * Note that there is the definition of Bootstrap at the bottom of this file, for when applications don't specify their own Bootstrap.
 * 
 * @author Luke Giuliani
 * @version master
 * @copyright Squareweave Pty Ltd.
 */
class Bootstrap extends ShurikenBootstrap
{
	/**
	 * The application name. To fill in.
	 */
	const APP_NAME = 'Sebastian Sibelle';

	/**
	 * The release tag.
	 */
	const RELEASE = 'master';

	/**
	 * Initialise a response.
	 *
	 * Set the response configs here.
	 *
	 * This function should always call the parent intitialise_response to ensure that all the following are initialised:
	 * The Database and all database dependent modules which are requires for a response.
	 * Including:
	 * 	- Settings
	 * 	- Session
	 * 	- Boltons
	 * 	- Facebook
	 * 	- Crons
	 * 	- Theme
	 * The Upgrader if the database requires an upgrade.
	 */
	public static function initialise_response()
	{
		// Config::set('typekit_id', 'some typekit id');
		// Config::set('ga_id', 'some_ga_id');
		
		return parent::initialise_response();
	}

	/**
	 * Pass of response to the appropriate module.
	 *
	 * You can specify priority responders to pass to first.
	 *
	 *  We only use handlers up to 2 parts long for now.
	 *	E.g.  
	 *	 - admin/products -> is a handler
	 *	 - admin -> is a handler
	 *	 - admin/products/edit is not a handler
	 *	
	 * @return bool True if the we got a successful response, otherwise false.
	 */
	public static function pass_to_module()
	{
		$flag = parent::pass_to_module();

		// Pass to the PageResponder
		// if ( ! $flag ) {
		// 	$r = new PageResponder();
		// 	$flag = $r->respond();
		// }
		
		return $flag;
	}
}
<?php
/**
 * @file
 * @package Shuriken
 * @class Installer
 * @brief The application specific installer for Shuriken applications.
 *
 * Installs Shuriken application by initializing the database and writing config and .htaccess files.
 * 
 * @author Luke Giuliani
 * @version master
 * @copyright Squareweave Pty Ltd.
 */
class Installer extends ShurikenInstaller
{
	/**
	 * Loads the application specific base SQL from the file at /app/sql/base.sql.
	 */
	public static function post_db_init()
	{
		$sql = file_get_contents(FILE_ROOT . '/app/sql/base.sql');
		DB::exec($sql);
	}
	
	/**
	 * Redirects the application after an install.
	 *
	 * Sets the active app theme to the default theme and then redirects the application to the home responder.
	 */
	public static function post_install_redirect()
	{
		Settings::set('active_app_theme', 'app:default');
		Response::redirect(HomeResponder::base_url());
	}
	
}

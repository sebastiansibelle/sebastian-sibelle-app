<?php
/**
 * Installer.
 * $Id$
 */

class Installer extends ShurikenInstaller
{
	public static function post_db_init()
	{
		
		// $sql = file_get_contents(FILE_ROOT . '/app/sql/base.sql');
		// DB::exec($sql);
	}
	
	public static function post_install_redirect()
	{
		Settings::set('active_app_theme', 'app:default');

		// Response::redirect(HomeResponder::base_url());
	}
	
}

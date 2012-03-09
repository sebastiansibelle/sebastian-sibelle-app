<?php

class Bootstrap extends ShurikenBootstrap
{
	const APP_NAME = 'ApplicationName';
	const RELEASE = 'trunk';

	public static function initialise_response()
	{
		// Config::set('typekit_id', 'some typekit id');
		// Config::set('ga_id', 'some_ga_id');
		
		return parent::initialise_response();
	}

	public static function pass_to_module()
	{
		$flag = parent::pass_to_module();
	   
		// if ( ! $flag ) {
		// 	$r = new PageResponder();
		// 	$flag = $r->respond();
		// }
		//    
		return $flag;
	}
}
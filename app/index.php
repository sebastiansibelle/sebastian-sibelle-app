<?php 
/**
 * Okay before i was just kidding. Now I'm serious. Lets start APP :)
 */
if ( !defined( 'FILE_ROOT' ) ) 
{
	define( 'FILE_ROOT', realpath(dirname( __FILE__ ) . '/../') );
}

include( FILE_ROOT . '/app/shuriken/classes/bootstrap.php' );

Bootstrap::go();
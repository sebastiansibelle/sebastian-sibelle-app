<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Project Name</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="application-name" content="<?php EF::v(Bootstrap::APP_NAME) ?>">
	<meta name="generator" content="Shuriken">
	<meta name="author" content="Squareweave Pty Ltd, $Id$">

	<link rel="shortcut icon" href="<?php ET::image('ico/favicon.ico'); ?>">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php ET::image('ico/apple_114x114.png'); ?>">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php ET::image('ico/apple_72x72.png'); ?>">
	<link rel="apple-touch-icon-precomposed" href="<?php ET::image('ico/apple_57x57.png'); ?>">

	<?php ET::minless('bootstrap/less/bootstrap'); ?>
	<?php ET::minless('global'); ?>
	<?php ET::minless(); ?>

	<?php ET::style('ss-everything/ss-everything'); ?>

	<?php ET::minstyle('fontello/fontello'); ?>
	<?php ET::minstyle(); ?>	
	<!--[if IE ]><?php ET::style('ie'); ?><![endif]-->
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->	
</head>

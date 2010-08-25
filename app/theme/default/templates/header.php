<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta name="generator" content="Shuriken">
	<meta name="Author" content="Squareweave Pty Ltd">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="version" content="$Id$">

	<title>printitbiggar.com</title>
	
	<!-- css first -->
	<?php ET::style('library/ericMyerReset'); ?>

	<!--blueprint-->
	<?php ET::style('blueprint/screen'); ?>
	<link rel="stylesheet" href="<?php echo Theme::design(Theme::SHURIKEN) ?>/lib/blueprint/print.css" type="text/css" media="print"> 
	<!--[if IE]><?php ET::style('blueprint/ie'); ?><![endif]-->
	<!--/blueprint-->

	<link rel="stylesheet" type="text/css" href="<?php echo Theme::design() ?>/css/global.css" media="screen, projection">		

	<!-- IE Styles -->
	<!--[if IE ]><?php ET::style('ie/generalfailure'); ?><![endif]-->
	<!--[if lte IE 6]><?php ET::style('ie/6failshard'); ?><![endif]-->
	<!--[if IE 7]><?php ET::style('ie/7fails'); ?><![endif]-->	
	<!--[if gt IE 7]><?php ET::style('ie/futurefailure'); ?><![endif]-->

	<!-- now js -->
	<?php ET::script('jquery/jquery.min') ?>
	<?php ET::script('jquery/jquery.form') ?>

	<?php ET::script('jquery-ui/jquery-ui.min'); ?>
	<?php ET::script('jquery.quicksearch/jquery.quicksearch'); ?>
	<?php ET::script('jquery.hotkeys/jquery.hotkeys'); ?>

		<!-- include uploadify -->
		<?php ET::script('swfobject/swfobject'); ?>
		<?php ET::script('uploadify/jquery.uploadify.min'); ?>
		<?php ET::style('uploadify/uploadify'); ?>
		
	<!-- rmit_at javascript -->
	<?php ET::script('app') ?>

	<script type="text/javascript">
		var app = $.extend(true, app, <?php echo Response::get_javascript(); ?>);
	</script>

		<!-- finally, toys -->
		<script src="<?php echo Theme::design() ?>/scripts/toys.js" type="text/javascript" charset="utf-8"></script>

</head>

<body class='<?php ET::bc_str(); ?>'>

	<div class="outer_wrap">
		<div class="wrap">
			<div class="squeeze">

			<div class="spinner" id="spinner"></div>

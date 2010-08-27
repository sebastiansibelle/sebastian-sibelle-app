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
	<?php ET::style('sw.resetstyle/reset'); ?>

	<!--blueprint-->
	<?php ET::style('sw.blueprint/screen'); ?>
	<link rel="stylesheet" href="<?php echo Theme::design(Theme::SHURIKEN) ?>/vendor/sw.blueprint/print.css" type="text/css" media="print"> 
	<!--[if IE]><?php ET::style('sw.blueprint/ie'); ?><![endif]-->
	<!--/blueprint-->

	<?php ET::style('global'); ?>

	<!-- IE Styles -->
	<!--[if IE ]><?php ET::style('ie/generalfailure'); ?><![endif]-->
	<!--[if lte IE 6]><?php ET::style('ie/6failshard'); ?><![endif]-->
	<!--[if IE 7]><?php ET::style('ie/7fails'); ?><![endif]-->	
	<!--[if gt IE 7]><?php ET::style('ie/futurefailure'); ?><![endif]-->

	<!-- now js -->
	<?php ET::script('jquery/jquery-1.4.2.min') ?>

	<?php ET::script('jquery-ui/js/jquery-ui-1.8.4.min'); ?>

		<!-- include uploadify -->
		<?php ET::script('swfobject/swfobject'); ?>
		<?php ET::script('uploadify/jquery.uploadify.v2.1.0.min'); ?>
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

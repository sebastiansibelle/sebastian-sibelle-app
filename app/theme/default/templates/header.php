<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta name="generator" content="Shuriken">
	<meta name="Author" content="Squareweave Pty Ltd">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="version" content="$Id$">

	<title>Shuriken</title>
	
	<!-- css first -->
	<?php ET::style('sw.resetstyle/reset'); ?>

	<!--blueprint-->
	<?php ET::style('sw.blueprint/screen'); ?>
	<link rel="stylesheet" href="<?php echo Theme::design(Theme::SHURIKEN) ?>/vendor/sw.blueprint/print.css" type="text/css" media="print"> 
	<!--[if IE]><?php ET::style('sw.blueprint/ie'); ?><![endif]-->
	<!--/blueprint-->

	<!-- now theme styles -->
	<?php ET::style('layout'); ?>
	<?php ET::style('global'); ?>

	<!-- theme specific IE Styles -->
	<!--[if IE ]><?php ET::style('ie/generalfailure'); ?><![endif]-->
	<!--[if lte IE 6]><?php ET::style('ie/6failshard'); ?><![endif]-->
	<!--[if IE 7]><?php ET::style('ie/7fails'); ?><![endif]-->	
	<!--[if gt IE 7]><?php ET::style('ie/futurefailure'); ?><![endif]-->

	<!-- Javascript -->
	<!-- vendor / library js -->
	<?php ET::script('jquery/jquery-1.4.2.min') ?>
	<?php ET::script('jquery-ui/js/jquery-ui-1.8.4.min'); ?>

	<!-- app javascript -->
	<?php ET::script('app') ?>
	<script type="text/javascript">var app = $.extend(true, app, <?php echo Response::get_javascript(); ?>);</script>

	<!-- finally, theme js -->
	<?php ET::script('toys') ?>

</head>

<body class='<?php ET::bc_str(); ?>'>

<div class="header">
	<div class="container">
		<h1 class="logo" id="logo"><a href="<?php EF::dest('home') ?>">I'm a logo</a></h1>
		<div class="user user_logged_in">
			<h4><a href="#"><?php EF::t(Prototype::random_name()) ?></a></h4>
			<p>
				<a href="<?php EF::dest('login') ?>">Log out &raquo;</a>
				<a href="<?php EF::dest('user') ?>edit">Control panel <span>|</span></a>
			</p>
		</div><!--user-->
	</div>
</div><!--header-->


<?php if (Session::has_messages() || Session::has_errors()): ?>
<div class="session_messages js_session_messages">
	<div class="bottom"></div>
	<a class="js_close_session_messages x"><span>Close messages</span></a>
	<?php if (Session::has_messages()): ?>
		<div class="messages">
			<?php foreach(Session::get_messages() as $msg): ?>
				<div class="message"><?php EF::t($msg) ?></div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
	<?php if (Session::has_errors()):?>
		<div class="errors">
			<?php foreach(Session::get_errors() as $msg): ?>
				<div class="error"><?php EF::t($msg) ?></div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
</div>
<?php endif; ?>


<div class="outer_wrap">
	<div class="wrap">
		<div class="inner_wrap">


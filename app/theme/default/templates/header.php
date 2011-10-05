<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8">
  <title>Project Name</title>
	<meta name="application-name" content="Project Name">
	<meta name="generator" content="Shuriken">
	<meta name="author" content="Squareweave Pty Ltd, $Id$">
	
	<link rel="shortcut icon" type="image/x-icon" href="<?php ET::image('ico/favicon.ico'); ?>">	
	
	<link rel="apple-touch-icon" href="<?php ET::image('ico/apple_57x57.png'); ?>">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php ET::image('ico/apple_72x72.png'); ?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php ET::image('ico/apple_114x114.png'); ?>">	

	<!-- include bootstrap first -->
	<?php ET::less('bootstrap/lib/bootstrap') ?>

	<!-- our styles -->
	<?php ET::less('global'); ?>

	<!-- theme specific IE Styles -->
	<!--[if IE ]><?php ET::style('ie/generalfailure'); ?><![endif]-->
	<!--[if lte IE 6]><?php ET::style('ie/6failshard'); ?><![endif]-->
	<!--[if IE 7]><?php ET::style('ie/7fails'); ?><![endif]-->	
	<!--[if gt IE 7]><?php ET::style('ie/futurefailure'); ?><![endif]-->

  <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->	

	<!-- less script -->
	<?php ET::script('less.js/dist/less-1.1.4') ?>

	<!-- Javascript -->
	<!-- vendor / library js -->
	<?php ET::script('jquery/jquery-1.4.2.min') ?>
	<?php ET::script('jquery-ui/js/jquery-ui-1.8.4.min'); ?>

	<!-- app javascript -->
	<?php ET::script('app') ?>
	<script type="text/javascript">var app = $.extend(true, app, <?php EF::raw(Response::get_javascript()); ?>);</script>

	<!-- finally, theme js -->
	<?php ET::script('toys') ?>

</head>

<body class='<?php ET::bc_str(); ?>'>


<!--
Here are some standard header elements guiz. LOL.

<a href="<?php EF::dest('home') ?>">Home</a>
<a href="<?php EF::dest('login') ?>">Log out &raquo;</a>

<?php if (Session::has_messages() || Session::has_errors()): ?>

	<?php if (Session::has_messages()): ?>
		<?php foreach(Session::get_messages() as $msg): ?>
			<?php EF::raw($msg) ?>
		<?php endforeach; ?>

	<?php endif; ?>
	<?php if (Session::has_errors()):?>
			<?php foreach(Session::get_errors() as $msg): ?>
				<?php EF::raw($msg) ?>
			<?php endforeach; ?>
	<?php endif; ?>

<?php endif; ?>

-->

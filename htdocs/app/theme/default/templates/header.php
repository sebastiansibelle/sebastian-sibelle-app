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
	<?php ET::minless('bootstrap/less/responsive'); ?>
	<?php ET::minless('global'); ?>
	<?php ET::minless('responsive'); ?>
	<?php ET::minless(); ?>

	<?php ET::minstyle('fontello/fontello'); ?>
	<?php ET::minstyle(); ?>	

	<!--[if IE ]><?php ET::style('ie'); ?><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->	

</head>

<body class='<?php ET::bc_str(); ?>'>


<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="#">Project name</a>
      <div class="nav-collapse">
        <ul class="nav">
          <li class="active"><a href="#"><i class="icon icon-home"></i> Home</a></li>
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li class="nav-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-search pull-left" action="">
          <input type="text" class="search-query span2" placeholder="Search">
        </form>
        <ul class="nav pull-right">
          <li><a href="#">Link</a></li>
          <li class="divider-vertical"></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.nav-collapse -->
    </div>
  </div><!-- /navbar-inner -->
</div><!-- /navbar -->

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

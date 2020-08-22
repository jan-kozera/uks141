<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>UKS 141 Warszawa - Klub piłkarski z Grochowa</title>

    <link href="<?php echo THEME_URL; ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Arbutus+Slab&family=Titillium+Web:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link type="text/css" href="<?php echo THEME_URL; ?>css/font-awesome.css" rel="stylesheet">
	<link href="<?php echo THEME_URL; ?>favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link type="text/css" href="<?php echo THEME_URL; ?>css/fonts.css" rel="stylesheet">
    <link type="text/css" href="<?php echo THEME_URL; ?>css/style.css" rel="stylesheet">
	  <?php wp_head(); ?> 
  </head>
	<body <?php body_class();?> >
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&autoLogAppEvents=1&version=v7.0&appId=2627348814206809" nonce="3KXWoLVa"></script>	<header id="header" class="fixed-top">
		<div class="white">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-3 top-bar">
						<ul class="mr-auto">
							<li><a target="_blank" href="https://www.facebook.com/Uks141Warszawa/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
							<li><a target="_blank" href="https://www.youtube.com/channel/UCXSgFFyMkndZePAPj1KN--g"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
							<li><a target="_blank" href="https://www.instagram.com/uks141/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="col-md-8 col-sm-9 top-bar">
						<ul class="ml-auto text-right">
							<li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:690513060">+48 690 513 060</a> <a href="tel:518238080">+48 518 238 080</a></li>
							<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:klub@uks141.pl">klub@uks141.pl</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-toggleable-sm">
		  <div class="container">
		   <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<i class="burger fa fa-bars"></i>
		  </button>
			  <a class="navbar-brand logo" href="<?php echo esc_url(home_url('/')); ?>">
				  <img src="<?php echo THEME_URL; ?>img/logo.png" class="img-fluid" alt="">
				  <img src="<?php echo THEME_URL; ?>img/certyfikat.png" alt="" class="pzpn img-fluid">
				</a>
		  <?php 
			wp_nav_menu( array(
			  'menu' => 'Primary menu',
			  'theme_location'    => 'primary',
			  'depth' => 3,
			  'container' => 'div',
			  'container_class' => 'collapse navbar-collapse',
			  'container_id'      => 'navbarCollapse',
			  'menu_class' => 'navbar-nav ml-auto',
			  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			  'walker' => new wp_bootstrap_navwalker())
			);
			?>
			  </div>
			</nav>   
		</header>
		<div class="intro"></div>
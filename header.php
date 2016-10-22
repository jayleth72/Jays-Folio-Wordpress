<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jayleth
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<!-- Bootstrap core CSS -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

<!-- FontAwesome Icons -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>


<?php wp_head(); ?>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'jayleth' ); ?></a>

	<!-- HEADER
			====================================================================================== -->
			<header id="site-header" role="banner">

					<div class="navbar-wrapper">

							<!-- fixed black navbar fixed at top of page -->
							<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">

									<!-- contain logo and navigation in center of screen -->
									<div class="container">
											<div class="navbar-header">
													<!-- creates sandwich buttton when reduce screen size -->
													<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
															<!-- tell visual impaired users the function of button -->
															<span class="sr-only">Toggle navigation</span>
															<!-- create bars on sandwich button -->
															<span class="icon-bar"></span>
															<span class="icon-bar"></span>
															<span class="icon-bar"></span>
													</button>
													<a class="pull-left brand-font" href="/."><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" class="img-responsive" alt="Jay Letheby"></a>
											</div><!-- navbar-header -->

											<?php
													wp_nav_menu ( array(

															'theme_location'   => 'primary',
															'container'				 => 'nav',
															'container_class'  => 'navbar-collapse collapse',
															'menu_class'       => 'nav navbar-nav navbar-right'
													));

											 ?>

									</div><!-- container -->

							</div><!-- navbar -->

					</div><!-- navbar-wrapper -->
			</header>

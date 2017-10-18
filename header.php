<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bestseller_Bootcamp
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css">
	<link href="<?php bloginfo('stylesheet_directory'); ?>/https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

	<?php wp_head(); ?>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bestsellerbootcamp' ); ?></a>

	<!-- HEADER -->
	<header class="site-header" role="banner">
		<!-- NAVBAR -->
		<div class="navbar-wrapper">
			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.svg" class="logo" alt="Bestseller Bootcamp"><span class="hidden-xs">Bestseller Bootcamp</span></a>
					</div><!--navbar header-->

					<?php
						wp_nav_menu( array(
							
							'theme_location'	=> 'menu-1',
							'container'			=> 'nav',
							'container_class'	=> 'navbar-collapse collapse',
							'menu_class'		=> 'list-unstyled list-inline nav navbar-nav navbar-right'
							
						) );
					?>
				</div><!-- container -->
			</div><!-- navbar -->
		</div><!-- navbar-wrapper -->
	</header>

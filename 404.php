<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bestseller_Bootcamp
 */

get_header(); ?>

	<section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">	
		<h1 class="page-title">404</h1>		
	</section>	

	<div class="container not-found">
		<div id="primary " class="row">
				<div class="section-header">
						<h2>Sorry, we can't find the page you were looking for.</h2>
						<a href="<?php bloginfo('url'); ?>" class="btn btn-success"><?php bloginfo('name'); ?> Home</a>
				</div><!--.section-header-->
		</div><!--#primary-->
	</div><!--.container-->

<?php
get_footer();

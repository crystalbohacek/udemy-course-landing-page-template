<?php

/*
	Template Name: Home
*/


get_header(); ?>

<!-- import sections -->

<?php get_template_part('partials/content', 'hero'); ?>
<?php get_template_part('partials/content', 'optin'); ?>
<?php get_template_part('partials/content', 'boost'); ?>
<?php get_template_part('partials/content', 'skills'); ?>
<?php get_template_part('partials/content', 'features'); ?>
<?php get_template_part('partials/content', 'instructor'); ?>
<?php get_template_part('partials/content', 'finalproject'); ?>
<?php get_template_part('partials/content', 'video'); ?>
<?php get_template_part('partials/content', 'testimonials'); ?>


<?php get_footer(); ?>

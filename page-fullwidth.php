<?php 
/* Template Name: Full-width Template */

	$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

	get_header();

	$contact_details 	= get_field('contact_details');
?>
	
	<?php if(has_post_thumbnail() ) { ?>

		<section class="feature-image feature-image-default-alt" style="background:url('<?php echo $thumbnail_url ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">	
			<h1 class="page-title"><?php the_title(); ?></h1>		
		</section>	

	<?php } else { //default image ?>

		<section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">	
			<h1 class="page-title"><?php the_title(); ?></h1>		
		</section>	

	<?php } ?>


	<div class="container">
		<div class="row" id="primary">
			<div id="content" class="col-sm-12">
				<section class="main-content contact-form">

					<p class="lead"><?php echo $contact_details ?></p>

					<?php while( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>

				</section>
			</div><!--content-->
		</div><!--row-->
	</div><!--container-->

<?php get_footer(); ?>
<?php
//custom fields
$features_section_image		= get_field('features_section_image');
$features_section_title		= get_field('features_section_title');
?>

	<!-- COURSE FEATURES -->
	<section id="course-features">
		<div class="container">
			<div class="section-header">

			<!-- Feature Image Logic -->

				<?php if(!empty($income_feature_image)){ ?>
				
					<img class="svg-header" src="<?php echo $features_section_image['url']; ?>" alt="<?php echo $features_section_image['alt'] ?>">
				
				<?php }; ?>

				<h2><?php echo $features_section_title; ?></h2>
			</div><!--section-header-->

			<div class="row">

				<?php $loop = new WP_Query( array(
												'post_type' => 'course_feature',
												'orderby' => 'post_id',
												'order' => 'ASC' 
												) ); ?>

				<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

					<div class="col-sm-2">
						<i class="<?php the_field('course_feature_icon'); ?>"></i>
						<h4><?php the_title(); ?></h4>
					</div><!--col-->

				<?php endwhile; wp_reset_query(); ?>

			</div><!--row-->
		</div><!--container-->
	</section>

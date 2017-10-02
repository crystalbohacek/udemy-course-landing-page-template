<?php
	//custom fields
	$instructor_section_title 	= get_field('instructor_section_title');
	$instructor_name			= get_field('instructor_name');
	$instructor_section_excerpt	= get_field('instructor_section_excerpt');
	$instructor_biography		= get_field('instructor_biography');
	$twitter_username			= get_field('twitter_username');
	$facebook_username			= get_field('facebook_username');
	$amazon_username			= get_field('amazon_username');
?>

	<!-- INSTRUCTOR -->
	<section id="instructor">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-6">
					<div class="row">
						<div class="col-lg-8">
						<h2><?php echo $instructor_section_title; ?> <small><?php echo $instructor_name; ?></small></h2>
					
						</div><!--end col-->
						<div class="col-lg-4">

							<?php if(!empty($twitter_username)) : ?>

								<a href="https://twitter.com/<?php echo $twitter_username ?>" target="blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>

							<?php endif; ?>

							<?php if(!empty($facebook_username)) : ?>
								<a href="https://www.facebook.com/<?php echo $facebook_username; ?>/" target="blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
							<?php endif; ?>

							<?php if(!empty($amazon_username)) : ?>
								<a href="https://www.amazon.com/<?php echo $amazon_username; ?>" target="blank" class="badge social amazon"><i class="fa fa-amazon"></i></a>
							<?php endif; ?>
						</div><!--end col-->
					</div><!--row-->

					<p class="lead"><?php echo $instructor_section_excerpt; ?></p>

					<p><?php echo $instructor_biography; ?></p>

				</div><!--end col-->
				<div class="col-sm-4 col-md-6">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/headshot.jpg">
				</div>

			</div><!--row-->

		</div><!--container-->
	</section><!--instructor-->

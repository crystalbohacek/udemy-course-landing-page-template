<?php
	//Custom Fields 

	$prelaunch_price	= get_post_meta( 7, 'prelaunch_price', true );
	$launch_price		= get_post_meta( 7, 'launch_price', true );
	$final_price		= get_post_meta( 7, 'final_price', true );
	$course_url 		= get_post_meta( 7, 'course_url', true );
	$button_1_text		= get_post_meta( 7, 'button_1_text', true );
	$button_2_text		= get_post_meta( 7, 'button_2_text', true );
	$optin_text			= get_post_meta( 7, 'optin_text', true );
	$optin_button_text	= get_post_meta( 7, 'optin_button_text', true );
?>

	<!-- HERO -->
	<section id="hero" data-type="background" data-speed="4">
		<article>
		<div class="container clearfix">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 hero-text">
					<h1><?php bloginfo('name'); ?></h1>
					<p class="lead"><?php bloginfo('description'); ?></p>
					<div id="price-timeline">
						<div class="price active">
							<h4>Pre-Launch Price<small>Ends Soon</small></h4>
							<span><?php echo $prelaunch_price; ?></span>
						</div><!--price 1-->
						<div class="price">
							<h4>Launch Price<small>Coming Soon</small></h4>
							<span><?php echo $launch_price; ?></span>
						</div><!--price 2-->
						<div class="price">
							<h4>Final Price<small>Coming Soon</small></h4>
							<span><?php echo $final_price; ?></span>

						</div><!--price 3-->
					</div><!-- price timeline -->
					<p>
					<a class="btn btn-lg btn-danger" href="<?php echo $course_url ?>" role="button"><?php echo $button_1_text ?></a>
					<a class="btn btn-lg btn-outline-danger" href="#boost-income" role="button"><?php echo $button_2_text ?></a>
					</p>

				</div><!--col 7 -->
			</div><!-- row -->
		</div><!--container!-->
		</article>
	</section><!-- hero -->

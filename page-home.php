<?php

/*
	Template Name: Home
*/

//Custom Fields 

$prelaunch_price	= get_post_meta( 7, 'prelaunch_price', true );
$launch_price		= get_post_meta( 7, 'launch_price', true );
$final_price		= get_post_meta( 7, 'final_price', true );
$course_url 		= get_post_meta( 7, 'course_url', true );
$button_1_text		= get_post_meta( 7, 'button_1_text', true );
$button_2_text		= get_post_meta( 7, 'button_2_text', true );
$optin_text			= get_post_meta( 7, 'optin_text', true );
$optin_button_text	= get_post_meta( 7, 'optin_button_text', true );

$income_feature_image 		= get_field('income_feature_image');
$income_section_title 		= get_field('income_section_title');
$income_section_desc 		= get_field('income_section_description');
$left_column_title 			= get_field('left_column_title');
$left_column_description 	= get_field('left_column_description');
$right_column_title 		= get_field('right_column_title');
$right_column_title 		= get_field('right_column_title');
$right_column_description 	= get_field('right_column_description');

$skills_feature_image		= get_field('skills_feature_image');
$skills_section_title 		= get_field('skills_section_title');
$skills_section_body		= get_field('skills_section_body');

$features_section_image		= get_field('features_section_image');
$features_section_title		= get_field('features_section_title');

$project_features_title 	= get_field('project_features_title');
$project_features_body		= get_field('project_features_body');

$video_section_title		= get_field('video_section_title');
$video_section_video		= get_field('video_section_video');



get_header(); ?>

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

	<!-- OPT IN SECTION -->
	<section id="optin">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<p class="lead"><?php echo $optin_text; ?></p>
				</div>
				<div class="col-sm-4">
					<button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal"><?php echo $optin_button_text; ?></button>
				</div>
			</div><!-- row -->
		</div>
	</section><!--optin-->

	<!-- BOOST YOUR INCOME -->
	<section id="boost-income">
		<div class="container">
		
			<div class="section-header">
			
			<!-- Feature Image Logic -->

				<?php if(!empty($income_feature_image)){ ?>
				
					<img class="svg-header" src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt'] ?>">
				
				<?php }; ?>

				<h2><?php echo $income_section_title; ?></h2>
			</div><!--section-header-->

			<p class="lead"><?php echo $income_section_description; ?></p>

			<div class="row">
				<div class="col-sm-6">
					<h3><?php echo $left_column_title ?></h3>
					<p><?php echo $left_column_description; ?></p>
				</div><!-- col -->
				<div class="col-sm-6">
					<h3><?php echo $right_column_title ?></h3>
					<p><?php echo $right_column_description; ?></p>
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!--boost-income-->
	
	<!-- SKILLS -->
	<section id="skills">
		<div class="container">
			<div class="section-header">

			<!-- Feature Image Logic -->
				<?php if(!empty($skills_feature_image)){ ?>
				
					<img class="svg-header" src="<?php echo $skills_feature_image['url']; ?>" alt="<?php echo $skills_feature_image['alt'] ?>">
				
				<?php }; ?>

				<h2><?php echo $skills_section_title; ?></h2>
			</div><!--section-header-->
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<?php echo $skills_section_body; ?>
				</div>
			</div>
		</div><!--container-->
	</section>

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

				<?php endwhile; ?>

			</div><!--row-->
		</div><!--container-->
	</section>

	<!-- INSTRUCTOR -->
	<section id="instructor">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-6">
					<div class="row">
						<div class="col-lg-8">
						<h2>Instructor <small>Tom Corson-Knowles</small></h2>
					
						</div><!--end col-->
						<div class="col-lg-4">
							<a href="https://twitter.com/JuiceTom" target="blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
							<a href="https://www.facebook.com/TomCorsonKnowlesFanClub/" target="blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
							<a href="https://www.amazon.com/Tom-Corson-Knowles/e/B008QHU66C" target="blank" class="badge social amazon"><i class="fa fa-amazon"></i></a>
						</div><!--end col-->
					</div><!--row-->

					<p class="lead">Tom Corson-Knowles is an entrepreneur, blogger and international bestselling author of more than 20 books. By the time he graduated from Indiana University Kelley School of Business at age 22, he was earning a full-time income from his first successful business which he started in his dorm room.</p>

					<p>Tom then decided to share the keys to success he learned along his journey to becoming a financially independent entrepreneur through his books, educational video courses, and seminars. Today, he teaches new and established authors and writers how to earn a full-time income by becoming successful writers, publishers and marketers.</p>

					<p>Tom is the author of more than 20 bestselling books including The Kindle Publishing Bible, Schedule Your Success, Rules of the Rich, and Email Marketing Mastery.</p>

					<p>Tom is also the founder of TCK Publishing, an independent publishing company that specializes in online marketing.</p>

				</div><!--end col-->
				<div class="col-sm-4 col-md-6">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/headshot.jpg">
				</div>

			</div><!--row-->

		</div><!--container-->
	</section><!--instructor-->


	<!-- FINAL PROJECT FEATURES -->
	<section id="project-features">
		<div class="container">
			<h2><?php echo $project_features_title; ?></h2>
			<p class="lead"><?php echo $project_features_body; ?></p>

			<div class="row">
				<?php $loop = new WP_Query( array(
								'post_type' => 'project_feature',
								'orderby' => 'post_id',
								'order' => 'ASC' 
								) ); ?>

				<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

					<div class="col-sm-4">
					<?php 
						if( has_post_thumbnail() ) {
							the_post_thumbnail('post-thumbnail', array('class' => 'svg-header'));
						}
					?>
						<h3><?php the_title(); ?></h3>
						<p><?php the_content(); ?></p>
					</div><!-- end col -->

				<?php endwhile; ?>




			</div><!-- row -->
		</div><!--container-->
	</section>

	<!-- VIDEO FEATURETTE -->
	<section id="featurette">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h2><?php echo $video_section_title; ?></h2>
					<div style="position:relative;height:0;padding-bottom:56.25%">					
						<?php echo $video_section_video ?>
					</div>
				</div>
			</div>
		</div>
	</section><!--featurette-->

	<!-- TESTIMONIALS -->
	<section id="testimonials">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h2>What Students Are Saying</h2>

					<!-- TESTIMONIAL 1 -->

					<div class="row testimonial">
						<div class="col-sm-4">
							<img class="svg-avatar" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jeanne.svg" alt="illustration of a woman">
						</div><!--end col-->
						<div class="col-sm-8">
							<blockquote>“I tried to launch my book a year ago on my own, and lost over $2,000 in advertising costs. After enrolling in Bestseller Bootcamp, I relaunched my book with a clear, more direct strategy that got me to #1 on Amazon in less than 4 days. I can't recommend this course enough!”
								<cite>&mdash; Jeanne B.</cite>
							</blockquote>
						</div><!--end col-->
					</div><!--row-->


					<!-- TESTIMONIAL 2-->

					<div class="row testimonial">
						<div class="col-sm-4">
							<img class="svg-avatar" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/willie.svg" alt="illustration of a man">
						</div><!--end col-->
						<div class="col-sm-8">
							<blockquote>Though I have read countless documents, and completed several courses on this topic, “How To Become a Bestselling Author on Amazon Kindle”, provided me with a wealth of new insights. Tom’s approach was engaging, clear and thorough. Also included, were valuable documents and hyperlinks, to further assist learners at all expertise levels on their journey of discovery. The ongoing course updates, Facebook page and promotions are impressive. I recommend this course highly.
								<cite>&mdash; Willie R.</cite>
							</blockquote>
						</div><!--end col-->
					</div><!--row-->

					<!-- TESTIMONIAL 3-->

					<div class="row testimonial">
						<div class="col-sm-4">
							<img class="svg-avatar" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/nicolette.svg" alt="illustration of a woman">
						</div><!--end col-->
						<div class="col-sm-8">
							<blockquote>Tom's course gives you an in depth, step by step look at how you can become a best selling kindle author. He shows you the tricks and tools that you need to take advantage of the different promotions and online resources out there to make your ebook a success. I recommend this course for both newbie and seasoned Amazon authors because there is sure to be something for you to learn in this very informative course.
								<cite>&mdash; Nicolette E.</cite>
							</blockquote>
						</div><!--end col-->
					</div><!--row-->

					<!-- TESTIMONIAL 4-->

					<div class="row testimonial">
						<div class="col-sm-4">
							<img class="svg-avatar" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ammar.svg" alt="illustration of man with a beard">
						</div><!--end col-->
						<div class="col-sm-8">
							<blockquote>
								<p>There are some things in life that are worth spending time on. This course is one. Tom's genuinely cares for the learner and that is what makes this course great.</p>

								<p>Clear guidelines and instructions, frank do's and dont's, uplifting motivation and an earthy way of Tom teaching and coaxing and coaching all in one. His passion for what he does and what he is, is visible in his enthusiasm.</p>

								<p>I highly recommend this course for everyone who wants to publish their work and have no clue as to how to go about it.</p>

								<cite>&mdash; Ammar F.</cite>
							</blockquote>
						</div><!--end col-->
					</div><!--row-->

				</div><!--end col-->
			</div><!--row-->
		</div><!--container-->
	</section><!--testimonials -->


<?php get_footer(); ?>

<?php 
//custom fields
	$income_feature_image 		= get_field('income_feature_image');
	$income_section_title 		= get_field('income_section_title');
	$income_section_desc 		= get_field('income_section_description');
	$left_column_title 			= get_field('left_column_title');
	$left_column_description 	= get_field('left_column_description');
	$right_column_title 		= get_field('right_column_title');
	$right_column_title 		= get_field('right_column_title');
	$right_column_description 	= get_field('right_column_description');
?>

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

<?php 
	//custom fields
	$skills_feature_image		= get_field('skills_feature_image');
	$skills_section_title 		= get_field('skills_section_title');
	$skills_section_body		= get_field('skills_section_body');

?>

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

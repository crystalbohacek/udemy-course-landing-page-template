<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bestseller_Bootcamp
 */

?>

<?php wp_footer(); ?>

	<!-- SIGN UP -->
	<section id="signup" data-type="background" data-speed="4">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h3>Become a published author in 4 weeks and earn $1k+ per month.</h3>
				</div><!--end col-->
				<div class="col-sm-6 col-sm-offset-3">
					<p>Sign up for our mailing list and we’ll show you what Bestseller Bootcamp can do to help change your career. We will never spam you.</p>
				</div><!--end col-->
			  <div class="col-sm-4 col-sm-offset-4">
					<?php 
						$post = get_page_by_path('newsletter-signup'); 
						$content = apply_filters('the_content', $post->post_content); 
						echo $content;
					?>
			  </div><!-- /.col-sm-4 -->
			</div><!-- /.row -->			
		</div><!--container-->
	</section><!--signup-->

	<!-- FOOTER -->
	<footer>
		<div class="container">
			<div class="col-sm-3">
				<a href="/"><span class="hidden-xs"><?php echo bloginfo('name'); ?></span></a>
			</div><!--end col-->
			<div class="col-sm-6">
				<?php
					wp_nav_menu( array(
						
						'theme_location'	=> 'footer',
						'container'			=> 'nav',
						'menu_class'		=> 'list-unstyled list-inline'
						
					) );
				?>
			</div><!--end col-->
			<div class="col-sm-3">
				<p class="pull-right hidden-xs">&copy; <?php echo date('Y'); ?></p>

			</div><!--col-->
		</div><!--container -->
	</footer>

	<!-- MODAL -->
	<div class="modal fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span>&times;<span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe To Our Mailing List</h4>
				</div><!-- modal-header -->
				<div class="modal-body">
					<p>Simply enter your name and email. As a thank you for joining us, we're going to give you one of our best selling courses <em>for free!</em></p>
					<form class="form-inline" role="form">
						<div class="form-group">
							<label class="sr-only" for="subscribe-name">Your first name</label>
							<input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
						</div><!--form group-->
						<div class="form-group">
							<label class="sr-only" for="subscribe-email">Your email</label>
							<input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
						</div><!--form group-->
						<input type="submit" class="btn btn-danger" value="Subscribe">
					</form>

					<hr>

					<p><small>By providing your email, you consent to receiving occasional newsletters.<br>No spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.</small></p>
				</div><!-- modal-body-->
			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div><!-- modal -->

<!-- BOOTSTRAP CORE JAVASCRIPT -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>


</body>
</html>

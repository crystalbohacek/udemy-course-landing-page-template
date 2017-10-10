<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bestseller_Bootcamp
 */

?>

<article class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<div class="post-image">
		</div><!--post image-->

		<?php if ( 'post' === get_post_type() ) : ?>

			<div class="post-details">
				<span class="date"><time><?php the_date(); ?></time></span>
				<span class="author"><?php the_author(); ?></span>
				<span class="comments"><a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></span>
			</div><!--post-details-->

			<?php edit_post_link( 'Edit', '<i class="fa fa-pencil"></i>', ''); ?>

		<?php endif; ?>

		<?php if ( is_singular() ) :
			the_title( '<h3 class="entry-title">', '</h3>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif; 

		?>
	</header><!-- .entry-header -->

			<div class="post-excerpt">
				<?php the_excerpt(); ?>
			</div><!--post-excerpt-->

</article><!-- #post-<?php the_ID(); ?> -->

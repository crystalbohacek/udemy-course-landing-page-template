<?php
/**
 * Bestseller Bootcamp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bestseller_Bootcamp
 */


add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});

if ( ! function_exists( 'bestsellerbootcamp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bestsellerbootcamp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Bestseller Bootcamp, use a find and replace
		 * to change 'bestsellerbootcamp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'bestsellerbootcamp', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'bestsellerbootcamp' ),
			'footer' => esc_html__( 'Footer', 'bestsellerbootcamp' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'bestsellerbootcamp_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'bestsellerbootcamp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bestsellerbootcamp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bestsellerbootcamp_content_width', 640 );
}
add_action( 'after_setup_theme', 'bestsellerbootcamp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bestsellerbootcamp_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bestsellerbootcamp' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bestsellerbootcamp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'bestsellerbootcamp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bestsellerbootcamp_scripts() {
	wp_enqueue_style( 'bestsellerbootcamp-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bestsellerbootcamp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'bestsellerbootcamp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bestsellerbootcamp_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
     return $data;
  }

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );

/**
 * Replaces the excerpt "more" text by a link.
 */
function new_excerpt_more($more) {
    global $post;
	return '... <a class="moretag" href="'. get_permalink($post->ID) . '"> continue reading</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * Adds I need help to... widget
 */

function wpb_load_widget() {
	register_widget( 'aey_cat_links_widget' );
}

add_action( 'widgets_init', 'wpb_load_widget' );
 
class aey_cat_links_widget extends WP_Widget {
 	function __construct() {
		parent::__construct(
	 		'aey_cat_links_widget', 
	 		__('Category Links Widget', 'aey_cat_links_widget_domain'), 
			array( 'description' => __( 'Links to categories.', 'aey_cat_links_widget_domain' ), ) 
		);
	}
	
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		echo $args['before_widget'];
		if ( ! empty( $title ) ){
			echo $args['before_title'] . $title . $args['after_title'];
		} 
		// This is where you run the code and display the output
		$widget_html = '
			<h4><?php ' . $this->get_field_id( 'title' ) . '</h4>
			<div class="row help-section">
					<div class="col-md-6">
						<a href="/"><i class="fa fa-play-circle"></i><p>Get Started</p></a>
					</div>
					<div class="col-md-6">
						<a href="/"><i class="fa fa-pencil"></i><p>Write Better</p></a>
					</div>
					<div class="col-md-6">
						<a href="/"><i class="fa fa-clock-o"></i><p>Be Productive</p></a>
					</div>
					<div class="col-md-6">
						<a href="/"><i class="fa fa-money"></i><p>Make Money</p></a>
					</div>
					<div class="col-md-6">
						<a href="/"><i class="fa fa-magic"></i><p>Publish Online</p></a>
					</div>
					<div class="col-md-6">
						<a href="/"><i class="fa fa-users"></i><p>Build Audience</p></a>
					</div>
			</div><!--row-->';
		echo __( $widget_html, 'aey_cat_links_widget_domain' );
		echo $args['after_widget'];
	}
         
   	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
		$title = $instance[ 'title' ];
	}
	else {
		$title = __( 'New title', 'aey_cat_links_widget_domain' );
	} ?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
	<?php }
     
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
		}
	}




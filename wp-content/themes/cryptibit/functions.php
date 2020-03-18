<?php
/**
 * CryptiBIT theme main functions and WordPress configuration
 *
 * @package CryptiBIT
 */

/**
 * Theme Control Panel Configuration
 */
define( 'CRYPTIBIT_IPANEL_PATH' , get_template_directory() . '/inc/ipanel/' );
define( 'CRYPTIBIT_IPANEL_URI' , get_template_directory_uri() . '/inc/ipanel/' );
define( 'CRYPTIBIT_IPANEL_PLUGIN_USAGE' , false );

include_once CRYPTIBIT_IPANEL_PATH . 'iPanel.php';

/**
 * Get theme options globally
 */
if (!function_exists('cryptibit_get_theme_options')) :
function cryptibit_get_theme_options() {
	if(get_option('CRYPTIBIT_PANEL')) {
		$theme_options_data = maybe_unserialize(get_option('CRYPTIBIT_PANEL'));
	} else {
		$theme_options_data = Array();
	}

	return $theme_options_data;
}
endif;

$cryptibit_theme_options = cryptibit_get_theme_options();

/**
 * WordPress content width configuration
 */
if (!isset($content_width))
	$content_width = 1140; /* pixels */

if (!function_exists('cryptibit_setup')) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function cryptibit_setup() {
	// Get theme options
	$cryptibit_theme_options = cryptibit_get_theme_options();

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on CryptiBIT, use a find and replace
	 * to change 'cryptibit' to the name of your theme in all the template files
	 */
	load_theme_textdomain('cryptibit', get_template_directory() . '/languages');

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support('automatic-feed-links');

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support('post-thumbnails');

	/**
	 * Enable support for Title Tag
	 *
	 */
	add_theme_support( 'title-tag' );

	/**
	 * Enable support for Logo
	 */
	add_theme_support( 'custom-header', array(
	    'default-image' =>  get_template_directory_uri() . '/img/logo.png',
            'width'         => 195,
            'flex-width'    => true,
            'flex-height'   => false,
            'header-text'   => false,
	));

	/**
	 *	Woocommerce support
	 */
	add_theme_support( 'woocommerce' );

	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	/**
	 *	Gutenberg support
	 */
    add_theme_support('align-wide');

	// Product per page limit in WooCommerce
	$loop_shop_per_page = function($cols) {

		global $cryptibit_theme_options;

		if(isset($cryptibit_theme_options['wc_products_per_page'])) {
			$wc_products_per_page = $cryptibit_theme_options['wc_products_per_page'];
		} else {
			$wc_products_per_page = 12;
		}

	    return $wc_products_per_page;
	};

	add_filter( 'loop_shop_per_page', $loop_shop_per_page, 20 );

	// Products per row limit in WooCommerce
	add_filter('loop_shop_columns', 'cryptibit_wc_loop_columns');
	if (!function_exists('cryptibit_wc_loop_columns')) {
		function cryptibit_wc_loop_columns() {
			$cryptibit_theme_options = cryptibit_get_theme_options();

			// Demo settings
		    if ( defined('DEMO_MODE') && isset($_GET['wc_products_per_row']) ) {
		      $cryptibit_theme_options['wc_products_per_row'] = $_GET['wc_products_per_row'];
		    }

			if(isset($cryptibit_theme_options['wc_products_per_row'])) {
				$wc_products_per_row = $cryptibit_theme_options['wc_products_per_row'];
			} else {
				$wc_products_per_row = 3;
			}

			return $wc_products_per_row;
		}
	}

	/**
	 * Change customizer features
	 */
	add_action( 'customize_register', 'cryptibit_theme_customize_register' );
	function cryptibit_theme_customize_register( $wp_customize ) {
		$wp_customize->remove_section( 'colors' );

		$wp_customize->add_setting( 'cryptibit_header_transparent_logo' , array(
		    array ( 'default' => '',
				    'sanitize_callback' => 'esc_url_raw'
				    ),
		    'transport'   => 'refresh',
		) );

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cryptibit_header_transparent_logo', array(
		    'label'    => esc_html__( 'Logo for Transparent Header (Light logo)', 'cryptibit' ),
		    'section'  => 'header_image',
		    'settings' => 'cryptibit_header_transparent_logo',
		) ) );
	}

	/**
	 * Theme image sizes
	 */
	add_image_size( 'cryptibit-blog-thumb', 1170, 660, true);
	add_image_size( 'cryptibit-blog-thumb-widget', 270, 152, true);

	/**
	 * Menu locations
	 */
	register_nav_menus( array(
            'primary' => esc_html__('Main Menu', 'cryptibit'),
            'top' => esc_html__('Top Menu', 'cryptibit'),
            'footer' => esc_html__('Footer Menu', 'cryptibit'),
            'header-advanced' => esc_html__('Header Advanced Menu', 'cryptibit'),
	) );
	/*
	* Change excerpt length
	*/
	if (!function_exists('cryptibit_new_excerpt_length')) :
	function cryptibit_new_excerpt_length($length) {
		$cryptibit_theme_options = cryptibit_get_theme_options();

		if(isset($cryptibit_theme_options['post_excerpt_legth'])) {
			$post_excerpt_length = $cryptibit_theme_options['post_excerpt_legth'];
		} else {
			$post_excerpt_length = 30;
		}

		return $post_excerpt_length;
	}
	endif;
	add_filter('excerpt_length', 'cryptibit_new_excerpt_length');

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support('post-formats', array('aside', 'image', 'gallery', 'video', 'audio', 'quote', 'link', 'status', 'chat'));

	// Activate theme
    update_option('cryptibit_license_key_status', 'activated');

}
endif;
add_action('after_setup_theme', 'cryptibit_setup');

/**
 * Enqueue scripts and styles
 */
if (!function_exists('cryptibit_scripts')) :
function cryptibit_scripts() {
	$cryptibit_theme_options = cryptibit_get_theme_options();

	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');

	wp_enqueue_style('cryptibit-fonts', cryptibit_google_fonts_url(), array(), '1.0');

	wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/js/owl-carousel/owl.carousel.css');
	wp_enqueue_style('owl-theme', get_template_directory_uri() . '/js/owl-carousel/owl.theme.css');

	wp_enqueue_style('cryptibit-stylesheet', get_stylesheet_uri(), array(), '1.0', 'all');

	wp_enqueue_style('cryptibit-responsive', get_template_directory_uri() . '/responsive.css', '1.0', 'all');

	if(isset($cryptibit_theme_options['enable_theme_animations']) && $cryptibit_theme_options['enable_theme_animations']) {
		wp_enqueue_style('cryptibit-animations', get_template_directory_uri() . '/css/animations.css');
	}

	if(isset($cryptibit_theme_options['megamenu_enable']) && $cryptibit_theme_options['megamenu_enable']) {
		wp_enqueue_style('cryptibit-mega-menu', get_template_directory_uri() . '/css/mega-menu.css');
		wp_enqueue_style('cryptibit-mega-menu-responsive', get_template_directory_uri() . '/css/mega-menu-responsive.css');
	}

	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css');
	wp_enqueue_style('pe-icon-7-stroke', get_template_directory_uri() . '/css/pe-icon-7-stroke.css');
	wp_enqueue_style('cryptibit-select2', get_template_directory_uri() . '/js/select2/select2.css'); // Special modified version, must have theme prefix
	wp_enqueue_style('offcanvasmenu', get_template_directory_uri() . '/css/offcanvasmenu.css');
	wp_enqueue_style('nanoscroller', get_template_directory_uri() . '/css/nanoscroller.css');
	wp_enqueue_style('cryptibit-hover', get_template_directory_uri() . '/css/hover.css');// Special modified version, must have theme prefix

	if(isset($cryptibit_theme_options['enable_progressbar']) && $cryptibit_theme_options['enable_progressbar']) {
		wp_enqueue_style('nprogress', get_template_directory_uri() . '/css/nprogress.css');
		wp_register_script('nprogress', get_template_directory_uri() . '/js/nprogress.js', array(), '1.0', true);
		wp_enqueue_script('nprogress');
	}

	add_thickbox();

	// Registering scripts to include it in correct order later
	wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.1.1', true);
	wp_register_script('easing', get_template_directory_uri() . '/js/easing.js', array(), '1.3', true);
	wp_register_script('cryptibit-select2', get_template_directory_uri() . '/js/select2/select2.min.js', array(), '3.5.1', true);// Special modified version, must have theme prefix
	wp_register_script('owl-carousel', get_template_directory_uri() . '/js/owl-carousel/owl.carousel.min.js', array(), '1.3.3', true);
	wp_register_script('nanoscroller', get_template_directory_uri() . '/js/jquery.nanoscroller.min.js', array(), '3.4.0', true);
	wp_register_script('mixitup', get_template_directory_uri() . '/js/jquery.mixitup.min.js', array(), '2.1.7', true);
	wp_register_script('nprogress', get_template_directory_uri() . '/js/nprogress.js', array(), '1.0', true);

	wp_register_script('tweenmax', get_template_directory_uri() . '/js/TweenMax.min.js', array(), '1.0', true);

	// Enqueue scripts in correct order
	wp_enqueue_script('cryptibit-script', get_template_directory_uri() . '/js/template.js', array('jquery', 'bootstrap', 'easing', 'cryptibit-select2', 'owl-carousel', 'nanoscroller', 'mixitup', 'tweenmax'), '1.0', true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

}
endif;
add_action('wp_enqueue_scripts', 'cryptibit_scripts');

/**
 * Title backward compatibility
 */
if ( ! function_exists( '_wp_render_title_tag' ) ) :
	function cryptibit_render_title() {

	?>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php

	}

	add_action( 'wp_head', 'cryptibit_render_title' );
endif;

/**
 * Enqueue scripts and styles for admin area
 */
if (!function_exists('cryptibit_admin_scripts')) :
function cryptibit_admin_scripts() {
	wp_register_style( 'cryptibit-style-admin', get_template_directory_uri() .'/css/admin.css' );
	wp_enqueue_style( 'cryptibit-style-admin' );
	wp_register_style('font-awesome-admin', get_template_directory_uri() . '/css/font-awesome.css');
	wp_enqueue_style( 'font-awesome-admin' );

	wp_register_script('cryptibit-template-admin', get_template_directory_uri() . '/js/template-admin.js', array(), '1.0', true);
	wp_enqueue_script('cryptibit-template-admin');

}
endif;
add_action( 'admin_init', 'cryptibit_admin_scripts' );

if (!function_exists('cryptibit_load_wp_media_files')) :
function cryptibit_load_wp_media_files() {
  wp_enqueue_media();
}
endif;
add_action( 'admin_enqueue_scripts', 'cryptibit_load_wp_media_files' );

/**
 * Display navigation to next/previous pages when applicable
 */
if (!function_exists('cryptibit_content_nav')) :
function cryptibit_content_nav( $nav_id ) {
	global $wp_query, $post;

	// Don't print empty markup on single pages if there's nowhere to navigate.
	if ( is_single() ) {
		$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
		$next = get_adjacent_post( false, '', false );

		if ( ! $next && ! $previous )
			return;
	}

	// Don't print empty markup in archives if there's only one page.
	if ( $wp_query->max_num_pages < 2 && ( is_home() || is_archive() || is_search() ) )
		return;

	$nav_class = ( is_single() ) ? 'navigation-post navigation-paging' : 'navigation-paging';

	?>
	<nav role="navigation" id="<?php echo esc_attr( $nav_id ); ?>" class="<?php echo esc_attr($nav_class); ?>">

	<?php if ( is_single() ) : // navigation links for single posts ?>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="nav-wrapper">
			<?php previous_post_link( '<div class="nav-previous">%link</div>', esc_html__( 'Previous post', 'cryptibit' ) ); ?>

			<?php next_post_link( '<div class="nav-next">%link</div>',  esc_html__( 'Next post', 'cryptibit' ) ); ?>
			</div>
		</div>
	</div>
	</div>
	<?php elseif ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : // navigation links for home, archive, and search pages ?>

		<div class="row">
			<div class="col-md-12">
				<div class="nav-wrapper">
					<?php if ( get_next_posts_link() ) : ?>
					<div class="nav-previous">
					<?php next_posts_link( esc_html__( 'Older posts', 'cryptibit' ) ); ?>
					</div>
					<?php endif; ?>

					<?php if ( get_previous_posts_link() ) : ?>
					<div class="nav-next">
					<?php previous_posts_link( esc_html__( 'Newer posts', 'cryptibit' ) ); ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>

	<?php endif; ?>

	</nav><!-- #<?php echo esc_html( $nav_id ); ?> -->
	<?php
}
endif;

/**
 * Comments template overrides
 */
if (!function_exists('cryptibit_comment')) :
function cryptibit_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;

	if ( 'pingback' == $comment->comment_type || 'trackback' == $comment->comment_type ) : ?>

	<li id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
		<div class="comment-body">
			<?php esc_html_e( 'Pingback:', 'cryptibit' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( esc_html__( 'Edit', 'cryptibit' ), '<span class="edit-link">', '</span>' ); ?>
		</div>

	<?php else : ?>

	<li id="comment-<?php comment_ID(); ?>" <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?>>
		<article id="div-comment-<?php comment_ID(); ?>" class="comment-body">

			<div class="comment-meta clearfix">
				<div class="reply">
					<?php edit_comment_link( esc_html__( 'Edit', 'cryptibit' ), '', '' ); ?>
					<?php comment_reply_link( array_merge( $args, array( 'add_below' => 'div-comment', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
				</div><!-- .reply -->
				<div class="comment-author vcard">

					<?php if ( 0 != $args['avatar_size'] ) echo get_avatar( $comment, 60 ); ?>

				</div><!-- .comment-author -->

				<div class="comment-metadata">
					<div class="author">
					<?php printf( wp_kses_post('%s'), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
					</div>
					<div class="date"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><time datetime="<?php comment_time( 'c' ); ?>"><?php printf( _x( '%1$s at %2$s', '1: date, 2: time', 'cryptibit' ), get_comment_date(), get_comment_time() ); ?></time></a></div>

					<?php if ( '0' == $comment->comment_approved ) : ?>
					<p class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'cryptibit' ); ?></p>
					<?php endif; ?>
					<div class="comment-content">
						<?php comment_text(); ?>
					</div>
				</div><!-- .comment-metadata -->

			</div><!-- .comment-meta -->

		</article><!-- .comment-body -->

	<?php
	endif;
}
endif;

/**
 * Set/Get current data details for global usage in templates (post position in loop, etc)
 */
if (!function_exists('cryptibit_set_theme_data')) :
function cryptibit_set_theme_data($data) {
	global $cryptibit_theme_data;

	$cryptibit_theme_data = $data;
}
endif;

if (!function_exists('cryptibit_get_theme_data')) :
function cryptibit_get_theme_data() {
	global $cryptibit_theme_data;

	return $cryptibit_theme_data;
}
endif;

if (!function_exists('cryptibit_get_theme_data_value')) :
function cryptibit_get_theme_data_value($name) {
	global $cryptibit_theme_data;

	if(isset($cryptibit_theme_data[$name])) {
		$value = $cryptibit_theme_data[$name];
	} else {
		$value = '';
	}

	return $value;
}
endif;

/**
 * Stop WordPress from removing tags in posts
 */
if (!function_exists('cryptibit_tinymce_fix')) :
function cryptibit_tinymce_fix( $init ) {
    $init['extended_valid_elements'] = 'div[*],br,i[*]';

    return $init;
}
endif;
add_filter('tiny_mce_before_init', 'cryptibit_tinymce_fix');

/**
 * Change read more link
 */
add_filter( 'the_content_more_link', 'cryptibit_read_more_link' );
if (!function_exists('cryptibit_read_more_link')) :
function cryptibit_read_more_link() {
	return '<a class="btn more-link mgt-button mgt-style-borderedgrey mgt-size-small mgt-align-left mgt-display-inline mgt-text-size-normal mgt-text-transform-none" href="' . esc_url(get_permalink()) . '">'.esc_html__('Read more', 'cryptibit').'</a>';
}
endif;

/**
 * Custom mega menu
 */
if(isset($cryptibit_theme_options['megamenu_enable']) && $cryptibit_theme_options['megamenu_enable']) {
	require get_template_directory() . '/inc/mega-menu/custom-menu.php';
}

/**
 * Page excerpt support
 */
if (!function_exists('cryptibit_pe_init')) :
function cryptibit_pe_init() {
	if(function_exists("add_post_type_support")){
		add_post_type_support( 'page', 'excerpt' );
	}
}
add_action('init', 'cryptibit_pe_init');
endif;

/**
 * Registers an editor stylesheet
 */
if (!function_exists('cryptibit_add_editor_styles')) :
function cryptibit_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'cryptibit_add_editor_styles' );
endif;

/*
* Process already escaped complex data
*/
function cryptibit_wp_kses_data($data) {
  // This function used in safe places only, where all dynamic data already escaped before,
  // and does not need double escaping

  return $data;
}

/**
 * Load theme additional functions.
 */
require get_template_directory() . '/inc/theme-functions.php';

/**
 * Load theme sidebars.
 */
require get_template_directory() . '/inc/theme-sidebars.php';

/**
 * Load theme dynamic CSS.
 */
require get_template_directory() . '/inc/theme-css.php';

/**
 * Load theme dynamic JS.
 */
require get_template_directory() . '/inc/theme-js.php';

/**
 * Load theme additional modules.
 */
require get_template_directory() . '/inc/modules/wp-category-image.php';

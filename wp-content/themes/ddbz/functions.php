<?php
/**
 * ddbz functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ddbz
 */

if ( ! function_exists( 'ddbz_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ddbz_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ddbz, use a find and replace
		 * to change 'ddbz' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ddbz', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'ddbz' ),
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
		add_theme_support( 'custom-background', apply_filters( 'ddbz_custom_background_args', array(
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
add_action( 'after_setup_theme', 'ddbz_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ddbz_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'ddbz_content_width', 640 );
}
add_action( 'after_setup_theme', 'ddbz_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ddbz_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ddbz' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ddbz' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ddbz_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ddbz_scripts() {
	wp_enqueue_style( 'ddbz-style', get_stylesheet_uri() );

  // Nav & skip link scripts both loading in footer, which isn't being called in front_page...

	wp_enqueue_script( 'ddbz-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'ddbz-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

  if ( is_front_page() ) {
    wp_enqueue_script( 'ddbz-slider', get_template_directory_uri() . '/js/slider.js', array(), '20190506', true );
  }


}
add_action( 'wp_enqueue_scripts', 'ddbz_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */

 /**
 * Copied this from inc/template-tags.php
 */
 if ( ! function_exists( 'ddbz_posted_on' ) ) :
   /**
   * Prints HTML with meta information for the current post-date/time.
   */
   function ddbz_posted_on() {
     $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
     if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
       $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
     }

     $time_string = sprintf( $time_string,
       esc_attr( get_the_date( 'c' ) ),
       esc_html( get_the_date() ),
       esc_attr( get_the_modified_date( 'c' ) ),
       esc_html( get_the_modified_date() )
     );

     $posted_on = sprintf(
       /* translators: %s: post date. */
       esc_html_x( '%s', 'post date', 'ddbz' ),
       '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
     );

     echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

   }
 endif;

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

/**
 * Google Analytics - Following Instructions:
 * http://www.wpbeginner.com/beginners-guide/how-to-install-google-analytics-in-wordpress/
 */
add_action('wp_head', 'wpb_add_googleanalytics');
function wpb_add_googleanalytics() { ?>
 
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121963115-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-121963115-1');
</script>
 
<?php }

/**
 * ddBz Custom Tweaks & Additions
 */
add_filter( 'show_admin_bar' , '__return_false' );

/**
 * Comment Form Tweaks - Custom checkbox, Re-Order
 */
function ddbz_custom_comments_form($arg) {
  /** Makes cookies field available **/
  $commenter = wp_get_current_commenter();
  $req = get_option( 'require_name_email' );
  $aria_req = ( $req ? " aria-required='true'" : '' );
  $consent = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';
  /** End - Makes cookies field available **/
  $arg['url'] = '';
  $comment_field = $arg['comment'];
  unset( $arg['cookies'] );
  unset( $arg['comment'] );
  $arg['comment'] = $comment_field;
  $arg['cookies'] = '<p class="comment-form-cookies-consent"><label for="wp-comment-cookies-consent" tabindex="0"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' . '<span></span>' . __( 'Remember me next time I visit or comment.' ) . '</label></p>';
  return $arg;
}

/**
 * Old Label Element
 *
  $arg['cookies'] = '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' . '<label for="wp-comment-cookies-consent">' . __( 'Remember me next time I visit or comment.' ) . '</label></p>';
*/

add_filter( 'comment_form_fields', 'ddbz_custom_comments_form');

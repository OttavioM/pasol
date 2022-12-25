<?php
/**
 * pasol functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pasol
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function pasol_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on pasol, use a find and replace
		* to change 'pasol' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'pasol', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'pasol' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'pasol_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'pasol_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pasol_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pasol_content_width', 640 );
}
add_action( 'after_setup_theme', 'pasol_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pasol_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'pasol' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'pasol' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'pasol_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function pasol_scripts() {
	wp_enqueue_style( 'pasol-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'pasol-main', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style( 'boostrap-icons', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css");



	wp_style_add_data( 'pasol-style', 'rtl', 'replace' );

	wp_enqueue_script( 'pasol-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	// Popper and Bootstrap JavaScript
	wp_enqueue_script( 'bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js', array('jquery'));
	wp_enqueue_script( 'bootstrap-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js', array('jquery'));
	// User defined JavaScript
	wp_enqueue_script( 'boostrap-script', get_template_directory_uri() .'/js/script.js', array('jquery'));
	
	
	
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pasol_scripts' );

/**
 * Implement the Custom Font.
 */

// function enqueue_custom_fonts() {
// 	if(!is_admin()) {
// 		wp_register_style('pixel_sans','https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500&display=swap');
// 		wp_register_style('nunito','https://fonts.googleapis.com/css2?family=Nunito:wght@300;500&display=swap');
		
// 		wp_enqueue_style('wpb-google-fonts','pixel_sans');
// 		wp_enqueue_style('wpb-google-fonts','nunito');
// 	}
// }
// add_action('wp_enqueue_scripts','enqueue_custom_fonts')


function wpb_add_google_fonts() {    
	wp_enqueue_style( 'Plex_Sans', 'https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500&display=swap', false );    
	wp_enqueue_style( 'Nunito', 'https://fonts.googleapis.com/css2?family=Nunito:wght@300;500&display=swap', false );    
}        
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );


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

/**
 * Show cart contents / total Ajax
 */
 add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

 function woocommerce_header_add_to_cart_fragment( $fragments ) {
	 global $woocommerce;
 
	 ob_start();
 
	 ?>
	 <a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> – <?php echo $woocommerce->cart->get_cart_total(); ?></a>
	 <?php
	 $fragments['a.cart-customlocation'] = ob_get_clean();
	 return $fragments;
 }

 /***
  * FRONT PAGE POSTS
  */

  function front_page_post($image_path,$h1_text,$p_text,$background_color){
	echo '<section class = "container-fluid__'. $background_color .' pt-5 pb-5">
		<div class="row">
			<div class="first-post__image col-md-5 col-sm-11">
				<a href = "#">
					<img src="'. get_template_directory_uri() . $image_path .'" class="d-block w-100" alt="...">
				</a>
			</div>

			<div class="first-post__col col-md-2 col-sm-12">
			</div>

			<div class="first-post__col col-md-4 col-sm-12 justify-content-end align-center pt-sm-5 pt-md-0">
				<h1 class="text-center ">'. $h1_text .' </h1>
				<p class="text-center">'. $p_text .'</p>
			</div>
		</div>	
	</section>';
  }
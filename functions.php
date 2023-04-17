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

	/** ENABLE MORE THAN ONE MENU **/
	function register_my_menus() {
		register_nav_menus(
			array(
			'new-menu' => __( 'New Menu' ),
			'another-menu' => __( 'Another Menu' ),
			'an-extra-menu' => __( 'An Extra Menu' )
			)
		);
		}
		add_action( 'init', 'register_my_menus' );

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

	wp_enqueue_script( 'header_hider_scrolling', get_template_directory_uri() .'/js/script.js', array( 'jquery' ),false, true);
	// wp_enqueue_script( 'hideHeaderOnScroll', get_template_directory_uri() .'/js/hideHeaderOnScroll.js', array( 'jquery' ),false, true);
	
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pasol_scripts' );

// THIS FUNCTION CALL THE HEADER SCROLLING INSIDE THE 
// script.js and enqueue in the footer, however it can be also
// replaced with the hideHeaderOnScroll.js, calling here and then calling in the header
// befaore the </head> is closed, like: 
/** <script src= <?php echo get_template_directory_uri() .'/js/hideHeaderOnScroll.js'; ?>> </script> **/
// benefit to have functions in different files is that you can call only one function and where you want,
// but if you have alot it is a chaos. On the other hand, only one big file some functions needs to be called in 
// the footer as the one here
function call_header_hider_scrolling() {
    ?>
    <script>
        (function(){
            header_hider_scrolling();
        })();
    </script>
    <?php
}
add_action( 'wp_footer', 'call_header_hider_scrolling' );


// new shortcode to see the orders for the user and standard woocommerce empty orders
// add_shortcode('account_orders', 'display_account_orders');
// function display_account_orders()
// {
//     $user_id = get_current_user_id();
//     $customer_orders = wc_get_orders( array(
//         'customer_id' => $user_id,
//         'status' => array( 'wc-completed', 'wc-processing' ),
//     ) );
//     return wc_get_template(
//         'myaccount/orders.php',
//         array(
//             'has_orders' => $customer_orders
//         )
//     );
// }

// add shortcode for the user orders with personalizations of the 
// text when there is no orders
add_shortcode('user_orders', 'display_user_orders');
function display_user_orders()
{
    if ( ! is_user_logged_in() ) {
        return 'Please log in to view your orders.';
    }

    $user = wp_get_current_user();

    if ( ! wc_customer_bought_product( $user->user_email, $user->ID, 0 ) ) {
        return 'You have not placed any orders yet.';
    }

    $args = array(
        'customer' => $user->ID,
        'status'   => array_keys( wc_get_order_statuses() ),
    );

    $orders = wc_get_orders( $args );

    ob_start();
    wc_get_template( 'myaccount/orders.php', array( 'orders' => $orders, 'current_user' => $user ) );
    return ob_get_clean();
}
// for the log out
// Shortcode Action hook 

add_shortcode('user_logout', 'custom_logout');

// Callback 
function custom_logout(){
	
    ob_start();
    // Check if user is logged in 
    if (is_user_logged_in()){ 
    	// Create the url variable 
	   	$wc_shortcode_logout_url = site_url() . '/?customer-logout=true';?>
		    <button class="wc_logout_shortcode_btn"><a href="<?php echo $wc_shortcode_logout_url; ?>">Log Out</a></button> 
    	    <?php 
	}

    return ob_get_clean();
}

/** THIS FUNCTION HIDE THE INFOBOX IF USER NOT LOGGED IN**/
function hide_infobox_if_not_logged_in() {
    if ( ! is_user_logged_in() ) {
        ?>
        <style>
            div.eb-infobox-wrapper {
                display: none !important;
            }
        </style>
        <?php
    }
}
add_action( 'wp_head', 'hide_infobox_if_not_logged_in' );


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

  function create_list_with_links() {
    $args = func_get_args(); // Get all the arguments passed to the function
    $list = '<ul style="list-style-type:none; padding:-5;">'; // Initialize the list with an opening unordered list tag and some CSS to remove the markers and padding

    // Loop through the arguments in pairs (item name and hyperlink)
    for ($i = 0; $i < count($args); $i += 2) {
        $name = $args[$i];
        $link = $args[$i + 1];
        $list .= "<li style=\"text-align:left;\"><a href=\"$link\">$name</a></li>"; // Wrap each item name and hyperlink in an HTML list item tag with a link and some CSS to align the text to the left
    }

    $list .= '</ul>'; // Add a closing unordered list tag

    return $list; // Return the final HTML list
}

function create_links() {
    $args = func_get_args(); // Get all the arguments passed to the function
    $links = ''; // Initialize the list of links with an empty string

    // Loop through the arguments in pairs (item name and hyperlink)
    for ($i = 0; $i < count($args); $i += 2) {
        $name = $args[$i];
        $link = $args[$i + 1];
        $links .= "<a href=\"$link\">$name</a><br>"; // Wrap each item name and hyperlink in an HTML link tag with a line break
    }

    return $links; // Return the final list of links
}

 /***
  * WOOCOMMERCE
  */
  add_theme_support('woocommerce');

//Remove WooCommerce styles
  function remove_woocommerce_styles($enqueue_styles){
    unset( $enqueue_styles['woocommerce-general'] );    // Remove the gloss
    // unset( $enqueue_styles['woocommerce-layout'] );        // Remove the layout
    // unset( $enqueue_styles['woocommerce-smallscreen'] );    // Remove the smallscreen optimisation
    return $enqueue_styles;
}
add_filter('woocommerce_enqueue_styles','remove_woocommerce_styles');

/**Enqueue your own stylesheet**/
function wp_enqueue_woocommerce_style(){
	wp_register_style( 'mytheme-woocommerce', get_template_directory_uri() . '/css/woocommerce/woocommerce.css' );
	
	if ( class_exists( 'woocommerce' ) ) {
		wp_enqueue_style( 'mytheme-woocommerce' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_enqueue_woocommerce_style' );

/* Create custom WooCommerce empty cart page */
if ( ! function_exists( 'et_core_intentionally_unescaped' ) ) {
	function et_core_intentionally_unescaped( $string, $context ) {
		if ( function_exists( 'wp_check_invalid_utf8' ) && ! wp_check_invalid_utf8( $string ) && current_user_can( 'unfiltered_html' ) ) {
			return wp_kses_post( $string );
		} else {
			return $string;
		}
	}
}

// empty woocommerce cart text personalized
function ds_custom_wc_empty_cart_text()
{
   ob_start();?>
<div class="cart-empty">
	<div class="empty-cart-header">
		<?php woocommerce_breadcrumb(); ?>
	</div>
	<div class="empty-cart">
		<span class="empty-cart-icon"><i class="bi bi-cart"></i></span>
		<h2>Your Cart Is Currently Empty!</h2>
		<p> Looks like you have not made your choice yet. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
	</div>
</div>
	<?php
	$output = ob_get_clean();
	ob_flush();
	echo et_core_intentionally_unescaped($output, "html");
	// echo $output;
}
remove_action( 'woocommerce_cart_is_empty', 'wc_empty_cart_message', 10 );
add_filter('woocommerce_cart_is_empty', 'ds_custom_wc_empty_cart_text', 20 );

/** XOO-CART EMPTY CART REPLACE THE EMPTY TEXT**/
// This function replaces the default "Your cart is empty" text that appears on the cart page when the user has no items in their cart with a custom HTML content. Here's how it works:
// The replace_empty_text function is hooked to the xoo_wsc_cart_body_args filter using add_filter.
// When the filter is triggered, the replace_empty_text function is called with an array of arguments ($args) that are passed to the cart_body function.
// The replace_empty_text function starts by calling ob_start(), which begins output buffering.
// Then, it calls ds_custom_wc_empty_cart_text(), which is another function that generates the custom HTML content to be used as the new empty cart message.
// Instead of immediately outputting the custom HTML content generated by ds_custom_wc_empty_cart_text(), the output is captured by the output buffer started in step 3.
// The captured output is then assigned to the $args['emptyText'] array key, which replaces the default "Your cart is empty" text with the custom HTML content.
// Finally, the function returns the modified $args array with the custom HTML content in the emptyText key.
// When the cart_body function returns its output, the modified $args array is passed to the xoo_wsc_cart_body_args filter, which now contains the custom HTML content generated by ds_custom_wc_empty_cart_text().
function replace_empty_text( $args ) {
    ob_start();
    ds_custom_wc_empty_cart_text();
    $args['emptyText'] = ob_get_clean();
    return $args;
}
add_filter( 'xoo_wsc_cart_body_args', 'replace_empty_text' );

/** styling cart **/


// Custom function to modify the WooCommerce cart item thumbnail
function my_custom_wc_cart_item_thumbnail( $thumbnail, $cart_item, $cart_item_key ) {
	// Get the product ID for the cart item
	$product_id = $cart_item['product_id'];
	// Get the product thumbnail URL
	$thumbnail_url = get_the_post_thumbnail_url( $product_id, 'thumbnail' );
	// Create a new thumbnail image with custom styling
	$thumbnail = '<img src="' . $thumbnail_url . '" style="width: 6rem; height: 6rem; border-radius: 50%;">';
	// Return the modified thumbnail image
	return $thumbnail;
}
add_filter( 'woocommerce_cart_item_thumbnail', 'my_custom_wc_cart_item_thumbnail', 10, 3 );

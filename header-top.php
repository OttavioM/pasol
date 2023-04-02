<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pasol
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'pasol' ); ?></a>

    <div class="announcement-bar pt-0.3 pb-3">
        <div class="container">
            <div class="row">
                <!-- FOR NOT MOBILE there is a menu -->
                <div class="col-md-4 d-flex justify-content-start col-sm-12 pb-3">
                    <ul class="announcement-bar__list" > 
                        <li>
                            <!-- <i class="bi bi-info-circle"></i> -->
                            <a href="Contact Us">Contact Us</a>
                        </li>
                    </ul>

                </div>
                <div class="col-md-8 d-flex justify-content-end col-sm-12">
                    <ul class="announcement-bar__list" > 
                        <li class = "pb-3">
                                <?php aws_get_search_form( true ); ?>
                        </li>
                        <li>                            
                            <a href="Account"><i class="bi bi-person"></i></a>
                        </li> 

                        <div class="col cart d-flex justify-content-end align-center pt-2">
                            <a href="<?php echo wc_get_cart_url(); ?>"><i class="bi bi-cart4"></i></a>
                            <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?></a>
                        </div> 
                    </ul>
                </div>
                <!-- FOR MOBILE TEXT -->
                <div class = "announcement-bar__mobile">
                    <p class ="text-center pt-2"> MOBILE TEXT </p>
                </div>
            </div>
        </div>    
    </div>

<?php
/**
 * Single product short description
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/short-description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $post;

$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );

if ( ! $short_description ) {
	return;
}

?>
<div class="woocommerce-product-details__short-description">
	<?php echo $short_description; // WPCS: XSS ok. ?>
	<div class="wp-block-kadence-accordion" id="accordionExample">
  <div class="accordion-item">
		<h2 class="accordion-header" id="headingOne">
		  <button
			class="accordion-button"
			type="button"
			data-mdb-toggle="collapse"
			data-mdb-target="#collapseOne"
			aria-expanded="true"
			aria-controls="collapseOne"
		  >
			Accordion Item #1
		  </button>
		</h2>
		<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-mdb-parent="#accordionExample">
		  <div class="accordion-body">
			<strong>This is the first item's accordion body.</strong> It is hidden by default,
			until the collapse plugin adds the appropriate classes that we use to style each
			element. These classes control the overall appearance, as well as the showing and
			hiding via CSS transitions. You can modify any of this with custom CSS or
			overriding our default variables. It's also worth noting that just about any HTML
			can go within the <strong>.accordion-body</strong>, though the transition does
			limit overflow.
		  </div>
		</div>
	  </div>
	  <div class="accordion-item">
		<h2 class="accordion-header" id="headingTwo">
		  <button
			class="accordion-button collapsed"
			type="button"
			data-mdb-toggle="collapse"
			data-mdb-target="#collapseTwo"
			aria-expanded="false"
			aria-controls="collapseTwo"
		  >
			Accordion Item #2
		  </button>
		</h2>
		<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-mdb-parent="#accordionExample">
		  <div class="accordion-body">
			<strong>This is the second item's accordion body.</strong> It is hidden by
			default, until the collapse plugin adds the appropriate classes that we use to
			style each element. These classes control the overall appearance, as well as the
			showing and hiding via CSS transitions. You can modify any of this with custom CSS
			or overriding our default variables. It's also worth noting that just about any
			HTML can go within the <strong>.accordion-body</strong>, though the transition
			does limit overflow.
		  </div>
		</div>
	  </div>
	  <div class="accordion-item">
		<h2 class="accordion-header" id="headingThree">
		  <button
			class="accordion-button collapsed"
			type="button"
			data-mdb-toggle="collapse"
			data-mdb-target="#collapseThree"
			aria-expanded="false"
			aria-controls="collapseThree"
		  >
			Accordion Item #3
		  </button>
		</h2>
		<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-mdb-parent="#accordionExample">
		  <div class="accordion-body">
			<strong>This is the third item's accordion body.</strong> It is hidden by default,
			until the collapse plugin adds the appropriate classes that we use to style each
			element. These classes control the overall appearance, as well as the showing and
			hiding via CSS transitions. You can modify any of this with custom CSS or
			overriding our default variables. It's also worth noting that just about any HTML
			can go within the <strong>.accordion-body</strong>, though the transition does
			limit overflow.
		  </div>
		</div>
	  </div>
	</div>
</div>

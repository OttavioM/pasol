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
	 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<div class="accordion" id="accordionExample">
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
	
	<p>
	KADENCE accordion
	</p>
	
	<div class="wp-block-kadence-accordion aligncenter"><div class="kt-accordion-wrap kt-accordion-id_568fdb-8e kt-accordion-has-2-panes kt-active-pane-0 kt-accordion-block kt-pane-header-alignment-left kt-accodion-icon-style-basic kt-accodion-icon-side-right" style="max-width:none"><div class="kt-accordion-inner-wrap kt-accordion-initialized" data-allow-multiple-open="false" data-start-open="0">
<div class="wp-block-kadence-pane kt-accordion-pane kt-accordion-pane-1 kt-pane_157bfe-7d"><div class="kt-accordion-header-wrap"><button class="kt-blocks-accordion-header kt-acccordion-button-label-show kt-accordion-panel-active" id="kt-accordion-header-334576" aria-controls="kt-accordion-panel-334576" data-kt-accordion-header-id="0" aria-expanded="true"><span class="kt-blocks-accordion-title-wrap"><span class="kt-blocks-accordion-title">What’s Inside</span></span><span class="kt-blocks-accordion-icon-trigger"></span></button></div><div class="kt-accordion-panel kt-accordion-panel-active" id="kt-accordion-panel-334576" aria-labelledby="kt-accordion-header-334576" role="region" style="" data-panel-height="224px"><div class="kt-accordion-panel-inner">
<p><strong>Ingredients</strong>: water, dimethicone, glycerin, cocos nucifera (coconut) oil, cetearyl alcohol, pelvetia canaliculata extract, niacinamide, sea water, musa sapientum (banana) fl ower extract, musa sapientum (banana) fruit extract, musa sapientum (banana) leaf extract, musa sapientum (banana) peel extract, musa sapientum (banana) pulp extract, cocos nucifera (coconut) fruit extract, helianthus annuus (sunfl ower) extract, tocopherol, lactobacillus, lactobacillus ferment, lysolecithin, glucose, pullulan, sclerotium gum, xanthan gum, arachidyl alcohol, arachidyl glucoside, behenyl alcohol, cetearyl glucoside, citric acid, phenoxyethanol, ethylhexylglycerin</p>
</div></div></div>



<div class="wp-block-kadence-pane kt-accordion-pane kt-accordion-pane-2 kt-pane_b37d54-9d"><div class="kt-accordion-header-wrap"><button class="kt-blocks-accordion-header kt-acccordion-button-label-show" id="kt-accordion-header-58903" aria-controls="kt-accordion-panel-58903" data-kt-accordion-header-id="1"><span class="kt-blocks-accordion-title-wrap"><span class="kt-blocks-accordion-title">How To Use</span></span><span class="kt-blocks-accordion-icon-trigger"></span></button></div><div class="kt-accordion-panel kt-accordion-panel-hidden" id="kt-accordion-panel-58903" aria-labelledby="kt-accordion-header-58903" role="region" data-panel-height="0px"><div class="kt-accordion-panel-inner">
<p>Apply one to two pumps onto fingertips and apply all over face and under eyes. Allow serum to absorb completely into skin before applying eye cream. Can be used in the morning and at night.</p>
</div></div></div>
</div></div></div>

</div>

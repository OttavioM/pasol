<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pasol
 */

get_header('top');
get_header('logo');
// get_header('tot');

?>

	<main id="primary" class="site-main">
		<!-- SLIDER -->
		<section class="container-liquid">
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
					<img src="<?php echo get_template_directory_uri();?>/img/slider/slide-1.png " class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>First slide label</h5>
						<p>Some representative placeholder content for the first slide.</p>
					</div>
					</div>
					<div class="carousel-item">
					<img src="<?php echo get_template_directory_uri();?>/img/slider/slide-2.png " class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Second slide label</h5>
						<p>Some representative placeholder content for the second slide.</p>
					</div>
					</div>
					<div class="carousel-item">
					<img src="<?php echo get_template_directory_uri();?>/img/slider/slide-3.png " class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Third slide label</h5>
						<p>Some representative placeholder content for the third slide.</p>
					</div>
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</button>
			</div>
		</sectiion>
		<!-- END SLIDER -->

		<!-- POPULAR PRODUCTS -->
		<section class = "container">

		<!-- op1 -->
		<!-- <div class="row d-flex justify-content-center">
			<h1 class = "text-center pt-5">The Goods</h1>	
			<p class="w-25">
				Our products are naturally composed and reef safe
			</p>
		</div> -->
		<!-- op2 -->
		<h1 class = "text-center pt-5">The Goods</h1>
		<p class="text-center">
				Our products are naturally <br>composed and reef safe
		</p>

		<div class = "pt-5 pb-5">
		
			<?php echo do_shortcode('[products columns=4 limit=4]'); ?>
		
		</div<>
		</section>
		<!-- END POPULAR PRODUCTS -->

		<!-- First post -->
		<section class = "container-fluid__pink pt-5 pb-5">
		<div class="row">
			<div class="first-post__image col-md-5 col-sm-11">
				<a href = "#">
					<img src="<?php echo get_template_directory_uri();?>/img/reef_proj/reef_protection.jpg " class="d-block w-100" alt="...">
				</a>
			</div>

			<div class="first-post__col col-md-2 col-sm-12">
			</div>

			<div class="first-post__col col-md-4 col-sm-12 justify-content-end align-center pt-sm-5 pt-md-0">
				<h1 class="text-center "> REEF SAFE </h1>
				
				<p class="text-center">Controbute to the planet, each purchase seed a coral</p>
			</div>
		</div>	
		</section>

		<!-- Second post -->
		<!-- <section class = "container-fluid__white pt-5 pb-5">
		<div class="row">
			<div class="first-post__image col-md-5 col-sm-11">
				<a href = "#">
					<img src="<?php echo get_template_directory_uri();?>/img/reef_proj/reef_protection.jpg " class="d-block w-100" alt="...">
				</a>
			</div>

			<div class="first-post__col col-md-2 col-sm-12">
			</div>

			<div class="first-post__col col-md-4 col-sm-12 justify-content-end align-center pt-sm-5 pt-md-0">
				<h1 class="text-center "> SUN PROTECTION GUIDE </h1>
				<p class="text-center">Controbute to the planet, each purchase seed a coral</p>
			</div>
		</div>	
		</section> -->

		<!-- Third post -->
		<!-- <section class = "container-fluid__blue pt-5 pb-5">
		<div class="row">
			<div class="first-post__image col-md-5 col-sm-11">
				<a href = "#">
					<img src="<?php echo get_template_directory_uri();?>/img/reef_proj/reef_protection.jpg " class="d-block w-100" alt="...">
				</a>
			</div>

			<div class="first-post__col col-md-2 col-sm-12">
			</div>

			<div class="first-post__col col-md-4 col-sm-12 justify-content-end align-center pt-sm-5 pt-md-0">
				<h1 class="text-center "> WHY CHOOSE PASOL </h1>
				<p class="text-center">Controbute to the planet, each purchase seed a coral</p>
			</div>
		</div>	
		</section> -->

		<!-- <?php front_page_post("/img/reef_proj/reef_protection.jpg ","ciao","testo","white") ?> -->
		<div class="wp-block-kadence-accordion aligncenter"><div class="kt-accordion-wrap kt-accordion-id_568fdb-8e kt-accordion-has-2-panes kt-active-pane-0 kt-accordion-block kt-pane-header-alignment-left kt-accodion-icon-style-basic kt-accodion-icon-side-right" style="max-width:none"><div class="kt-accordion-inner-wrap kt-accordion-initialized" data-allow-multiple-open="false" data-start-open="0">
<div class="wp-block-kadence-pane kt-accordion-pane kt-accordion-pane-1 kt-pane_157bfe-7d"><div class="kt-accordion-header-wrap"><button class="kt-blocks-accordion-header kt-acccordion-button-label-show kt-accordion-panel-active" id="kt-accordion-header-334576" aria-controls="kt-accordion-panel-334576" data-kt-accordion-header-id="0" aria-expanded="true"><span class="kt-blocks-accordion-title-wrap"><span class="kt-blocks-accordion-title">What’s Inside</span></span><span class="kt-blocks-accordion-icon-trigger"></span></button></div><div class="kt-accordion-panel kt-accordion-panel-active" id="kt-accordion-panel-334576" aria-labelledby="kt-accordion-header-334576" role="region" style="" data-panel-height="224px"><div class="kt-accordion-panel-inner">
<p><strong>Ingredients</strong>: water, dimethicone, glycerin, cocos nucifera (coconut) oil, cetearyl alcohol, pelvetia canaliculata extract, niacinamide, sea water, musa sapientum (banana) fl ower extract, musa sapientum (banana) fruit extract, musa sapientum (banana) leaf extract, musa sapientum (banana) peel extract, musa sapientum (banana) pulp extract, cocos nucifera (coconut) fruit extract, helianthus annuus (sunfl ower) extract, tocopherol, lactobacillus, lactobacillus ferment, lysolecithin, glucose, pullulan, sclerotium gum, xanthan gum, arachidyl alcohol, arachidyl glucoside, behenyl alcohol, cetearyl glucoside, citric acid, phenoxyethanol, ethylhexylglycerin</p>
</div></div></div>



<div class="wp-block-kadence-pane kt-accordion-pane kt-accordion-pane-2 kt-pane_b37d54-9d"><div class="kt-accordion-header-wrap"><button class="kt-blocks-accordion-header kt-acccordion-button-label-show" id="kt-accordion-header-58903" aria-controls="kt-accordion-panel-58903" data-kt-accordion-header-id="1"><span class="kt-blocks-accordion-title-wrap"><span class="kt-blocks-accordion-title">How To Use</span></span><span class="kt-blocks-accordion-icon-trigger"></span></button></div><div class="kt-accordion-panel kt-accordion-panel-hidden" id="kt-accordion-panel-58903" aria-labelledby="kt-accordion-header-58903" role="region" data-panel-height="0px"><div class="kt-accordion-panel-inner">
<p>Apply one to two pumps onto fingertips and apply all over face and under eyes. Allow serum to absorb completely into skin before applying eye cream. Can be used in the morning and at night.</p>
</div></div></div>
</div></div></div>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer('logo');

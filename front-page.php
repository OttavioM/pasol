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
		
		<p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Enlace con href
  </a>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Botón con data-bs-target
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    Algún contenido placeholder para el componente de contracción. Este panel está oculto de forma predeterminada, pero se revela cuando el usuario activa el disparador correspondiente.
  </div>
</div>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer('logo');

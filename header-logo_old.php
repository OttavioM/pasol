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
	<!-- CODICI MIEI -->
	<!-- <script src= <?php echo get_template_directory_uri() .'/js/hideHeaderOnScroll.js'; ?>> </script> -->
	
	<!-- NON TOCCARE -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'pasol' ); ?></a>
	
	<header id="masthead" class="site-header">

		<div class="container pt-2 pb-2">
			<div class="row align-items-center">
				
				<!-- <div class="col-md-5 ">
					<?php aws_get_search_form( true ); ?>
				</div> -->

				<div class="col site-header__logo d-flex justify-content-center pt-3">
					<?php the_custom_logo();  ?>
					
				</div>

			</div>
		</div>

		<!-- <div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$pasol_description = get_bloginfo( 'description', 'display' );
			if ( $pasol_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $pasol_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div> --> <!--.site-branding -->

		<!-- MENU NAVIGATION -->
		<nav id="site-navigation" class="main-navigation">
			<div class="container d-flex justify-content-center">
				<div class="row">
					<div class="col-12 d-felx justify-content-center">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<i class="bi bi-list"></i>
							<?php esc_html_e( 'Menu', 'pasol' ); ?>
						</button>
					</div>
 
					<div class="col-12 text-center">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
						?>
					</div>

				</div>
			</div>
		</nav><!-- #site-navigation -->


		<?php echo '<hr class="gray-line">';?>
	</header><!-- #masthead -->

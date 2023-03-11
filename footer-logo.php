<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pasol
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="info-site-footer pt-5 pb-5">
			<div class="container">
				<div class="row">
					<div class="col site-footer__logo d-flex justify-content-center pt-3">
						<?php the_custom_logo();  ?>
					</div>

					<div class="col-2">
						Support
					</div>

					<div class="col-2">
						About
					</div>

					<div class="col-2">
						Legal
					</div>

					<div class="col-md-4 ms-auto">
						Keep in Touch
					</div>
				</div>
			</div>		
		</div><!-- .site-info -->

		<div class="container pt-2 pb-2">
			<div class="row d-flex align-items-center">
				<div class="col">
					<p>&copy; <?php bloginfo('name');?> <?php echo date('Y');?> 
				</div>
				<div class="col h-25 d-inline-block text-end">
					<img src="<?php echo get_template_directory_uri();?>/img/payment_image1.png" alt = "..." class="img-fluid " max-width= 10rem; loading = "lazy">
				</div>
			</div>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

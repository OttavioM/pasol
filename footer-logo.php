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
						Support </br>
						<?php
							$support_links = create_links(
								'Contact Us', 'https://www.example.com/contact',
								'FAQs', 'https://www.example.com/faqs',
								'Shipping & Returns', 'https://www.example.com/docs'
							);
							echo $support_links;
						?>
					</div>

					<div class="col-2">
						About </br>
						<?php
							$about_links = create_links(
								'About Us', 'https://www.example.com/contact',
								'Our Partners', 'https://www.example.com/faqs',
								'Reef Planting', 'https://www.example.com/docs',
								'Tree Planting', 'https://www.example.com/docs'
							);
							echo $about_links;
						?>
					</div>

					<div class="col-2">
						Legal </br>
						<?php
							$legal_links = create_links(
								'Terms Of Use', 'https://www.example.com/contact',
								'Privacy Policy', 'https://www.example.com/faqs',
								'Subscrition Policy', 'https://www.example.com/docs',
								'Accessibility', 'https://www.example.com/docs'
							);
							echo $legal_links;
						?>
					</div>

					<div class="col-md-4 ms-auto text-center">
						<b>Keep in Touch</b> </br>
						<?php
							$instagram_link = create_links('<i class="bi bi-instagram"></i>', 'https://www.instagram.com/');
							$facebook_link = create_links('<i class="bi bi-facebook"></i>', 'https://www.facebook.com/');
							$tiktok_link = create_links('<i class="bi bi-tiktok"></i>', 'https://www.tiktok.com/');
							
							echo $instagram_link;
							echo $facebook_link;
							echo $tiktok_link;
						?>
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

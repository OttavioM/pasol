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
								'Terms Of Use', 'aa',
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
			</div><!-- .site-info -->

			</div>		
			<div class="site-footer__mobile">
				<div class="col-12">
				<button class="btn btn-link" data-toggle="collapse" data-target=".support-links" aria-expanded="false" aria-controls="support-links">
					Support <span class="plus">+</span>
				</button>
				<div class="collapse support-links">
					<ul>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">Customer Service</a></li>
				</ul>
			</div>
		</div>
			<div class="col-12">
				<button class="btn btn-link" data-toggle="collapse" data-target=".about-links" aria-expanded="false" aria-controls="about-links">
					About <span class="plus">+</span>
				</button>
				<div class="collapse about-links">
					<ul>
						<li><a href="#">Our Story</a></li>
						<li><a href="#">Leadership</a></li>
						<li><a href="#">Investors</a></li>
					</ul>
				</div>
			</div>
			<div class="col-12">
				<button class="btn btn-link" data-toggle="collapse" data-target=".legal-links" aria-expanded="false" aria-controls="legal-links">
					Legal <span class="plus">+</span>
				</button>
				<div class="collapse legal-links">
					<ul>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms of Use</a></li>
						<li><a href="#">Disclaimer</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="container pt-2 pb-2">
			<div class="row d-flex">
				<div class="col">
					<p class = "pt-1" >&copy; <?php bloginfo('name');?> <?php echo date('Y');?> 
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

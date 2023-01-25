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
		<div class="site-info">
			<?php
				$links = array(
				  array(
					array('text' => 'Link 1', 'href' => '/link-1'),
					array('text' => 'Link 2', 'href' => '/link-2'),
					array('text' => 'Link 3', 'href' => '/link-3'),
					array('text' => 'Link 4', 'href' => '/link-4'),
					array('text' => 'Link 5', 'href' => '/link-5')
				  ),
				  array(
					array('text' => 'Link 6', 'href' => '/link-6'),
					array('text' => 'Link 7', 'href' => '/link-7'),
					array('text' => 'Link 8', 'href' => '/link-8'),
					array('text' => 'Link 9', 'href' => '/link-9'),
					array('text' => 'Link 10', 'href' => '/link-9'))
				  );
				
			?>
			<?php generateFooter($links) ?>
		
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

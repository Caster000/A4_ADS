<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Interium
 */

?>

	</div><!-- #content -->

	<footer id="colophon" <?php echo interium_get_container_classes( 'site-footer' ); ?>>
		<?php interium_theme()->do_location( 'footer', 'template-parts/footer' ); ?>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

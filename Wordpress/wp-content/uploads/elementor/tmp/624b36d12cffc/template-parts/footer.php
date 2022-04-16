<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package Interium
 */
?>

<?php do_action( 'interium-theme/widget-area/render', 'footer-area' ); ?>

<div <?php interium_footer_class(); ?>>
	<div class="space-between-content"><?php
		interium_footer_copyright();
		interium_social_list( 'footer' );
	?></div>
</div><!-- .container -->

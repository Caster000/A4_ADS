<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Interium
 */

?>

<?php

do_action( 'interium-theme/sidebar/before' );

if ( is_active_sidebar( 'sidebar' ) && 'none' !== interium_theme()->sidebar_position ) : ?>
	<aside id="secondary" <?php interium_secondary_content_class( array( 'widget-area' ) ); ?>>
		<?php dynamic_sidebar( 'sidebar' ); ?>
	</aside><!-- #secondary -->
<?php endif;

do_action( 'interium-theme/sidebar/after' );

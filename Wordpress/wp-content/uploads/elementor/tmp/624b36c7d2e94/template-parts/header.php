<?php
/**
 * Template part for default Header layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Interium
 */
?>

<?php get_template_part( 'template-parts/top-panel' ); ?>

<div <?php interium_header_class(); ?>>
	<?php do_action( 'interium-theme/header/before' ); ?>
	<div class="space-between-content">
		<div <?php interium_site_branding_class(); ?>>
			<?php interium_header_logo(); ?>
		</div>
		<?php interium_main_menu(); ?>
	</div>
	<?php do_action( 'interium-theme/header/after' ); ?>
</div>

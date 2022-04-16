<?php
/**
 * Template part for displaying creative posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Interium
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'posts-list__item creative-item invert-hover' ); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="creative-item__thumbnail" <?php interium_post_overlay_thumbnail( 'interium-thumb-m' ); ?>></div>
	<?php endif; ?>

	<header class="entry-header">
		<?php
			interium_posted_in();
			interium_posted_on( array(
				'prefix' => __( 'Posted', 'interium' )
			) );
		?>
		<h4 class="entry-title"><?php
			interium_sticky_label();
			the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
		?></h4>
	</header><!-- .entry-header -->

	<?php interium_post_excerpt(); ?>

	<footer class="entry-footer">
		<div class="entry-meta">
			<div>
				<?php
					interium_posted_by();
					interium_post_comments( array(
						'prefix' => '<i class="fa fa-comment" aria-hidden="true"></i>'
					) );
					interium_post_tags( array(
						'prefix' => __( 'Tags:', 'interium' )
					) );
				?>
			</div>
			<?php
				interium_post_link();
			?>
		</div>
		<?php interium_edit_link(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->

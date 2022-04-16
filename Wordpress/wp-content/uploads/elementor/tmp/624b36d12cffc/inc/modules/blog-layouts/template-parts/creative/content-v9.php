<?php
/**
 * Template part for displaying creative posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Interium
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'posts-list__item creative-item' ); ?>>

	<?php
		if ( has_post_thumbnail() ) {
			?><div class="post-thumbnail" <?php interium_post_overlay_thumbnail( 'interium-thumb-l' ); ?>></div><?php
		}
	?>

	<div class="creative-item__content">

		<header class="entry-header">
			<h4 class="entry-title"><?php
				interium_sticky_label();
				the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
			?></h4>
		</header><!-- .entry-header -->

		<?php interium_post_excerpt(); ?>

		<footer class="entry-footer">
			<div class="entry-meta"><?php
				interium_posted_in();
				interium_posted_by();
				interium_posted_on( array(
					'prefix' => __( 'Posted', 'interium' )
				) );
				interium_post_tags( array(
					'prefix' => __( 'Tags:', 'interium' )
				) );
				?><div><?php
					interium_post_link();
					interium_post_comments( array(
						'prefix' => '<i class="fa fa-comment" aria-hidden="true"></i>',
					) );
				?></div>
			</div>
			<?php interium_edit_link(); ?>
		</footer><!-- .entry-footer -->

	</div>

</article><!-- #post-<?php the_ID(); ?> -->

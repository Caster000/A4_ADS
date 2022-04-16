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
		<div class="creative-item__thumbnail" <?php interium_post_overlay_thumbnail(); ?>></div>
	<?php endif; ?>

	<div class="container">

		<?php if ( interium_theme()->customizer->get_value( 'blog_post_categories' ) ) : ?>
			<div class="creative-item__before-content"><?php
				interium_posted_in( array(
					'prefix'    => '',
					'delimiter' => '',
					'before'    => '<div class="cat-links">',
					'after'     => '</div>'
				) );
			?></div>
		<?php endif; ?>

		<div class="creative-item__content">
			<header class="entry-header">
				<h3 class="entry-title"><?php
					interium_sticky_label();
					the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
				?></h3>
			</header><!-- .entry-header -->

			<?php interium_post_excerpt(); ?>

			<footer class="entry-footer">
				<div class="entry-meta">
					<div>
						<?php
							interium_posted_by();
							interium_posted_on( array(
								'prefix' => __( 'Posted', 'interium' )
							) );
							interium_post_tags( array(
								'prefix' => __( 'Tags:', 'interium' )
							) );
						?>
					</div>
					<?php
						interium_post_comments( array(
							'postfix' => __( 'Comment(s)', 'interium' )
						) );
					?>
				</div>
				<?php interium_edit_link(); ?>
			</footer><!-- .entry-footer -->
		</div>

		<?php if ( 'none' !== interium_theme()->customizer->get_value( 'blog_read_more_type' ) ) : ?>
			<div class="creative-item__after-content"><?php
				interium_post_link();
			?></div>
		<?php endif; ?>

	</div>

</article><!-- #post-<?php the_ID(); ?> -->

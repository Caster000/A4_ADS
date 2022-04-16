<?php
/**
 * Template part for displaying style-v9 posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package interium
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'posts-list__item justify-item' ); ?>>
	<div class="justify-item-inner">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="justify-item__thumbnail" <?php interium_post_overlay_thumbnail( interium_justify_thumbnail_size(1) );?>></div>
		<?php endif; ?>
		<div class="justify-item-wrap">
			<header class="entry-header">
				<div class="entry-meta">
					<?php
					interium_posted_by();
					interium_posted_in( array(
						'prefix' => __( 'In', 'interium' ),
						'delimiter' => ', '
					) );
					interium_posted_on( array(
						'prefix' => '',
					) );
					?>
				</div><!-- .entry-meta -->
				<h4 class="entry-title"><?php
					interium_sticky_label();
					the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
				?></h4>
			</header><!-- .entry-header -->
			<div class="justify-item-wrap__animated">
				<?php interium_post_excerpt(); ?>
				<footer class="entry-footer">
					<div class="entry-meta">
						<?php

						$post_more_btn_enabled = strlen( interium_theme()->customizer->get_value( 'blog_read_more_text' ) ) > 0 ? true : false;
						$post_comments_enabled = interium_theme()->customizer->get_value( 'blog_post_comments' );

						if( $post_more_btn_enabled || $post_comments_enabled ) {
							?><div class="space-between-content"><?php
							interium_post_link();
							interium_post_comments( array(
								'postfix' => __( 'comments', 'interium' ),
							) );
							interium_post_tags();
							?></div><?php
						}
						?>
					</div>
				</footer><!-- .entry-footer -->
			</div><!-- .justify-item-wrap__animated-->
		</div><!-- .justify-item-wrap-->
	</div><!-- .justify-item-inner-->
	<?php interium_edit_link(); ?>
</article><!-- #post-<?php the_ID(); ?> -->
<?php
/**
 * Template part for displaying style-v8 posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package interium
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'posts-list__item justify-item' ); ?>>
	<div class="justify-item-inner invert">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="justify-item__thumbnail" <?php interium_post_overlay_thumbnail( interium_justify_thumbnail_size(1) );?>></div>
		<?php endif; ?>
		<div class="justify-item-wrap">
			<div class="entry-meta__top">
				<?php
					interium_posted_in( array(
						'prefix' => '',
						'delimiter' => ''
					) );
					interium_post_tags();
				?>
			</div><!-- .entry-meta -->
			<header class="entry-header">
				<h4 class="entry-title"><?php
					interium_sticky_label();
					the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
				?></h4>
			</header><!-- .entry-header -->
			<div class="justify-item-wrap__animated">
				<?php interium_post_excerpt(); ?>
				<?php interium_post_link(); ?>
			</div><!-- .justify-item-wrap__animated-->
			<footer class="entry-footer">
				<div class="entry-meta">
					<?php
					interium_posted_by();
					interium_posted_on( array(
						'prefix' => __( 'Posted ', 'interium' ),
					) );
					interium_post_comments( array(
						'postfix' => __( 'comments', 'interium' ),
					) );
					?>
				</div>
			</footer><!-- .entry-footer -->
		</div><!-- .justify-item-wrap-->
	</div><!-- .justify-item-inner-->
	<?php interium_edit_link(); ?>
</article><!-- #post-<?php the_ID(); ?> -->
<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Interium
 */

$has_post_thumbnail = has_post_thumbnail();
$has_post_thumbnail_class = $has_post_thumbnail ? 'invert' : '';
?>

<div class="single-header-7 <?php echo esc_attr( $has_post_thumbnail_class ); ?>">
	<?php if ( $has_post_thumbnail ) : ?>
		<div class="overlay-thumbnail" <?php interium_post_overlay_thumbnail( 'interium-thumb-xl' ); ?>></div>
	<?php endif; ?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-lg-8 col-lg-push-2">
				<div class="entry-header-top"><?php
					interium_posted_in( array(
						'delimiter' => '',
						'before'    => '<div class="cat-links btn-style">',
						'after'     => '</div>'
					) );
					interium_posted_on( array(
						'prefix'  => '<i class="fa fa-clock-o" aria-hidden="true"></i> ' . __( 'Posted', 'interium' ),
						'before'  => '<div class="posted-on">',
						'after'   => '</div>',
					) );
				?></div>
				<header class="entry-header">
					<?php get_template_part( 'template-parts/single-post/author-bio' ); ?>
					<?php the_title( '<h1 class="entry-title h3-style">', '</h1>' ); ?>
				</header><!-- .entry-header -->
				<div class="entry-header-bottom">
					<div class="entry-meta"><?php
						interium_post_tags ( array(
							'prefix'    => '<i class="fa fa-tag" aria-hidden="true"></i>',
						) );
						interium_post_comments( array(
							'prefix'    => '<i class="fa fa-comment-o" aria-hidden="true"></i>',
							'postfix' => __( 'Comment(s)', 'interium' )
						) );
					?></div><!-- .entry-meta -->
				</div>
			</div>
		</div>
	</div>
</div>
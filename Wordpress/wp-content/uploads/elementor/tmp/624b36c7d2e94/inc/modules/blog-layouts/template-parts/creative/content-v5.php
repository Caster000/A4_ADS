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

	<?php $title = get_the_title(); ?>

	<div class="creative-item__title-first-letter">
		<?php echo substr($title, 0, 1); ?>
	</div>

	<div class="creative-item__content">
		<header class="entry-header">
			<?php
				interium_posted_in();
			?>
			<h3 class="entry-title"><?php
				interium_sticky_label();
				the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
			?></h3>
		</header><!-- .entry-header -->

		<?php interium_post_excerpt(); ?>
	</div>

	<footer class="entry-footer">
		<div class="entry-meta">
			<div>
				<?php
					interium_posted_by();
					interium_posted_on( array(
						'prefix' => __( 'Posted', 'interium' )
					) );
					interium_post_comments( array(
						'postfix' => __( 'Comment(s)', 'interium' )
					) );
				?>
			</div>
			<?php
				interium_post_tags( array(
					'prefix' => __( 'Tags:', 'interium' )
				) );
				interium_post_link();
			?>
		</div>
		<?php interium_edit_link(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->

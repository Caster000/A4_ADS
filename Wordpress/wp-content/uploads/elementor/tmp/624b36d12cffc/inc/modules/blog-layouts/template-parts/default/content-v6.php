<?php
/**
 * Template part for displaying default posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Interium
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('posts-list__item default-item'); ?>>

	<?php interium_post_thumbnail( 'interium-thumb-m' ); ?>

	<div class="default-item__content">

		<header class="entry-header">
			<h4 class="entry-title"><?php
				interium_sticky_label();
				the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
			?></h4>
			<div class="entry-meta">
				<?php
					interium_posted_by();
					interium_posted_in( array(
						'prefix' => __( 'In', 'interium' ),
					) );
					interium_posted_on( array(
						'prefix' => __( 'Posted', 'interium' )
					) );
				?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->

		<?php interium_post_excerpt(); ?>

		<footer class="entry-footer">
			<div class="entry-meta">
				<?php
					interium_post_tags( array(
						'prefix' => __( 'Tags:', 'interium' )
					) );
				?>
				<div><?php
					interium_post_link();
					interium_post_comments( array(
						'prefix' => '<i class="fa fa-comment" aria-hidden="true"></i>',
						'class'  => 'comments-button'
					) );
				?></div>
			</div>
			<?php interium_edit_link(); ?>
		</footer><!-- .entry-footer -->

	</div>

</article><!-- #post-<?php the_ID(); ?> -->

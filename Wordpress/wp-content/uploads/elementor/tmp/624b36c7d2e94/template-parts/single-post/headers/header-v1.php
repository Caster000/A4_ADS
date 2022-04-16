<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Interium
 */

?>

<header class="entry-header">
	<?php the_title( '<h1 class="entry-title h2-style">', '</h1>' ); ?>
	<div class="entry-meta">
		<?php
			interium_posted_by();
			interium_posted_in( array(
				'prefix'  => __( 'In', 'interium' ),
			) );
			interium_posted_on( array(
				'prefix'  => __( 'Posted', 'interium' ),
			) );
			interium_post_comments( array(
				'postfix' => __( 'Comment(s)', 'interium' ),
			) );
		?>
	</div><!-- .entry-meta -->
</header><!-- .entry-header -->

<?php interium_post_thumbnail( 'interium-thumb-l', array( 'link' => false ) ); ?>
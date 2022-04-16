<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Interium
 */

?>

<footer class="entry-footer">
	<div class="entry-meta"><?php
		interium_post_tags ( array(
			'prefix'    => __( 'Tags:', 'interium' ),
			'delimiter' => ''
		) );
	?></div>
</footer><!-- .entry-footer -->
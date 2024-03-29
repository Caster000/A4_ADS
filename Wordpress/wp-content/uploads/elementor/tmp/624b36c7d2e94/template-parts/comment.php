<?php do_action( 'interium-theme/comments/comment-before' ); ?>

<?php if ( ! empty( interium_comment_author_avatar() ) ) : ?>
<div class="comment-author vcard">
	<?php echo interium_comment_author_avatar(); ?>
</div>
<?php endif; ?>
<div class="comment-content-wrapper">
	<div class="comment-meta">
		<?php echo interium_get_comment_author_link(); ?>
		<?php echo interium_get_comment_date(); ?>
	</div>
	<div class="comment-content">
		<?php echo interium_get_comment_text(); ?>
	</div>
	<div class="reply">
		<?php echo interium_get_comment_reply_link( array( 'reply_text' => '<i class="fa fa-reply" aria-hidden="true"></i>' . esc_html__( 'reply', 'interium' ) ) ); ?>
	</div>
</div>

<?php do_action( 'interium-theme/comments/comment-after' ); ?>

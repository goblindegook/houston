<?php
/**
 * Front-end post form.
 *
 * @package P2
 */
?>

<?php $post_format = isset( $_GET['p'] ) ? $_GET['p'] : 'status'; ?>

<div id="postbox">

	<div class="postboxcontent">

		<div class="avatar">
			<?php echo get_avatar( get_current_user_id(), 240 ); ?>
		</div>

		<div class="inputarea">

			<form id="new_post" name="new_post" method="post" action="<?php echo site_url(); ?>/">
				<?php if ('status' == $post_format || 'standard' == $post_format || empty( $post_format )) : ?>
				<label for="posttext" id="post-prompt">
					<?php p2_user_prompt(); ?>
				</label>
				<?php endif; ?>
				<div class="inputs">
				
					<?php if ('standard' == $post_format || empty( $post_format )) : ?>
					<div class="postrow">
						<input type="text" name="posttitle" id="posttitle" value=""
							placeholder="<?php echo esc_attr( __( 'Post Title', 'p2' ) ); ?>" />
					</div>
					<?php endif; ?>

					<textarea class="expand70-200" name="posttext" id="posttext" rows="4" cols="60"></textarea>

					<label class="post-error" for="posttext" id="posttext_error"></label>
					<div class="postrow">
						<div id="media-buttons" class="hide-if-no-js">
							<?php p2_media_buttons(); ?>
						</div>
						<input id="tags" name="tags" type="text" autocomplete="off" value=""
							placeholder="<?php echo esc_attr( __( 'Tag it', 'p2' ) ); ?>" />
						<input id="submit" type="submit" value="<?php esc_attr_e( 'Post it', 'p2' ); ?>" />
					</div>
					<input type="hidden" name="post_format" id="post_format" value="<?php echo esc_attr( $post_format ); ?>" />
					<span class="progress spinner-post-new" id="ajaxActivity"></span>

					<?php do_action( 'p2_post_form' ); ?>

					<input type="hidden" name="action" value="post" />
					<?php wp_nonce_field( 'new-post' ); ?>
				</div>
			</form>

		</div>

	</div><!--/.postboxcontent -->

</div> <!-- // postbox -->

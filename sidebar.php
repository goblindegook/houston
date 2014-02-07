<?php
/**
 * Sidebar template.
 *
 * @package P2
 */
?>

<?php if (!p2_get_hide_sidebar()) : ?>

<div id="sidebar">
<?php do_action( 'before_sidebar' ); ?>

	<ul>
		<?php
			dynamic_sidebar( 'Sidebar' );
		?>
	</ul>

	<div class="clear"></div>

</div> <!-- // sidebar -->

<?php endif; ?>
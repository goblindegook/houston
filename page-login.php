<?php
/**
 * Template Name: Login
 *
 * Login page template.
 * 
 * @package P2
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class( 'theme-my-login' ); ?>>

<div id="header">
	<div class="header-inner">
	<?php do_action( 'before' ); ?>
		<div class="sleeve">
			<h1><a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			<?php if ( get_bloginfo( 'description' ) ) : ?>
				<small><?php bloginfo( 'description' ); ?></small>
			<?php endif; ?>
			<a class="secondary" href="<?php echo home_url( '/' ); ?>"></a>

			<?php if ( current_user_can( 'publish_posts' ) ) : ?>
				<a href="" id="mobile-post-button" style="display: none;"><?php _e( 'Post', 'p2' ) ?></a>
			<?php endif; ?>
		</div>
	</div>
</div>

<div id="wrapper">

	<div class="sleeve_main">

		<div id="main">
			<h2><?php the_title(); ?></h2>

			<ul id="postlist">
			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php p2_load_entry(); ?>
				<?php endwhile; ?>

			<?php endif; ?>
			</ul>

		</div> <!-- main -->

	</div> <!-- sleeve -->

	<div class="clear"></div>

</div> <!-- // wrapper -->

<div id="footer">
</div>

<div id="notify"></div>

<?php wp_footer(); ?>

</body>
</html>
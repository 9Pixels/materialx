<?php
/**
 *	The template for displaying the Footer.
 *
 *	@package WordPress
 *	@subpackage MaterialX
 */
?>
		<div class="left-sidebar sidebar-mobile">
			<?php get_sidebar("mobile"); ?>
		</div>

		<div class="clearfix"></div>
		<footer>
			<span class="alignleft">&copy; <?php echo date("Y") ?> <a href="<?php echo esc_url( get_site_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><span> &mdash; <?php printf( __( 'Powered by <a href="%s">WordPress</a>', 'materialx'), 'http://www.wordpress.org' ); ?></span></span><br\>			
			</footer>
	<?php wp_footer(); ?>
	</body>
</html>
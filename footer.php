<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fricolab_
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer page-footer teal lighten-2" role="contentinfo">
		<div id="footer-widgets" class="row container">

			<div id="footer-widget1" class="col s4">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
				<?php endif; ?>
			</div>

			<div id="footer-widget2" class="col s4">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) : ?>
				<?php endif; ?>
			</div>

			<div id="footer-widget3" class="col s4">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3') ) : ?>
				<?php endif; ?>
			</div>
		</div>
		<div style="clear-both"></div>
		<div class="container site-info center-align">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'fricolab-underscores' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'fricolab-underscores' ), 'WordPress' ); ?></a>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Transparency
 */

?>
	<a href="#" class="topbutton"><span class="hidden-xs">Back to Top </span><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php if ( is_active_sidebar( 'footer' ) ) : ?>
			<div class="container">
				<div id="footer-widgets" class="widget-area row" role="complementary">
					<?php dynamic_sidebar( 'footer' ); ?>
				</div><!-- #footer-widgets -->
			</div>
		<?php endif; ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
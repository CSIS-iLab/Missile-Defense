<?php
/**
 * The template for displaying all single defense systems.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Missile_Defense
 */

get_header(); ?>

<div id="primary" class="container">
	<div class="row">
		<main id="main" class="col-xs-12" role="main">
			
			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content-defsys-single', 'none' );
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- .row -->
</div><!-- #primary -->

<?php
get_footer();

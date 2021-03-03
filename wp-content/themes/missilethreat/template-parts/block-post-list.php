<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CSIS iLab
 * @subpackage @package MissileThreat
 * @since 1.0.0
 */

?>

<article <?php post_class('post-block post-block--list'); ?> id="post-<?php the_ID(); ?>">

	<?php
  the_title( '<h3 class="post-block__title"><a href="' . esc_url( get_permalink() ) . '" class="post-title--link">', '</a></h3>' );
  missilethreat_authors();
	?>

</article><!-- .post -->

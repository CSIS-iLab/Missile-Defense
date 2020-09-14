<?php
/**
 * The template for displaying ongoing project blocks
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CSIS iLab
 * @subpackage @package MissileThreat
 * @since 1.0.0
 */

?>

<article <?php post_class('project-block project-block--post'); ?> id="post-<?php the_ID(); ?>">



<a href=" <?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array('class' => 'project-block__thumbnail')); ?></a>	

<?php
	the_title( '<h3 class="project-block__title text--semibold"><a href="' . esc_url( get_permalink() ) . '">', '</a></h3>' );

	?>
	<div class="project-block__date">
		Last Updated <?php the_modified_date(); ?>
	</div>

</article><!-- .post -->

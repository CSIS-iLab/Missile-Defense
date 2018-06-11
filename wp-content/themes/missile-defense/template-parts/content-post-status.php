<?php
/**
 * Template part for displaying news posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Missile_Defense
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php
		the_title( '<h1 class="entry-title">', '</h1>' );
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php missiledefense_posted_on(); ?><br />
			<?php missiledefense_entry_footer(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'missiledefense' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'missiledefense' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article>
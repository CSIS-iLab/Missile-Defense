<?php
/**
 * The template for displaying Missile archive page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Missile_Defense
 */

get_header();

if(get_archive_thumbnail_src()) {
	$feat_image = 'style="background-image:url('.get_archive_thumbnail_src("full").');"';
?>

	<header class="entry-header full-width" <?php echo $feat_image; ?>>
		<div class="container">
			<h1 class="page-title"><?php the_archive_title(); ?></h1>
		</div>
		<div class="overlay"></div>
	</header>
	<div id="primary" class="container">
<?php } else { ?>
	<div id="primary" class="container">
		<header class="entry-header">
			<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
		</header>
	<?php } ?>
		<div class="row">
			<main id="main" class="col-xs-12" role="main">
				<?php the_archive_top_content(); ?>
				<div class="row">
				<?php
					$args = array(
						'post_type' => 'actors',
						'numberposts' => -1,
						'orderby' => 'meta_value',
						'order' => 'ASC',
						'meta_key' => '_actors_archive_name'
					);
					$actors = get_posts( $args );
					
	        		foreach ( $actors as $post) {
	        			setup_postdata( $post );
        				$feature_image = get_the_post_thumbnail_url();
        				$archive_name = get_the_title();
        				$replacement_archive_name = get_post_meta( $post->ID, '_actors_archive_name', true );

        				if ( $replacement_archive_name ) {
        					$archive_name = $replacement_archive_name;
        				}

	        			?>

	        			<div class="col-xs-12 col-sm-4 wide-grid">
	        				<div class="grid_container">
		        				<a href="<?php echo esc_url( get_permalink() ); ?>">
			        				<div class="grid_card" style="background-image:url('<?php echo $feature_image; ?>');">
			        					<div class="title"><?php echo $archive_name; ?></div>
			        					<div class="overlay"></div>
			        				</div>
			        			</a>
			        		</div>
	        			</div>
        			<?php } ?>
				</div>
			</main><!-- #main -->
		</div>
	</div><!-- #primary -->

<?php
get_footer();

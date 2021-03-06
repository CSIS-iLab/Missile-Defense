<?php
/**
 * The template for displaying Defense Systems type of system pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Missile_Defense
 */

get_header();

$feat_image_caption = '';

if(get_archive_thumbnail_src()) {
	$feat_image = 'style="background-image:url('.get_archive_thumbnail_src("full").');"';
	$feat_image_id = get_archive_thumbnail_id();
	$feat_image_caption = wp_get_attachment_caption($feat_image_id);
?>

	<header class="entry-header full-width" <?php echo $feat_image; ?>>
		<div class="container title">
			<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
		</div>
		<div class="overlay"></div>
	</header>
	<div id="primary" class="container">
<?php } else {
	?>
	<div id="primary" class="container">
		<header class="entry-header">
			<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
		</header>
	<?php } ?>
		<div class="row">
			<main id="main" class="entry-content col-xs-12" role="main">
				<?php
					the_archive_bottom_content( '<div class="archive-description">', '</div>' );
					if ( $feat_image_caption ) {
						echo '<div class="post-featured-caption">' . esc_html_x( 'Photo Credit: ', 'missiledefense' ) . $feat_image_caption . '</div>';
					}
				?>
			</main><!-- #main -->
		</div>
		<?php get_template_part( 'template-parts/post-footer' ); ?>
	</div><!-- #primary -->

<?php
get_footer();

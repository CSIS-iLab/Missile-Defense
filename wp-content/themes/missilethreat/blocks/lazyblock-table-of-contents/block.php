
<?php
/**
 * Table of Contents Block Template.
 *
 * @var  array  $attributes Block attributes.
 * @var  array  $block Block data.
 * @var  string $context Preview context [editor,frontend].
 */

?>

<div class="tableOfContents">
  <div class="tableOfContents__details">
  <h2>In this publication</h2>
  <ul class="tableOfContents__resources">

  <?php 

    $chapters = get_lzb_meta('table-of-contents');
    $appendix = get_lzb_meta('appendix');
    $download_pdf = get_lzb_meta('download-pdf');
    $report_cover = get_lzb_meta('report-cover-image');
    $graphics_link = get_lzb_meta('link-to-graphics');
    $video_link = get_lzb_meta('video');

    $i = 1;

    if ( !$chapters ) { ?>
    <div class="tableOfContents__excerpt"><?php the_excerpt(); ?></div>
      <?php
    } 
    
    else { ?>
      <ul class="tableOfContents__chapters">
        <?php
      foreach( $chapters as $chapter ) {
        $chapter_url = esc_url($chapter['link-to-post']);
        $chapter_title = $chapter['chapter-title'];
        $chapter_id = url_to_postid($chapter_url);

        if( isset( $chapter_title ) && !empty( $chapter_title ) ) {
          $chapter_title = $chapter_title;
        }

        else {
          $chapter_title = get_the_title( $chapter_id );
        }

        if( get_page_link() === $chapter_url ) {
        ?>
          <li><a href="<?php echo esc_url($chapter_url); ?>" target="_self" rel="nofollow" class="chapter is-active" aria-current='page'><span>Chapter <?php echo $i; ?> | </span><?php echo $chapter_title; echo missilethreat_get_svg( 'chevron-right' ); ?></a></li>
          <?php 
        }

        else { 
          ?>
          <li><a href="<?php echo esc_url($chapter_url); ?>" target="_self" rel="nofollow" class="chapter"><span>Chapter <?php echo $i; ?> | </span><?php echo $chapter_title; echo missilethreat_get_svg( 'chevron-right' ); ?></a></li>
          <?php
        }
        
        $i++;
      }
      
        if( isset( $appendix ) && !empty( $appendix ) ) {
          ?>
        <li><a href="<?php echo esc_url($appendix); ?>" target="_self" rel="nofollow" class="chapter">Appendix<?php  echo missilethreat_get_svg( 'chevron-right' ); ?></a></li>
        <?php } ?>
        
      </ul>
      
      <?php
    }
    if( isset( $download_pdf['url'] ) && !empty( $download_pdf['url'] ) ) { ?>
    <a href="<?php echo esc_url($download_pdf['url']); ?>" target="_blank" rel="nofollow"><button type="button" class="btn btn--short btn--dark">Download full report</button></a>
    <?php 
    } 

    if( isset( $graphics_link ) && !empty( $graphics_link ) ) { ?>
    <li class="tableOfContents__graphics"><a href="<?php echo esc_url($graphics_link); ?>" target="_self" rel="nofollow">See all illustrations & graphics<?php  echo missilethreat_get_svg( 'chevron-right' ); ?></a></li>
    <?php
    } 

    if( isset( $video_link ) && !empty( $video_link ) ) { ?>
    <li class="tableOfContents__video-link"><a href="<?php echo esc_url($video_link); ?>" target="_blank" rel="nofollow">Watch the video<?php  echo missilethreat_get_svg( 'external-link' ); ?></a></li>
    <?php } ?>

  </ul>
  </div>
<?php
  if ( isset( $report_cover['link'] ) && !empty( $report_cover['link'] ) ) { ?>
    <img src="<?php echo esc_url($report_cover['link']); ?>" alt="<?php echo $report_cover['alt']; ?>">
<?php } ?>

</div>
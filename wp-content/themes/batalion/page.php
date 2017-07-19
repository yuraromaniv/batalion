<?php 
  //header
  get_header();
?>

<div>
<?php
  // Start the loop.
  while ( have_posts() ) {
    the_post();

    // Include the page content
    the_content();

  } //end while
?>
</div>

<?php

  if ( $post->ID == 40 || $post->ID == 58 || $post->ID == 69 ) {
    //our team
    get_template_part('/template-parts/content', 'our-team');
  }

  //content-footer
  get_template_part('/template-parts/content', 'footer');

  //footer
  get_footer();
?>
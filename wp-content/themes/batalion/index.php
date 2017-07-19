<?php 
  //header
  get_header();

  //content-home
  get_template_part('/template-parts/content', 'home');
    
  //our team
  get_template_part('/template-parts/content', 'our-team');

  //content-footer
  get_template_part('/template-parts/content', 'footer');

  //footer
  get_footer();
?>

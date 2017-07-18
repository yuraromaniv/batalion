<?php 
    //header
    get_header();

    //content-home
    get_template_part('/template-parts/content', 'home');
    
    //content-footer
    get_template_part('/template-parts/content', 'footer');

    //footer
    get_footer();
?>

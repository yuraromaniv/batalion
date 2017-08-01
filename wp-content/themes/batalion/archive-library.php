<?php
  //header
  get_header();
?>

<h2 class="org-name center">Бібліотека</h2>
<div class="row container">
  <ul class="biblio">
    <?php
    //Наші погляди
    $args = array(
      'post_type' => 'library',
      'posts_per_page' => 10,
      'publish' => true,
      'orderby' => 'date',
      'order' => 'DESC'
    );
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) {
      while ( $query->have_posts() ) {
        $query->the_post();
        display_library_temp();
      } //end while
      if ( $query->max_num_pages > 1 ) { ?>
        <script>
          var library_ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
          var library_true_posts = '<?php echo serialize( $query->query_vars ); ?>';
          var library_current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
          var library_max_pages = '<?php echo $query->max_num_pages; ?>';
        </script>
        <div id="library_loadmore" class="offset-l3 offset-m3 offset-s3 col l6 m6 s6 center btn more-btn red">Більше публікацій</div>
        <!--<a class="waves-effect waves-light btn more-btn red">Більше публікацій</a>-->
      <?php
      } //end if
    } //end if
    wp_reset_postdata(); ?>
  </ul>
</div>


<?php
  //Наші погляди
  $args = array(
    'post_type' => 'advices',
    'posts_per_page' => 50,
    'publish' => true,
    'orderby' => 'date',
    'order' => 'DESC'
  );
  $query = new WP_Query( $args );
  if ( $query->have_posts() ) { ?>
    <hr style="padding: 0; margin: 0px; height: 1px; background-color: lightgrey; border: none;" />
    <h2 class="org-name center">Корисні поради</h2>
    <div class="carousel custom center">
    <?php
    while ( $query->have_posts() ) {
      $query->the_post(); ?>
      <div class="carousel-item custom-text"><?php echo get_post_meta( $post->ID, "advice_text", true ) ?></div>
      <!--<a class="carousel-item custom-text" href="#"></a>-->
      <?php
    } //end while ?>
    </div>
  <?php
  } //end if
  wp_reset_postdata(); ?>


<?php
  //content-footer
  get_template_part('/template-parts/content', 'footer');

  //footer
  get_footer();
?>
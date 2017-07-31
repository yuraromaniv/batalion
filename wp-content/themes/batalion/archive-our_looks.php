<?php
  //header
  get_header();
?>

<h2 class="task-slogan center aim">Наші погляди</h2>
<hr style="padding: 0; margin: 0; height: 2px; background-color: lightgrey; border: none; color: lightgrey;" />
<div class="row container">
  <?php
  //Наші погляди
  $args = array(
    'post_type' => 'our_looks',
    //'posts_per_page' => 9,
    'publish' => true,
    'orderby' => 'date',
    'order' => 'DESC'
  );
  $query = new WP_Query( $args );
  if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
      $query->the_post(); ?>
      <div class="looks-container col l12 s12 m12 ">
        <div class="col l4 m5 s12 disable-mar-left">
          <div class="looks-number white-text disable-mar-left"><?php the_title(); ?></div>
        </div>
        <div class="col l8 m7 s12" style="padding: 0;">
          <div class="looks-desc "><?php echo get_the_content(); ?></div>
        </div>
      </div>
      <?php
    } //end while
  } //end if
  wp_reset_postdata(); ?>
</div>

<?php
  //content-our-team
  get_template_part('/template-parts/content', 'our-team');

  //content-footer
  get_template_part('/template-parts/content', 'footer');

  //footer
  get_footer();
?>
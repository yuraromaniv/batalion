<?php
  //НАША КОМАНДА
  $args = array(
    'post_type' => array('teams'),
    'posts_per_page' => 4,
    'publish' => true,
    'orderby' => 'date',
    'order' => 'DESC'
  );
  $query = new WP_Query( $args );
  if ( $query->have_posts() ) {
    echo '
    <div class="pre-post"></div>
    <section>
      <div class="parallax-container">
        <div class="parallax-slogan center">
          Наша команда
        </div>
        <hr style="padding:0;margin-bottom: 20px; height: 2px; background-color: lightgrey;border: none; color: grey;">
        <div style="margin-bottom: 0" class="row center tablet-fix">';
        while ( $query->have_posts() ) {
          $query->the_post();
          echo '
          <div class="col l4 m4 s12">
            <img class="member-img" src="' . get_the_post_thumbnail_url('' ,'medium') . '" alt="' . get_the_title() . '">
            <div class="member-name">' . short_post_title(100) . '</div>
            <div class="member-desc">"' . 
              get_post_meta( $post->ID, "slogan", true ) . '"
            </div>
          </div>';
        } //end while
        echo '
        </div>
        <div class="parallax"><img src="' . get_template_directory_uri() . '/img/parallax/1.jpg" alt="parallax"></div>
      </div>
    </section>';
  } //end if
?>

    
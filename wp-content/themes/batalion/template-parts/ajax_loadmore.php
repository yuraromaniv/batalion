<?php
  //get posts using ajax
  function true_load_posts() {
    $args = unserialize( stripslashes( $_POST['query'] ) );
    $args['paged'] = $_POST['page'] + 1; // следующая страница
    $args['post_status'] = 'publish';
    $q = new WP_Query( $args );
    if ( $q->have_posts() ) {
      if ( $_POST['post_type'] == "donations" ) {
        while ( $q->have_posts() ) {
          $q->the_post();
          display_donations_temp();
        }
      }
      else if ( $_POST['post_type'] == "events" ) {
        while ( $q->have_posts() ) {
          $q->the_post();
          display_event_temp();
        }
      }
      else if ( $_POST['post_type'] == "blogs" ) {
        while ( $q->have_posts() ) {
          $q->the_post(); ?>
          <div class="col l4 m6 s12">
            <?php display_blog_temp(); ?>
          </div>
        <?php
        }
      }
      else if ( $_POST['post_type'] == "library" ) {
        while ( $q->have_posts() ) {
          $q->the_post();
          display_library_temp();
        }
      }
      else if ( $_POST['post_type'] == "discussions" ) {
        while ( $q->have_posts() ) {
          $q->the_post();
          display_discussions_temp();
        }
      }        
    } //end if
    wp_reset_postdata();
    die();
  }
  add_action('wp_ajax_loadmore', 'true_load_posts');
  add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');
?>
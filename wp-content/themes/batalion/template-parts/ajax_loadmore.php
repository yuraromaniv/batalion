<?php
  //get posts using ajax
  function true_load_posts() {
    //donations calendar
    if (isset($_POST['post_type']) && $_POST['post_type'] == "donations") {
      $year = $_POST["year"];
      $month = $_POST["month"] + 1;

      //Членські внески
      $args = array(
        'post_type' => 'donations',
        'posts_per_page' => -1, //вивести усі пости
        'category_name' => 'contributions',
        'year' => $year,
        'monthnum' => $month,
        /*
        'meta_query' => array(
          'payment_date' => array(
            'key' => 'payment_date',
            'value' => array('20170708', '20170710'),
            'compare' => 'BETWEEN',
          ),
        ),
        'orderby' => 'payment_date',
        */
        'publish' => true,
        'orderby' => 'date',
        'order' => 'DESC'
      );
      
      $q = new WP_Query( $args );
      $contributions = array();  //змінна для збурігання внесків

      if ( $q->have_posts() ) {
        while ( $q->have_posts() ) {
          $q->the_post();
          global $post;
          array_push($contributions, array( 
            'name' => get_the_title(),
            'date' => get_the_date('d-m-Y'),
            'money' => get_post_meta( $post->ID, 'payment_amount', true )
          ) );
        } //end while ?>
      <?php
      } //end if
      wp_reset_postdata();


      //Пожертування
      $args = array(
        'post_type' => 'donations',
        'posts_per_page' => -1, //вивести усі пости
        'category_name' => 'donations',
        'year' => $year,
        'monthnum' => $month,
        'publish' => true,
        'orderby' => 'date',
        'order' => 'DESC'
      );
      $q = new WP_Query( $args );
      $donations = array();  //змінна для збурігання пожертвувань

      if ( $q->have_posts() ) {
        while ( $q->have_posts() ) {
          $q->the_post();
          global $post;
          array_push($donations, array( 
            'name' => get_the_title(),
            'date' => get_the_date('d-m-Y'),
            'money' => get_post_meta( $post->ID, 'payment_amount', true )
          ) );
        } //end while ?>
      <?php
      } //end if
      wp_reset_postdata();

      $result = array();  //змінна для збурігання внесків та пожертвувань
      if (!empty($contributions) ) {
        array_push($result, array('Внески' => $contributions) );
      }
      if (!empty($donations) ) {
        array_push($result, array('Пожертвування' => $donations) );
      }
      if (empty($result)) {
        echo "Нічого не знайдено";
      }
      else {
        echo json_encode($result, JSON_UNESCAPED_UNICODE);  //JSON_UNESCAPED_UNICODE - дозволяє працювати із кирилицею
      }
      //echo json_encode($arr[a]);
    } //end if
    //end donations calendar
    else {
      $args = unserialize( stripslashes( $_POST['query'] ) );
      $args['paged'] = $_POST['page'] + 1; // следующая страница
      $args['post_status'] = 'publish';
      $q = new WP_Query( $args );
      if ( $q->have_posts() ) {
        while ( $q->have_posts() ) {
          $q->the_post();
          if ( get_post_type() == "events" ) {
            display_event_temp();
          }
          else if ( get_post_type() == "blogs" ) { ?>
            <div class="col l4 m6 s12">
              <?php display_blog_temp(); ?>
            </div>
          <?php
          }
          else if ( get_post_type() == "library" ) {
            display_library_temp();
          }
          else if ( get_post_type() == "discussions" ) {
            display_discussions_temp();
          }        
        } //end while
      } //end if
      wp_reset_postdata();
      die();
    } //end else
  }
  add_action('wp_ajax_loadmore', 'true_load_posts');
  add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');
?>
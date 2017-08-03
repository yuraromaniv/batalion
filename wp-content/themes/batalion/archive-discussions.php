<?php
  //header
  get_header();
?>

<section class="news&blogs container">
  <div style="margin-bottom: 0" class="row">
    <div class="col l8 m12 s12 border-color">
      <div class="news-slogan center">обговорення</div>
      <?php
      //Обговорення
      $args = array(
        'post_type' => 'discussions',
        'posts_per_page' => 7,
        'publish' => true,
        'orderby' => 'date',
        'order' => 'DESC'
      );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) { ?>
        <div class="news-block row">
        <?php
          while ( $query->have_posts() ) {
            $query->the_post();
            display_discussions_temp();
          } //end while 
          if ( $query->max_num_pages > 1 ) { ?>
            <script>
              var discussions_ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
              var discussions_true_posts = '<?php echo serialize( $query->query_vars ); ?>';
              var discussions_current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
              var discussions_max_pages = '<?php echo $query->max_num_pages; ?>';
              var discussions_post_type = "discussions";
            </script>
            <div id="discussions_loadmore" class="offset-l3 offset-m3 offset-s3 col l6 m6 s6 center btn more-btn red">Більше тем</div>
            <!--<a class="waves-effect waves-light btn more-btn red">Більше тем</a>-->
          <?php } //end if ?>
        </div>
      <?php
      } //end if
      wp_reset_postdata();
      ?>
    </div>

    <?php
      //ОСТАННІ БЛОГИ
      $args = array(
        'post_type' => array('blogs'),
        'posts_per_page' => 2,
        'publish' => true,
        'orderby' => 'date',
        'order' => 'DESC'
      );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) { ?>
        <div class="col l4 m12 s12 ">
          <div class="blog-slogan center ">
            Останні блоги
          </div>
          <?php
            while ( $query->have_posts() ) {
              $query->the_post();
              display_blog_temp();
            } //end while
          ?>
        </div>
      <?php
      } //end if
      wp_reset_postdata();
    ?>
  </div>
  <br>
</section>

<?php
  //content-footer
  get_template_part('/template-parts/content', 'footer');

  //footer
  get_footer();
?>
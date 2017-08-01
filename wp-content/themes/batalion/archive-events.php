<?php
  //header
  get_header();
?>

<section class="news&blogs container">
  <div style="margin-bottom: 0" class="row">
    <div class="col l8 m12 s12 border-color">
      <div class="news-slogan center">
        події
      </div>
      <?php
      //ПОДІЇ
      $args = array(
        'post_type' => 'events',
        'posts_per_page' => 9,
        'publish' => true,
        'orderby' => 'date',
        'order' => 'DESC'
      );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
          $query->the_post(); ?>
          <div class="news-block row">
            <div class="col l3 m6 s12">
              <a href="<?php the_permalink(); ?>">
                <div style="background-image: url(<?php the_post_thumbnail_url('medium'); ?>)" class="news-img"></div>
              </a>
            </div>
            <div class="col l9 m6 s12">
              <div class="news-desc">
                <a href="<?php the_permalink(); ?>">
                  <div class="news-desc-main"><?php echo short_post_title(100); ?></div>
                </a>
                <div class="news-date">
                  <?php the_time( 'j F Y' ); ?>
                </div>
                <a href="<?php the_permalink(); ?>">
                  <div class="news-text"><?php echo short_post_desc(180); ?></div>
                </a>
              </div>
            </div>
          </div>
        <?php
        } //end while
        if ( $query->max_num_pages > 1 ) { ?>
          <script>
            var events_ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
            var events_true_posts = '<?php echo serialize( $query->query_vars ); ?>';
            var events_current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
            var events_max_pages = '<?php echo $query->max_num_pages; ?>';
          </script>
          <div id="events_loadmore" class="offset-l3 offset-m3 offset-s3 col l6 m6 s6 center btn more-btn red">Більше подій</div>
          <!--<a class="waves-effect waves-light btn more-btn red">Більше новин</a>-->
        <?php
        } //end if
      } //end if
      wp_reset_postdata(); ?>
    </div>

    <?php
      //ОСТАННІ БЛОГИ
      $args = array(
        'post_type' => array('blogs'),
        'posts_per_page' => 4,
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
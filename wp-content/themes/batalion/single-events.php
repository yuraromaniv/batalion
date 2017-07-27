<?php
  //header
  get_header();
?>

<section class="news&blogs container">
  <div style="margin-bottom: 0" class="row">
    <div class="col l8 m8 s12 border-color">
      <div class="news-block row single-talk">
        <div class="col l12 m12 s12">
        <?php 
          if ( have_posts() ) {
            while ( have_posts() ) { the_post(); ?>
              <div  class="news-desc">
                <div class="news-desc-main archive-news">
                  <?php the_title(); ?>
                </div>
                <div class="news-text">
                  <?php the_time( 'j F Y' ); ?>
                </div>
                <img class="single-img" src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
                <p class="single-text"><?php the_content(); ?></p>
              </div>
            <?php
            } //end while
            if ( comments_open() || get_comments_number() ) { 
              comments_template();
            }
          } //end if
          ?>
        </div>
      </div>
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
<?php
  //header
  get_header();
?>

<h2 class="task-slogan center aim">Блоги</h2>
<hr style="padding:0;margin: 0; height: 2px; background-color: lightgrey;border: none; color: lightgrey;">

<?php
  //Блоги
  $args = array(
    'post_type' => 'blogs',
    'posts_per_page' => 12,
    'publish' => true,
    'orderby' => 'date',
    'order' => 'DESC'
  );
  $query = new WP_Query( $args );
  if ( $query->have_posts() ) { ?>
    <div class="row container pad-top">
    <?php
      while ( $query->have_posts() ) {
        $query->the_post(); ?>
        <div class="col l4 m6 s12">
        <?php display_blog_temp(); ?>
        </div>
      <?php
      } //end while
      if ( $query->max_num_pages > 1 ) { ?>
        <script>
          var blogs_ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
          var blogs_true_posts = '<?php echo serialize( $query->query_vars ); ?>';
          var blogs_current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
          var blogs_max_pages = '<?php echo $query->max_num_pages; ?>';
        </script>
        <div id="blogs_loadmore" class="col l12 m12 s12 center btn more-btn red">Більше блогів</div>
        <!--<a class="waves-effect waves-light btn more-btn red">Більше блогів</a>-->
      <?php
      } //end if
      ?>
    </div>
  <?php
  } //end if
  wp_reset_postdata();
?>


  

<?php
  //our team
  get_template_part('/template-parts/content', 'our-team');

  //content-footer
  get_template_part('/template-parts/content', 'footer');

  //footer
  get_footer();
?>
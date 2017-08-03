<?php
  //header
  get_header();
?>

<!-- donats section -->
<section class="container">
  <div class="row">
    <div class="col l12 m12 s12 center">
      <div class="donats-slogan">внески та пожертвування</div>
    </div>
    <div class="col l12 m12 s12">
      <div class="donats-info">Інформація про внески та пожертування подається кожного другого числа нового місяця.</div>
    </div>
  </div>
  <div class="row">
    <div class="col l12 m12 s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#test1">Членські внески</a></li>
        <li class="tab col s3"><a href="#test2">Пожертвування</a></li>
      </ul>
      <div class="row">
        <?php
        //Членські внески
        $args = array(
          'post_type' => 'donations',
          'posts_per_page' => 10, //вивести усі пости
          'category_name' => 'contributions',
          'publish' => true,
          'orderby' => 'date',
          'order' => 'DESC'
        );
        
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) { ?>
          <div id="test1" class="col s12">
            <table class="highlight striped bordered">
              <thead>
                <tr>
                  <th>Дата</th>
                  <th>Прізвище Ім’я По-батькові</th>
                  <th>Членський внесок</th>
                </tr>
              </thead>
              <tbody id="contributions-table">
              <?php
                while ( $query->have_posts() ) {
                  $query->the_post();
                  display_donations_temp();
                } //end while
              ?>
              </tbody>
            </table>
            <?php
              if ( $query->max_num_pages > 1 ) { ?>
                <script>
                  var contributions_ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                  var contributions_true_posts = '<?php echo serialize( $query->query_vars ); ?>';
                  var contributions_current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                  var contributions_max_pages = '<?php echo $query->max_num_pages; ?>';
                  var contributions_post_type = "donations";
                </script>
                <div id="contributions_loadmore" class="offset-l3 offset-m3 offset-s3 col l6 m6 s6 center btn more-btn red">Більше внесків</div>
                <!--<a class="waves-effect waves-light btn more-btn red">Більше тем</a>-->
            <?php } //end if ?>
          </div>
        <?php
        } //end if
        wp_reset_postdata();

        //Пожертвування
        $args = array(
          'post_type' => 'donations',
          'posts_per_page' => 10, //вивести усі пости
          'category_name' => 'donations',
          'publish' => true,
          'orderby' => 'date',
          'order' => 'DESC'
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) { ?>
          <div id="test2" class="col s12">
            <table class="highlight striped bordered">
              <thead>
                <tr>
                  <th>Дата</th>
                  <th>Прізвище Ім’я По-батькові</th>
                  <th>Пожертування</th>
                </tr>
              </thead>
              <tbody id="donations-table">
              <?php
                while ( $query->have_posts() ) {
                  $query->the_post();
                  display_donations_temp();
                } //end while
              ?>
              </tbody>
            </table>
            <?php
              if ( $query->max_num_pages > 1 ) { ?>
                <script>
                  var donations_ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                  var donations_true_posts = '<?php echo serialize( $query->query_vars ); ?>';
                  var donations_current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                  var donations_max_pages = '<?php echo $query->max_num_pages; ?>';
                  var donations_post_type = "donations";
                </script>
                <div id="donations_loadmore" class="offset-l3 offset-m3 offset-s3 col l6 m6 s6 center btn more-btn red">Більше пожертвувань</div>
                <!--<a class="waves-effect waves-light btn more-btn red">Більше тем</a>-->
            <?php } //end if ?>
          </div>
        <?php
        } //end if
        wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
</section>

<?php
  //our team
  get_template_part('/template-parts/content', 'our-team');

  //content-footer
  get_template_part('/template-parts/content', 'footer');

  //footer
  get_footer();
?>
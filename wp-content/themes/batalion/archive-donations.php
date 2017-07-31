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
    <div class="col l8 m7 s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#test1">Членські внески</a></li>
        <li class="tab col s3"><a href="#test2">Пожертвування</a></li>
      </ul>
      <div class="row">
        <?php
        //Членські внески
        $args = array(
          'post_type' => 'donations',
          'posts_per_page' => -1, //вивести усі пости
          'category_name' => 'contributions',
          'year' => date('Y'),
          'monthnum' => date('m'),
          /*
          'meta_query' => array(
            'payment_date' => array(
              'key' => 'payment_date',
              'value' => array('20170708', '20170710'),
              'compare' => 'BETWEEN',
            ),
          ),
          */
          'publish' => true,
          'orderby' => 'payment_date',
          'order' => 'DESC'
        );
        
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) { ?>
          <div id="test1" class="col s12">
            <table class="highlight striped bordered">
              <thead>
                <tr>
                  <th>Прізвище Ім’я По-батькові</th>
                  <th>Членський внесок</th>
                </tr>
              </thead>
              <tbody>
              <?php
              while ( $query->have_posts() ) {
                $query->the_post(); ?>
                <tr>
                  <td><?php the_title(); ?></td>
                  <td><?php echo get_post_meta( $post->ID, "payment_amount", true ); ?> грн.</td>
                </tr>
                <?php
              } //end while ?>
              </tbody>
            </table>
          </div>
        <?php
        } //end if
        wp_reset_postdata();

        //Пожертвування
        $args = array(
          'post_type' => 'donations',
          'posts_per_page' => -1, //вивести усі пости
          'category_name' => 'donations',
          'year' => date('Y'),
          'monthnum' => date('m'),
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
                  <th>Прізвище Ім’я По-батькові</th>
                  <th>Пожертування</th>
                </tr>
              </thead>
              <tbody>
              <?php
              while ( $query->have_posts() ) {
                $query->the_post(); ?>
                <tr>
                  <td><?php the_title(); ?></td>
                  <td><?php echo get_post_meta( $post->ID, "payment_amount", true ); ?> грн.</td>
                </tr>
              <?php
              } //end while ?>
              </tbody>
            </table>
          </div>
        <?php
        } //end if
        wp_reset_postdata(); ?>
      </div>
    </div>
    <div class="col l4 m5 s12">
      <div class="datepicker-here" data-language='ru' id="airdatepicker"></div>
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
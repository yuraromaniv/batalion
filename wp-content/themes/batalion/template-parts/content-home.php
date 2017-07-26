<?php
  //Слайдер подій
	$args = array(
		'post_type' => array('events'),
		'posts_per_page' => 3,
		'publish' => true,
		'orderby' => 'date',
		'order' => 'DESC'
	);
	$query = new WP_Query( $args );
	if ( $query->have_posts() ) {
		echo '
		<div id="jssor_1" style="position:relative;margin:0 auto;width:1300px;height:381px;overflow:hidden;visibility:hidden">
      <div data-u="slides" style="cursor:default;position:relative;width:1300px;height:290px;overflow:hidden;">';
        while ( $query->have_posts() ) {
          $query->the_post();
          echo '
          <div>
            <a href="' . get_the_permalink() . '">
              <img style="height: 290px !important;" class="img-fix-top" data-u="image" alt="' . get_the_title() . '" src="' . get_the_post_thumbnail_url('' ,'full') . '" />
              <div class="mask center">
                <div class="ph-name-slider">' . short_post_title(40) . '</div>
              </div>
            </a>
          </div>';
        } //end while
        echo '
			</div>
      <!-- Bullet Navigator -->
      <div data-u="navigator" class="jssorb051 hide-on-large-only" style="position:absolute;bottom:0px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
        <div data-u="prototype" class="i" style="width:16px;height:16px;">
          <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <circle class="b" cx="8000" cy="8000" r="5800"></circle>
          </svg>
        </div>
      </div>
      <!-- Arrow Navigator -->
      <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:45px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
        <img class="slider-arrow-left" src="' . get_template_directory_uri() . '/img/arr/left.svg" alt="arrow">
      </div>
      <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:45px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
        <img class="slider-arrow-right" src="' . get_template_directory_uri() . '/img/arr/right.svg" alt="arrow">
      </div>
    </div>';
	} //end if


  //Цілі та завдання
  $args = array(
    'post_type' => array('tasks'),
    'posts_per_page' => 18,
    'publish' => true,
    'orderby' => 'date',
    'order' => 'DESC'
  );
  $query = new WP_Query( $args );
  if ( $query->have_posts() ) {
    echo '
    <section class="tasks ">
      <div class="task-slogan center">Цілі та завдання</div>
      <hr style="padding:0;margin: 0; height: 2px; background-color: lightgrey;border: none; color: lightgrey;">
      <div class="container">
        <div class="flex-container">';
        while ( $query->have_posts() ) {
          $query->the_post();
          echo '
          <div class="task-block">
            <div class="task-img">
              <img class="task-img-max-width" src="' . get_the_post_thumbnail_url('' ,'thumbnail') . '" alt="' . get_the_title() . '">
            </div>
            <div class="task-desc center">' . short_post_title(140) . '</div>
          </div>';
        } //end while
        echo '
        </div>
      </div>
      <br>
    </section>';
  } //end if

?>

<div class="pre-post"></div>
<section class="news&blogs container">
  <div style="margin-bottom: 0" class="row">
  <?php
  //ОСТАННІ НОВИНИ
  $args = array(
    'post_type' => array('events'),
    'posts_per_page' => 5,
    'offset' => 3,  //відступ 3, бо вони у слайдері
    'publish' => true,
    'orderby' => 'date',
    'order' => 'DESC'
  );
  $query = new WP_Query( $args );
  if ( $query->have_posts() ) {
    echo '
    <div class="col l8 m12 s12 border-color">
      <div class="news-slogan center">Останні події</div>';
      while ( $query->have_posts() ) {
        $query->the_post();
        display_event_temp();
      } //end while
      echo '
    </div>';
  } //end if


  //ОСТАННІ БЛОГИ
  $args = array(
    'post_type' => array('blogs'),
    'posts_per_page' => 2,
    'publish' => true,
    'orderby' => 'date',
    'order' => 'DESC'
  );
  $query = new WP_Query( $args );
  if ( $query->have_posts() ) {
    echo '
    <div class="col l4 m12 s12 center">
      <div class="blog-slogan ">
        Останні блоги
      </div>';
      while ( $query->have_posts() ) {
        $query->the_post();
        display_blog_temp();
      } //end while
      echo '
    </div>';
  } //end if
?>

  </div>
  <br>
</section>
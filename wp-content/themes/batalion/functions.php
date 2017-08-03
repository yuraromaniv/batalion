<?php
  add_theme_support('title-tag'); // теперь тайтл управляется самим вп
  add_theme_support('post-thumbnails'); // включаем поддержку миниатюр

  //custom capabilityes
  require 'template-parts/custom-posts-types.php';

  //custom-taxonomy
  //require 'template-parts/custom-taxonomy.php';

  //add_image_size('600x400', 600, 400, true); // додаємо ще один розмір картинок 600x400 з обрізанням

  //function for display short content for posts
  function short_post_desc( $charlength ) {
    //$excerpt = get_post_meta( $post->ID, 'опис', true );
    global $post;
    $excerpt = get_the_content();
    if ( mb_strlen( $excerpt ) > $charlength ) {
      $subex = mb_substr( $excerpt, 0, $charlength );
      return $subex . '...';
    }
    else {
      return $excerpt;
    }
  }


  //function for display short title for posts
  function short_post_title( $charlength ) {
    global $post;
    $excerpt = get_the_title( $post->ID );
    $excerpt = trim( $excerpt );
    if ( mb_strlen( $excerpt ) > $charlength ) {
      $subex = mb_substr( $excerpt, 0, $charlength );
      return $subex . '...';
    }
    else {
      return $excerpt;
    }
  }


  //custom login form
  function my_custom_login_logo(){
    echo '
    <style type="text/css">
      h1 a {
        background-image:url(' . get_template_directory_uri() . '/img/logo/logo.svg) !important;
        background-size:200px !important;
        width:200px !important;
        height:200px !important;
      }
    </style>';
  }
  add_action('login_head', 'my_custom_login_logo');


  //delete widgets from console
  function clear_wp_dash() {
    $dash_side = &$GLOBALS['wp_meta_boxes']['dashboard']['side']['core'];
    $dash_normal = &$GLOBALS['wp_meta_boxes']['dashboard']['normal']['core'];
    unset( $dash_side['dashboard_primary'] );        //Блог WordPress
    unset( $dash_side['dashboard_secondary'] );      //Інші новини WordPress
  }
  add_action('wp_dashboard_setup', 'clear_wp_dash' );


  //change default posts sort in admin panel
  function order_posts_in_admin_by_id( $query ) {
    if ( is_admin() && $query->is_main_query() ) {
      $query->set( 'orderby', 'date' );
      $query->set( 'order', 'DESC');
    }
  }
  add_action( 'pre_get_posts', 'order_posts_in_admin_by_id' );


  //get posts using ajax
  require 'template-parts/ajax_loadmore.php';

  //template for display events
  function display_event_temp() {
    global $post; ?>
    <div class="news-block row">
      <a href="<?php the_permalink(); ?>">
      <div class="col l3 m6 s12">
          <div style="background-image: url(<?php the_post_thumbnail_url('medium'); ?>)" class="news-img"></div>
      </div>
      <div class="col l9 m6 s12">
        <div class="news-desc">
            <div class="news-desc-main"><?php echo short_post_title(100); ?></div>
          <div class="news-date">
            <?php the_time( 'j F Y' ); ?>
          </div>
          <div class="news-text"><?php echo short_post_desc(180); ?></div>
        </div>
      </div>
      </a>
    </div>
  <?php
  }

  //template for display blogs
  function display_blog_temp() {
    global $post; ?>
    <div class="iframe-block col m6 s12 l12">
      <a href="<?php the_permalink(); ?>">
        <div style="width: 100%; height: 200px; background-image: url(<?php the_post_thumbnail_url('medium'); ?>);background-size: cover; background-position: center; background-repeat: no-repeat;"></div>
        <div class="iframe-desc">
          <?php echo short_post_title(100); ?>
        </div>
      <div class="iframe-date"><?php the_time( 'j F Y' ); ?></div>
      </a>
    </div>
  <?php
  }

  //template for display library materials
  function display_library_temp() {
    global $post; ?>
    <li class="">
      <a href="<?php echo wp_get_attachment_url( get_post_meta( $post->ID, "file", true ) ); ?>"><?php the_title(); ?></a>
    </li>
  <?php
  }

  //template for display discussions
  function display_discussions_temp() {
    global $post; ?>
    <div class="col l12 m12 s12">
      <div class="news-desc">
        <div class="news-desc-main archive-news">
          <a href="<?php the_permalink(); ?>">
            <?php echo short_post_title(100); ?>
          </a>
        </div>
        <div class="news-date">
          <?php the_time( 'j F Y' ); ?>
        </div>
      </div>
    </div>
  <?php
  }

  //template for display donations
  function display_donations_temp() {
    global $post; ?>
    <tr>
      <td><?php echo get_the_date('d.m.Y'); ?></td>
      <td><?php the_title(); ?></td>
      <td><?php echo get_post_meta( $post->ID, "payment_amount", true ); ?> грн.</td>
    </tr>
  <?php
  }


//hide not used fields
  function remove_menus() {
    remove_menu_page( 'edit.php' );                     //Записи
    //remove_menu_page( 'edit.php?post_type=page' );    //Сторінки
    //remove_menu_page( 'edit-comments.php' );          //Комментарі
    //remove_menu_page( 'tools.php' );                  //Інструменти
    
    //remove_menu_page( 'index.php' );                  //Консоль
    //remove_menu_page( 'upload.php' );                 //Медіафайли
    //remove_menu_page( 'users.php' );                  //Користувачі
    //remove_menu_page( 'themes.php' );                 //Теми
    //remove_menu_page( 'plugins.php' );                //Плагіни
    //remove_menu_page( 'options-general.php' );        //Налаштування
  }
  add_action( 'admin_menu', 'remove_menus' );
//end hide not used fields

?>
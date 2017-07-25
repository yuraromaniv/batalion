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
//end custom login form


//delete widgets from console
  function clear_wp_dash() {
    $dash_side = &$GLOBALS['wp_meta_boxes']['dashboard']['side']['core'];
    $dash_normal = &$GLOBALS['wp_meta_boxes']['dashboard']['normal']['core'];
    unset( $dash_side['dashboard_primary'] );        //Блог WordPress
    unset( $dash_side['dashboard_secondary'] );      //Інші новини WordPress
  }
  add_action('wp_dashboard_setup', 'clear_wp_dash' );
//end delete widgets from console

/*
//hide not used fields
  function remove_menus() {
    remove_menu_page( 'edit.php' );                   //Записи
    remove_menu_page( 'edit.php?post_type=page' );    //Сторінки
    remove_menu_page( 'edit-comments.php' );          //Комментарі
    remove_menu_page( 'tools.php' );                  //Інструменти
    
    //remove_menu_page( 'index.php' );                  //Консоль
    //remove_menu_page( 'upload.php' );                 //Медіафайли
    //remove_menu_page( 'users.php' );                  //Користувачі
    //remove_menu_page( 'themes.php' );                 //Теми
    //remove_menu_page( 'plugins.php' );                //Плагіни
    //remove_menu_page( 'options-general.php' );        //Налаштування
  }
  add_action( 'admin_menu', 'remove_menus' );
//end hide not used fields
*/
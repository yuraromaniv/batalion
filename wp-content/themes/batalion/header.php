<!DOCTYPE html>
<html lang="uk">
<head>
  <title>
    <?php echo wp_get_document_title(); ?>
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"/>
  <!--Import Google Icon Font-->
  <link href="<?php echo get_template_directory_uri(); ?>/css/datepicker.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/node_modules/materialize-css/dist/css/materialize.min.css" />
  <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"/>
  <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css"/>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <style>
    @media screen and (max-width: 768px) {
      .looks-number {
        text-transform: uppercase;
        font-size: 26px;
        text-align: center !important;
        font-family: "MyriadProRegular";
      }
      .org-name{
        margin: 0;
      }
      .task-block {
        padding-right: 10px;
        padding-left: 10px;
      }
      .news-img {
        background-size: cover;
        background-position: center;
        max-width: 100%;
        min-height: 150px;
        margin-bottom: 10px;
      }
      .news-desc-main {
        font-size: 17px;
      }
      .border-color{
        border-right: none;
      }
      .parallax-container{
        height: auto;
      }
      .member-desc{
        margin-bottom: 20px;
      }
      .modal-trigger{
        position: fixed;
        top: 500px;
        right: 30px;
      }
    }
    @media screen and (min-width: 1024px) and (max-width: 1240px)  {
      .parallax-container{
        height: auto;
        padding-bottom: 20px;
      }
      .looks-number {
        text-transform: uppercase;
        font-size: 21px;
        font-family: "MyriadProRegular";
      }
      .tablet-fix-overflow{
        overflow: hidden;
      }
      .border-color{
        border-right: none;
      }
      .modal-trigger{
        position: fixed;
        top: 400px;
        right: 30px;
      }
    }
    @media screen and (min-width: 768px) and (max-width: 1024px) {
      .parallax-container{
        height: auto;
        padding-bottom: 20px;
      }
      .looks-number {
        text-transform: uppercase;
        font-size: 21px;
        font-family: "MyriadProRegular";
      }
      .tablet-fix-overflow{
        overflow: hidden;
      }
      .border-color{
        border-right: none;
      }
      .modal-trigger{
        position: fixed;
        top: 300px;
        right: 30px;
      }
    }
    @media only screen and (min-device-width : 320px) and (max-device-width : 568px) and (orientation : landscape) {
      .parallax-container{
        height: auto;
      }
      .modal-trigger{
        position: fixed;
        top: 250px;
        right: 30px;
      }
    }
    @media only screen and (min-device-width : 320px) and (max-device-width : 568px) {
    }
  </style>
</head>
<body>
  <?php
  if (is_user_logged_in() ) {
    echo '<header style="margin-top:32px;">';
  }
  else {
    echo '<header>';
  }
  ?>
  <div class="pre-post"></div>
  <div class="hide-on-large-only">
    <ul id="slide-out" class="side-nav">
      <li><a href="<?php echo home_url(); ?>">Головна</a></li>
      <li><a href="<?php the_permalink(40); ?>">Про нас</a></li>
      <li><a href="<?php echo get_post_type_archive_link('events'); ?>">Події</a></li>
      <li><a href="<?php echo get_post_type_archive_link('blogs'); ?>">Блог</a></li>
      <li><a href="<?php the_permalink(50); ?>">Членство</a></li>
      <li><a href="<?php echo get_post_type_archive_link('library'); ?>">Бібліотека</a></li>
      <li><a href="<?php echo get_post_type_archive_link('discussions'); ?>">Обговорення</a></li>
      <li><a href="<?php the_permalink(37); ?>">Контакти</a></li>
    </ul>
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
  </div>
  <div class="main-header row center container">
    <div class="col l4 m6 s12">
      <div class="org-name ">Громадська огранізація<br> "Корпус Доброї Волі"</div>
    </div>
    <div class="col l4 m6 s12">
      <a href="<?php echo home_url(); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo/logo.svg" alt="logo"></a>
    </div>
    <div class="col l4 hide-on-med-and-down">
      <div class="slogan">
        Україна понад усе!
      </div>
    </div>
      <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Залиште ваше запитання!</h4>
      <form id="question-form" class="question-form center">
        <textarea name="question_text" placeholder="Введіть текст ..."></textarea>
        <button type="submit" id="question-form-button" class="btn waves-effect waves-light">НАДІСЛАТИ</button>
      </form>
      <span id="question-form-message"></span>
    </div>
  </div>
      <!-- Modal Trigger -->
  <a class="btn btn-floating btn-large cyan pulse modal-trigger" href="#modal1"><i class="material-icons">edit</i></a>
  </div>
  <hr style="padding:0;margin: 0; height: 2px; background-color: lightgrey;border: none; color: lightgrey;">
  <div class="center">
    <ul class="hide-on-med-and-down nav-list">
      <li><a href="<?php echo home_url(); ?>">Головна</a></li>
      <li><a class="dropdown-button" data-activates="dropdown1">Про нас<i class="material-icons right more-icon">arrow_drop_down</i></a></li>
      <li><a href="<?php echo get_post_type_archive_link('events'); ?>">Події</a></li>
      <li><a href="<?php echo get_post_type_archive_link('blogs'); ?>">Блог</a></li>
      <li><a href="<?php the_permalink(50); ?>">Членство</a></li>
      <li><a href="<?php echo get_post_type_archive_link('library'); ?>">Бібліотека</a></li>
      <li><a href="<?php echo get_post_type_archive_link('discussions'); ?>">Обговорення</a></li>
      <li><a href="<?php the_permalink(37); ?>">Контакти</a></li>
    </ul>
  </div>
  <!-- Dropdown Structure -->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="<?php the_permalink(40); ?>">Про нас</a></li>
    <li><a href="<?php echo get_post_type_archive_link('our_looks'); ?>">Наші погляди</a></li>
    <li><a href="<?php the_permalink(69); ?>">Аналіз сучасого стану</a></li>
    <li><a href="#">Внески/Пожертування</a></li>
  </ul>
  <div class="pre-post"></div>
</header>
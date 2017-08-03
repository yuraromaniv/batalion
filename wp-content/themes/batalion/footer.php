<hr style="padding:0; margin: 0px;height: 5px; background-color: #CC4D56 ; border: none; ">
<hr style="padding:0;margin:0px; height: 5px; background-color: #B1B1B1 ; border: none; ">
<footer>
  <div style="margin: 0" class="row ">
    <div class="col l4 m12 s12 center">
      <ul class="hide-on-med-and-down footer-nav">
        <li class="footer-nav-list"><a href="<?php echo get_home_url(); ?>">Головна</a></li>
        <li class="footer-nav-list"><a href="<?php echo get_post_type_archive_link('events'); ?>">Події</a></li>
        <li class="footer-nav-list"><a href="<?php echo get_post_type_archive_link('blogs'); ?>">Блог</a></li>
        <li class="footer-nav-list"><a href="<?php the_permalink(50); ?>">Членство</a></li>
        <li class="footer-nav-list"><a href="<?php the_permalink(45); ?>">Бібліотека</a></li>
        <li class="footer-nav-list"><a href="<?php echo get_post_type_archive_link('discussions'); ?>">Обговорення</a></li>
        <li class="footer-nav-list"><a href="<?php the_permalink(37); ?>">Контакти</a></li>
      </ul>
    </div>
    <div class="col l4 m6 s12 center">
      <img class="logo footer-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo/logo.svg" alt="logo">
      <div class="footer-info ">Громадська огранізація<br> "Корпус Доброї Волі"</div>
    </div>
    <div class="col l4 m6 s12 ">
      <div class="contacts-block">
        <div class="contacts">КОНТАКТИ:</div>
        <div class="address">вул. Львівська, 1 </div>
        <div class="address">тел.: +38(067) 000 00 00</div>
        <div class="address">e-mail: goodwillcorps.info@gmail.com</div>
      </div>
    </div>
  </div>
  <div class="pre-post"></div>
</footer>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src='<?php echo get_template_directory_uri(); ?>/js/datepicker.min.js'></script>
<!--Форма "СТАТИ ЧЛЕНОМ" -->
<script src="<?php echo get_template_directory_uri(); ?>/js/forms-config.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/node_modules/materialize-css/dist/js/materialize.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jssor.slider-25.0.7.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>

<!--Ajax підuрузка постів -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/ajax_loadmore.js"></script>

<script type="text/javascript">
  $(".button-collapse").sideNav();
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.modal').modal();
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('ul.tabs').tabs();
  });
</script>
<!-- <script>
  $("#airdatepicker").data('datepicker')
</script>
<script>
  $('#airdatepicker').datepicker({
    view: "months",
    minView: "months",
  })
</script> -->

<?php
if ( is_home() ) {
  ?>
  <script>
    jQuery(document).ready(function ($) {
      var jssor_1_options = {
        $AutoPlay: 1,
        $SlideWidth: 803,
        $Cols: 2,
        $Align: 242,
        $FillMode: 2,
        $Idle: 5000,
        $ArrowNavigatorOptions: {
          $Class: $JssorArrowNavigator$
        },
        $BulletNavigatorOptions: {
          $Class: $JssorBulletNavigator$
        }
      };

      var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
      function ScaleSlider() {
        var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
        if (refSize) {
          refSize = Math.min(refSize, 9999);
          jssor_1_slider.$ScaleWidth(refSize);
        }
        else {
          window.setTimeout(ScaleSlider, 30);
        }
      }
      ScaleSlider();
      $(window).bind("load", ScaleSlider);
      $(window).bind("resize", ScaleSlider);
      $(window).bind("orientationchange", ScaleSlider);
    });
  </script>
  <?php
}
?>
<?php wp_footer(); ?>
</body>
</html>
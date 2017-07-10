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
 $(document).ready(function(){
      $('.parallax').parallax();
    });


 jQuery(document).ready(function ($) {

 
    setInterval(function () {
        moveRight();
    }, 3000);

  
  var slideCount = $('#slider ul li').length;
  var slideWidth = $('#slider ul li').width();
  var slideHeight = $('#slider ul li').height();
  var sliderUlWidth = slideCount * slideWidth;
  
  $('#slider').css({ width: slideWidth, height: slideHeight });
  
  $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
  
    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('.move-left').click(function () {
        moveLeft();
    });

    $('.move-right').click(function () {
        moveRight();
    });

});    

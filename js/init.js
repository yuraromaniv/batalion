
 $(document).ready(function(){
      $('.parallax').parallax();
    });

$('.carousel').carousel({
    padding: 170   
});
autoplay()   
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 4500);
}
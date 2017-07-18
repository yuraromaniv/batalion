
 $(document).ready(function(){
      $('.parallax').parallax();
    });

$('.carousel').carousel({
    padding: 1570   
});
autoplay()   
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 4500);
}
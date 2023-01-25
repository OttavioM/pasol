// var myCarousel = document.querySelector('#carouselExampleCaptions')
// var carousel = new bootstrap.Carousel(myCarousel, {
//     interval: 2000,
//     wrap: false
// })
$('#carouselExampleCaptions').carousel({
    interval: 2000
    
  })

//
function scrolled_header() {
window.addEventListener('scroll', function() {
  var header = document.getElementById('masthead');
  var scrollPosition = window.scrollY;
  if (scrollPosition > 50) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
});
}

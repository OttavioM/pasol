// var myCarousel = document.querySelector('#carouselExampleCaptions')
// var carousel = new bootstrap.Carousel(myCarousel, {
//     interval: 2000,
//     wrap: false
// })
// $('#carouselExampleCaptions').carousel({
//     interval: 2000
    
//   })

function header_hider_scrolling() {
  var doc = document.documentElement;
  var w = window;

  var prevScroll = w.scrollY || doc.scrollTop;
  var curScroll;
  var direction = 0;
  var prevDirection = 0;

  var header = document.getElementById('masthead');

  var checkScroll = function() {

    /*
    ** Find the direction of scroll
    ** 0 - initial, 1 - up, 2 - down
    */

    curScroll = w.scrollY || doc.scrollTop;
    if (curScroll > prevScroll) { 
      //scrolled up
      direction = 2;
    }
    else if (curScroll < prevScroll) { 
      //scrolled down
      direction = 1;
    }

    if (direction !== prevDirection) {
      toggleHeader(direction, curScroll);
    }
    
    prevScroll = curScroll;
  };

  var toggleHeader = function(direction, curScroll) {
    if (direction === 2 && curScroll > 52) { 
      
      //replace 52 with the height of your header in px

      header.classList.add('hide');
      prevDirection = direction;
    }
    else if (direction === 1) {
      header.classList.remove('hide');
      prevDirection = direction;
    }
  };
  
  window.addEventListener('scroll', checkScroll);
}

header_hider_scrolling(); // calling the function immediately after declaration

// Shrink header while scrolled
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
scrolled_header();

/** **/
function loadAddressPanel() {
  jQuery(document).ready(function($) {
    $(document).on('click', '#address-link', function(event) {
        event.preventDefault();
        // $('#address-panel').html('<p>Link clicked!</p>');
        // $('#address-panel').load('http://pasol.local/shop/');
        var url = $('#address-link').attr('href');
        // $('#address-panel').load(url);
        // $('#address-panel').load('http://pasol.local/my-account/edit-address/billing/');
        $('#address-panel').html(url);
    });
  });

  // jQuery(function($) {
  //   $(document).on('click', 'a[data-target="#address-panel"]', function(event) {
  //     event.preventDefault();
  //     var url = $(this).attr('href');
  //     // $('#address-panel').load(url + ' #customer_address_fields');
  //     // $('#address-panel').load('http://pasol.local/shop/');
  //     $('#address-panel').html('<p>Link clicked!</p>');
  //   });
  // });
}
loadAddressPanel();

/**  QUANTITY BUTTON FOR THE CART XOO **/
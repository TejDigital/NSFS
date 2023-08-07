$(function () {
    var navbar = $(".header-inner");
    var logo_1 = $(".logo_1");
    var logo_2 = $(".logo_2");
    $(window).scroll(function () {
      if ($(window).scrollTop() <= 40) {
        logo_1.css("display","block");
        logo_2.css("display","none");
        navbar.removeClass("navbar-scroll");
      } else {
        logo_1.css("display","none");
        logo_2.css("display","block");
        navbar.addClass("navbar-scroll");
      }
    });
  });

  // -------------------------------home-top-carousel----------
  $(".gallery_slider_area").owlCarousel({
    autoplay: true,
    slideSpeed: 1000,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    items: 3,
    loop: true,
    // rtl: true,
    mouseDrag: true,
    // nav: true,
    center:true,
    navText: [
      '<i class="fa fa-arrow-left"></i>',
      '<i class="fa fa-arrow-right"></i>',
    ],
    margin: 10,
    dots: true,
    dotsEach: true,
    responsive: {
      320: {
        items: 1,
      },
      767: {
        items: 2,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 4,
      },
    },
  });



  // ---------------------------------------------------------
  let open_btn = document.getElementById('open_slider');
  let close_btn = document.getElementById('close_btn');
let slide_area = document.getElementById('slide_nav');
  function openslide(){
    slide_area.style.display ="block";
  }
  function closeslide(){
    slide_area.style.display ="none";
  }
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

// ----------------------------current-page-------------------
const currentlink = location.href;
const menuitems = document.getElementsByClassName("nav-link");
for (let i = 0; i < menuitems.length; i++) {
  if (menuitems[i].href === currentlink) {
    menuitems[i].className = "current";
  }
}


  // -------------------------------home-top-carousel----------
  // $(document).ready(function() {

  $(".home_slider_area").owlCarousel({
    autoplay: true,
    slideSpeed: 1000,
    autoplayTimeout: 2000,
    paginationSpeed: 500,
    items: 1,
    loop: true,
    // onChanged: navigationFill, // Use onChanged event
    mouseDrag: true,
    nav: true,
    center:true,
    navText: [
      '<i class="fa-solid fa-angle-left"></i>',
      '<i class="fa-solid fa-angle-right"></i>',
    ],
    margin: 10,
    dots: true,
    dotsEach: true,
    responsive: {
      320: {
        items: 1,
      },
      767: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });
  // });
  



  // ---------------------------------------------------------
	
	////////////////////////////////////////////////////
	// 04. Sidebar Js
	$(".offcanvas-open-btn").on("click", function () {
		$(".offcanvas__area").addClass("offcanvas-opened");
		$(".body-overlay").addClass("opened");
	});
	$(".offcanvas__close-btn").on("click", function () {
		$(".offcanvas__area").removeClass("offcanvas-opened");
		$(".body-overlay").removeClass("opened");
	});


	////////////////////////////////////////////////////
	// 04. Body overlay Js
	$(".body-overlay").on("click", function () {
		$(".offcanvas__area").removeClass("offcanvas-opened");
		$(".body-overlay").removeClass("opened");
	});







  // services-----------------------------view------------
  let tab_links = document.getElementsByClassName("click_btn_services");
  let tab_contents = document.getElementsByClassName("service_box");

  function ontablink(event, tabname) {
    for (tablink of tab_links) {
        tablink.classList.remove("active-links");
    }
    
    for (tabcontent of tab_contents) {
        tabcontent.style.opacity = 0; // Set opacity to 0 for all tab contents
    }
    
    event.currentTarget.classList.add("active-links");
    
    // Wait for a short period before showing the new tab content
    setTimeout(function() {
        for (tabcontent of tab_contents) {
            tabcontent.classList.remove("active-tab");
        }
        
        document.getElementById(tabname).classList.add("active-tab");
        document.getElementById(tabname).style.opacity = 1; // Fade in the new tab content
    }, 700); // Adjust the duration as needed
}






// -----------------------home-page-bootstrap-progress-bar----------------








// ---------------------------home-count-function-------------

let num_count = document.querySelectorAll('.count_num');
let interval = 50;

num_count.forEach((num_counter)=>{
    let start_num = 1;
    let end_num = parseInt(num_counter.getAttribute("data-val"));
    // console.log(end_num);
    let time_duration = Math.floor(interval/end_num);
    let set_counter = setInterval(function(){
        start_num += 1;
        // console.log(start_num);
        num_counter.textContent = start_num;
        if(start_num == end_num){
            clearInterval(set_counter);
        }
    } ,time_duration);
});




// ----------------------scroll-Animation---------------------
let sections = document.querySelector('.mission_vision');
// let sections2 = document.querySelector('.vision');

window.onscroll =() =>{
  // sections.forEach(sec =>{
    let top  =window.scrollY;
    let offset = sections.offsetTop - 350;
    let height =sections.offsetHeight;

    if(top >= offset && top < offset +height){
      sections.classList.add('show_animation');
    }
    else{
      sections.classList.remove('show_animation');

    }
  // });
}

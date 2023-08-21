<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 d-flex align-items-center justify-contact-start flex-column">
                <div class="img">
                    <a href="./index.php">
                        <img src="./images/logo_2.png" alt="">
                    </a>
                </div>
                <div class="address">
                 <!-- <h4>Contact</h4> -->
                 <p><a href="tel:+917024106657"><span><i class="fa-solid fa-phone"></i></span>91-702-4106-657</a></p>
               <p onclick="myloc()" style="cursor: pointer;"><span><i class="fa-solid fa-location-dot"></i></span>Shop no.3 Smriti Nagar Bhilai ,durg CG(453572) </p>
                </div>
            </div>
            <div class="col-md-3 nav_links">
               <ul>
                <li><h4>Quick Links</h4></li>
                <li><a class="links" href="./index.php">Home</a></li>
                <li><a class="links"  href="./about.php">About Us</a></li>
                <li><a class="links"  href="./services.php">Service</a></li>
                <li><a class="links"  href="./track_order.php">Track Order</a></li>
                <li><a class="links"  href="#!">Member Login </a></li>
               </ul>
            </div>
            <div class="col-md-3 services">
                <ul>
                    <li><h4>Our Services</h4></li>
                    <li><a class="links"  href="./services.php">Railway Freight</a></li>
                    <li><a class="links"  href="./services.php">Road Freight</a></li>
                    <li><a class="links"  href="./services.php">Full Truckload</a></li>
                </ul>
            </div>
            <div class="col-md-3 Contact">
            <ul>
                <li><h4>Contact us</h4></li>
                <li><a class="links"  href="./contact.php">Find us here</a></li>
                <li><a class="links"  href="./contact.php">Get in touch</a></li>
                <li><a class="links"  href="./contact.php">FAQs</a></li>
            </ul>
            </div>
        </div>
        <div class="row social">
            <div class="col-md-6 flex_col ">
                <div class="social_icons">
                   <a href="#!">
                       <i class="fa-brands fa-linkedin-in"></i>
                   </a>
                    <a href="#!">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="#!">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#!">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-6 flex_col_text">
                <span>
                Terms of Service  |  Privacy Policy
                </span>
            </div>
        </div>
    </div>
    <div class="container-fluid footer_end_con p-0 d-flex align-items-center justify-content-center" >
        <div class="footer_end">
            <p class="m-0">© <?= date('Y')?> North Superfast Service Ltd. All Rights Reserved | Design & Maintained by <span><a href="https://www.digitalshakha.in">Digitalshakha</a></span></p>
        </div>
    </div>
</footer>


       <!-- offcanvas area start -->
       <div class="offcanvas__area">
    <div class="offcanvas__bg"></div>
    <div class="offcanvas__wrapper">
       <div class="offcanvas__content">
          <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
             <div class="offcanvas__logo logo">
                <a href="index.php">
                   <img src="./images/logo_dark.png" alt="logo">
                </a>
             </div>
             <div class="offcanvas__close">
                <button class="offcanvas__close-btn">
                <i class="fa-solid fa-xmark"></i>
                            </button>
             </div>
          </div>
    
          </div>
          <div class="mobile-menu fix mt-40"></div>
          <div class="offcanvas__about d-none d-lg-block mt-30 mb-30">
             <h4>About us</h4>
             <p>North Superfast Service Ltd.: 59+ years logistics leader since 1979, offering reliable, nationwide solutions. Customer-focused, safe, and innovative, we drive growth in dynamic logistics. <a href="./about.php">Read more</a></p>
          </div>
          <div class="offcanvas__contact mt-30 mb-30">
             <h4>Contact Info</h4>
             <ul>
                <li class="d-flex align-items-center gap-2">
                   <div class="offcanvas__contact-icon">
                      <!-- <a target="_blank"
                         href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873"> -->
                         <!-- <i class="fal fa-map-marker-alt"></i></a> -->
                   </div>
                   <div class="offcanvas__contact-text">
                      <!-- <a target="_blank"
                         href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">Elite Scholar Academy (Play School), B.308, St.2, Smriti Nagar, Bhilai</a> -->
                   </div>
                </li>
                <li class="d-flex align-items-center gap-2">
                   <div class="offcanvas__contact-icon">
                      <a href="tel:7024106657"><i class="fa-solid fa-phone"></i></a>
                   </div>
                   <div class="offcanvas__contact-text">
                      <a href="tel:7024106657">+91-702-4106-657</a> <br><a href="tel:07714016657">+91-771-4016-657</a>
                   </div>
                </li>
                <li class="d-flex align-items-center gap-2">
                <div class="offcanvas__contact-icon">
                      <a href="mailto:NSFS.DURG@GMAIL.COM"><i class="fa-regular fa-envelope"></i></a>
                   </div>
                   <div class="offcanvas__contact-text ">
                      <a href="mailto:INFO@NSFS.CO.IN">info@nsfs.co.in</a>
                      <a href="mailto:NSFS.DURG@GMAIL.COM">nsfs.durg@gmsil.com</a>

                   </div>
                   <!-- <div class="offcanvas__contact-text ms-5">
                      <a href="mailto:NSFS.DURG@GMAIL.COM">NSFS.DURG@GMAIL.COM</a>
                   </div> -->
                  
                </li>
              
                <li class="d-flex align-items-center gap-2">
                   <div class="offcanvas__contact-icon">
                      <a href="#!"><i class="far fa-clock"></i></a>
                   </div>
                   <div class="offcanvas__contact-text">
                      <a> 10 AM - 7 PM (Sunday Closed)</a>
                   </div>
                </li>
             </ul>
          </div>
          <div class="offcanvas__social">
             <!-- <ul>
                <li><a target="_blank" href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li><a target="_blank" href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a target="_blank" href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                </li>
             </ul> -->
          </div>
       </div>
    </div>
 </div>
 <div class="body-overlay"></div>
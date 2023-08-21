<?php require('includes/header.php') ?>

<section class="home_top">
    <div class="box">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-pause="true">
            <div class="carousel-indicators">
                <div class="slide_text">
                    <p>Railway Freight</p>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                        <span></span>
                    </button>
                </div>
                <div class="slide_text">
                    <p>Road Freight</p>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2">
                        <span></span>
                    </button>
                </div>

                <div class="slide_text">
                    <p>Full Truckload Services</p>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/home_bg_5.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/home_bg_3.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/home_bg_4.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                <span class="" style="font-size: 4rem;"><i class="fa-solid fa-angle-left"></i></span>
            </button>
            <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                <span class="" style="font-size: 4rem;"><i class="fa-solid fa-angle-right"></i></span>
            </button>
        </div>


        <div class="text">
            <div class="container">
                <div class="home_dis">
                    <div class="img_logo">
                        <img src="images/logo_1.svg" alt="">
                    </div>
                    <div class="des_text">
                        <h2>Fast and secure <br>
                            courier for all your
                            packages</h2>
                        <p>Your packages will not be damaged with our expert courier services</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home_about">
    <div class="container">
        <div class="row mx-4">
            <div class="col-md-6 p-0">
                <div class="text_area">
                    <div class="top_text">
                        <h1>Fast and reliable
                            logistic services</h1>
                        <p>Experience fast and reliable logistic services for seamless transportation solutions.</p>
                    </div>
                </div>
                <a href="services.php" style="text-decoration: none; color:#1E1E1E;">
                    <div class="more_btn">
                        <i class="fa-solid fa-plus"></i>
                        <div class="text">
                            <span>View more <br>
                                about our services</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center p-0">
                <div class="right_img">
                    <img class="" src="images/home_bg_1.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home_changer_btns">
    <div class="container">
        <div class="row mx-4">
            <div class="top_btns">
                <div class="btns">
                    <div class="button_area click_btn_services active-links" onclick="ontablink(event,'box1')">
                        <span>Railway Freight</span>
                        <p></p>
                    </div>
                    <div class="button_area click_btn_services" onclick="ontablink(event,'box2')">
                        <span>Road Freight</span>
                        <p></p>
                    </div>
                    <div class="button_area click_btn_services" onclick="ontablink(event, 'box3')">
                        <span>Full Truckload Services</span>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="change_slides">
                <div class="slide_1 service_box active-tab" id="box1">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center justify-content-center p-0">
                            <div class="left_img" data-aos="flip-left" data-aos-duration="1500" ata-aos-easing="ease-out-cubic">
                                <img class="" src="images/home_bg_1.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 p-0">
                            <div class="text_area">
                                <div class="top_text">
                                    <h1>Fast and reliable
                                        logistic services</h1>
                                    <p>Experience fast and reliable logistic services for seamless transportation solutions.</p>
                                </div>
                            </div>
                            <a href="services.php" style="text-decoration: none; color:#1E1E1E;">
                                <div class="more_btn">
                                    <i class="fa-solid fa-plus"></i>
                                    <div class="text">
                                        <span>View more <br>
                                            about our services</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="slide_1 service_box " id="box2">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center justify-content-center p-0">
                            <div class="left_img" data-aos="flip-left" data-aos-duration="2000" ata-aos-easing="ease-out-cubic">
                                <img class="" src="images/home_bg_1.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 p-0">
                            <div class="text_area">
                                <div class="top_text">
                                    <h1>Efficient and reliable road transportation services.</h1>
                                    <p>Seamless and flexible road transport solutions for your goods.</p>
                                </div>
                            </div>
                            <a href="services.php" style="text-decoration: none; color:#1E1E1E;">
                                <div class="more_btn">
                                    <i class="fa-solid fa-plus"></i>
                                    <div class="text">
                                        <span>View more <br>
                                            about our services</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="slide_1 service_box" id="box3">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center justify-content-center p-0">
                            <div class="left_img" data-aos="flip-left">
                                <img class="" src="images/home_bg_1.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 p-0">
                            <div class="text_area">
                                <div class="top_text">
                                    <h1>Cost-effective and timely large consignment deliveries.</h1>
                                    <p>Timely and seamless deliveries for large consianments.</p>
                                </div>
                            </div>
                            <a href="services.php" style="text-decoration: none; color:#1E1E1E;">
                                <div class="more_btn">
                                    <i class="fa-solid fa-plus"></i>
                                    <div class="text">
                                        <span>View more <br>
                                            about our services</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="testimonial_home">
    <div class="container p-0">
        <div class="test_slider_area owl-carousel owl-theme">
            <div class="box ">
                <img src="images/“.svg" alt="" class="coma py-4">
                <p>"NSFS made my transportation experience seamless! Their professionalism and punctuality were truly impressive. I highly recommend NSFS to anyone in need of reliable and efficient transportation services."</p>
                <div class="profile">

                    <div class="img">
                        <img src="images/profile_2.jpg" alt="">
                    </div>
                    <div class="text">
                        <span>Satisfied Client</span>
                        <p>Sam Kumar</p>
                    </div>
                </div>
            </div>
            <div class="box ">
                <img src="images/“.svg" alt="" class="coma py-4">
                <p>"NSFS made my transport experience seamless! Their exceptional service and timely deliveries truly impressed me. Trustworthy and efficient - I highly recommend NSFS!."</p>
                <div class="profile">

                    <div class="img">
                    <img src="images/profile_2.jpg" alt="">
                    </div>
                    <div class="text">
                        <span>Satisfied Client</span>
                        <p>jack dube</p>
                    </div>
                </div>
            </div>
            <div class="box ">
                <img src="images/“.svg" alt="" class="coma py-4">
                <p>NSFS has exceeded my expectations as a transport company. Their professionalism, punctuality, and dedication to customer satisfaction are truly commendable. Reliable and efficient, NSFS is my top choice for all transportation needs.</p>
                <div class="profile">

                    <div class="img">
                    <img src="images/profile_2.jpg" alt="">
                    </div>
                    <div class="text">
                        <span>Satisfied Client</span>
                        <p>Anay Singh</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home_services">
    <div class="container">
        <div class="row mx-4">
            <div class="col-md-4 p-2">
                <div class="box">
                    <div class="head">
                        <i class="fa-solid fa-train"></i>
                        <span>Railway Freight</span>
                    </div>
                    <div class="des">
                        <p>Our railway freight service at North Super Fast Service Ltd. efficiently moves goods across India using the extensive railway network, ensuring timely deliveries and cost-effectiveness. Leveraging specialized freight wagons (SLR) and vehicles on parallel tracks (VPU), we cater to bulk shipments like FMCG products, raw materials, and industrial goods, as well as smaller retail and individual customers. With a commitment to excellence and transshipment facilities for seamless transfers, we provide safe and reliable transportation for businesses across the nation.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4 p-2">
                <div class="box">
                    <div class="head">
                        <i class="fa-solid fa-truck"></i>
                        <span>Road Freight</span>
                    </div>
                    <div class="des">
                        <p> As a reliable logistics partner, North Super Fast Service Ltd. offers efficient road freight solutions, catering to the demands of the business community for seamless transportation. With a well-maintained self-owned fleet and a dedicated team, we ensure timely departures and arrivals, optimizing capacity utilization for both small parcels and larger consignments. Our express parcel delivery system guarantees swift and secure shipments, providing businesses with the convenience and flexibility they require for their transportation needs.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4 p-2">
                <div class="box">
                    <div class="head">
                        <i class="fa-solid fa-trailer"></i>
                        <span>Full Truckload Services</span>
                    </div>
                    <div class="des">
                        <p> At North Super Fast Service Ltd., our Full Truckload Services are tailored to accommodate the transportation requirements of manufacturers with large quantities of goods. With pre-determined pricing and a focus on optimized capacity utilization, we offer cost-effective solutions while maintaining reliability and timeliness. From handling 16-ton consignments between states like Tamil Nadu, Kerala, Karnataka, and Chhattisgarh to providing part load options at full road freight rates, our FTL services ensure smooth and efficient deliveries, satisfying the unique needs of our valued clients.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mission_vision">
    <div class="container">
        <div class="row mission mx-4">
            <div class="col-md-6">
                <div class="text">
                    <h1>Mission</h1>
                    <p>At North Super Fast Service Ltd, our mission is to be the leading logistics partner in India, delivering exceptional and innovative solutions to our clients. We aim to provide reliable, cost-effective, and efficient transportation services that exceed customer expectations. With a strong commitment to safety, sustainability, and customer satisfaction, we strive to build lasting relationships and contribute to the growth and success of businesses nationwide.</p>
                </div>
            </div>
            <div class="col-md-6 border_1">
                <div class="img">
                    <img id="img" class="slide-image" src="images/mission_bg_1.png" alt="">
                </div>
            </div>
        </div>
        <div class="row vision mx-4">
            <div class="col-md-6 border_1">
                <div class="img">
                    <img src="images/vision_bg_1.png" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="text">
                    <h1>Vision</h1>
                    <p>At North Super Fast Service Ltd, our mission is to be the leading logistics partner in India, delivering exceptional and innovative solutions to our clients. We aim to provide reliable, cost-effective, and efficient transportation services that exceed customer expectations. With a strong commitment to safety, sustainability, and customer satisfaction, we strive to build lasting relationships and contribute to the growth and success of businesses nationwide.</p>
                </div>
            </div>

        </div>
        <div class="row after_m_v mx-4">
            <div class="col-md-6">
                <div class="text">
                    <h1>“We guarantee fast and safe transport for your packages„</h1>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="des">
                            <h2>Railway Freight</h2>
                            <p>NSFS: Streamline your cargo movement with our efficient Railway Freight solutions. Fast, reliable, and cost-effective transportation you can trust.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="des">
                            <h2>Road Freight</h2>
                            <p>NSFS offers seamless road freight solutions, ensuring timely and secure deliveries across distances. Your cargo, our priority.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="des">
                            <h2>Full Truckload Services</h2>
                            <p>NSFS offers seamless Full Truckload Services for efficient and cost-effective transportation solutions. Your cargo, our priority.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="what_done">
    <div class="container-fluid">
        <div class="row py-5">
            <div class="col-md-3">
                <div class="box">
                    <p>Packages Delivered (Monthly)</p>
                    <span class="count_num" data-val="10000">10000+</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box">
                    <p>Monthly LKM Covered</p>
                    <span class="count_num" data-val="8348">3.5 L +</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box">
                    <p>Tons of Goods Transported (Monthly)</p>
                    <span class="count_num" data-val="2000">2000+</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box">
                    <p>Satisfied Clientele</p>
                    <span class="count_num" data-val="5000">5000+</span>
                </div>
            </div>
        </div>
    </div>

</section>
<section>
    <div class="container py-5">
        <div class="end_text mx-4">
            <h1>Delivering seamless logistics solutions with innovation and expertise, coordinated by a qualified team for efficient and timely delivery.</h1>
        </div>
    </div>
</section>
<?php require('includes/footer.php') ?>
<?php require('includes/script.php') ?>
<script>
    const myCarousel = document.getElementById("carouselExampleIndicators");
    const carouselIndicators = myCarousel.querySelectorAll(
        ".carousel-indicators button span"
    );
    let intervalID;

    const carousel = new bootstrap.Carousel(myCarousel);

    window.addEventListener("load", function() {
        fillCarouselIndicator(1);
    });

    myCarousel.addEventListener("slide.bs.carousel", function(e) {
        let index = e.to;
        fillCarouselIndicator(++index);
    });

    function fillCarouselIndicator(index) {
        let i = 0;
        for (const carouselIndicator of carouselIndicators) {
            carouselIndicator.style.width = 0;
        }
        clearInterval(intervalID);
        carousel.pause();

        intervalID = setInterval(function() {
            i++;

            myCarousel.querySelector(".carousel-indicators .active span").style.width =
                i + "%";

            if (i >= 100) {
                // i = 0; -> just in case
                carousel.next();
            }
        }, 50);
    }
</script>
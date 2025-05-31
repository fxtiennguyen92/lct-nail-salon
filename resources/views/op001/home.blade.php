@extends('op001.template.index')

@push('content')
    <!-- HERO-2
       ============================================= -->
    <section id="hero-2" class="bg-fixed hero-section division">
        <div class="container">
            <div class="row d-flex align-items-center">

                <!-- HERO TEXT -->
                <div class="col-md-7 col-lg-6">
                    <div class="hero-2-txt white--color wow fadeInRight">

                        <!-- Title -->
                        <h2>Belle <br/><small><i>jusqu'au bout</i></small> <br/><span>des ongles</span></h2>

                        <!-- Text -->
                        <p class="p-title-md">Des soins sur mesure, un savoir-faire expert et une touche de créativité pour révéler l'élégance de vos mains.</p>

                        <!-- Button -->
                        <a href="{{ setting('site.planity') }}" class="btn violet-red--btn tra-white--hover" target="_blank">Prendre rendez-vous</a>

                    </div>
                </div> <!-- END HERO TEXT -->


                <!-- HERO IMAGE -->
                <div class="col-md-5 col-lg-6">
                    <div class="hero-2-img wow fadeInLeft">
                        <img class="img-fluid" src="{{ Storage::disk('public')->url(setting('site.home_banner')) }}"
                            alt="hero-image">
                    </div>
                </div>


            </div> <!-- End row -->
        </div> <!-- End container -->


        <!-- WAVE SHAPE BOTTOM -->
        <div class="wave-shape-bottom">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 195">
                <path fill="#ffffff" fill-opacity="1" d="M0,192L1440,96L1440,320L0,320Z"></path>
            </svg>
        </div>


    </section> <!-- END HERO-2 -->




    <!-- ABOUT-3a
       ============================================= -->
    <section id="about-3a" class="pt-100 about-section division">
        <div class="container">
            <div class="row d-flex align-items-center">


                <!-- IMAGE BLOCK -->
                <div class="col-md-5 col-lg-6 order-last order-md-2">
                    <div class="img-block left-column wow fadeInRight">
                        <img class="img-fluid" src="images/800x700_1.jpg" alt="about-image">
                    </div>
                </div>


                <!-- TEXT BLOCK -->
                <div class="col-md-7 col-lg-6 order-first order-md-2">
                    <div class="txt-block right-column wow fadeInLeft">

                        <!-- Section ID -->
                        <div class="section-id">Get Your Shine On</div>

                        <!-- Title -->
                        <h3 class="h3-md">Skilled Nail Art</h3>

                        <!-- Text -->
                        <p class="p-lg">Nullam tempor sapien gravida donec and pretium ipsum porta integer justo an odio
                            velna vitae
                            auctor integer congue magna undo purus a pretium ligula rutrum magna egestas
                        </p>

                        <!-- List -->
                        <ul class="simple-list">

                            <li class="list-item">
                                <p class="p-lg">Aliquam vitae molestie at quisque sapien volutpat and justo, aliquet
                                    molestie purus
                                    efficitur ipsum
                                </p>
                            </li>

                            <li class="list-item">
                                <p class="p-lg">Sagittis congue augue magna risus mauris volutpat and egestas magna
                                    suscipit egestas a
                                    vitae purus
                                </p>
                            </li>

                        </ul>

                    </div>
                </div>


            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- END ABOUT-3a -->




    <!-- SERVICES-7
       ============================================= -->
    <section id="services-7" class="wide-60 services-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="section-title title-01 mb-60">

                        <!-- Section ID -->
                        <span class="section-id">Choose The Beauty</span>

                        <!-- Title -->
                        <h2 class="h2-lg">Peace, Love & Nails.</h2>

                    </div>
                </div>
            </div>


            <!-- SERVICES-7 WRAPPER -->
            <div class="sbox-7-wrapper text-center">
                <div class="row row-cols-1 row-cols-md-3">


                    <!-- SERVICE BOX #1 -->
                    <div class="col">
                        <div class="sbox-7 mb-40 wow fadeInUp" data-wow-delay="0.3s">

                            <!-- Image -->
                            <div class="sbox-7-img mb-30">
                                <div class="hover-overlay">
                                    <img class="img-fluid" src="images/700x900_1.jpg" alt="service-image" />
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                            <!-- Title -->
                            <h5 class="h5-xl sbox-link"><a href="pricing.html">Mani's & Pedi's</a></h5>

                        </div>
                    </div> <!-- END SERVICE BOX #1 -->


                    <!-- SERVICE BOX #2 -->
                    <div class="col">
                        <div class="sbox-7 mb-40 wow fadeInUp" data-wow-delay="0.6s">

                            <!-- Image -->
                            <div class="sbox-7-img mb-30">
                                <div class="hover-overlay">
                                    <img class="img-fluid" src="images/700x900_2.jpg" alt="service-image" />
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                            <!-- Title -->
                            <h5 class="h5-xl sbox-link"><a href="pricing.html">Acrylic & Gel's</a></h5>

                        </div>
                    </div> <!-- END SERVICE BOX #2 -->


                    <!-- SERVICE BOX #3 -->
                    <div class="col">
                        <div class="sbox-7 mb-40 wow fadeInUp" data-wow-delay="0.9s">

                            <!-- Image -->
                            <div class="sbox-7-img mb-30">
                                <div class="hover-overlay">
                                    <img class="img-fluid" src="images/700x900_3.jpg" alt="service-image" />
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                            <!-- Title -->
                            <h5 class="h5-xl sbox-link"><a href="pricing.html">Add-on & Massages</a></h5>

                        </div>
                    </div> <!-- END SERVICE BOX #3 -->


                </div> <!-- End row -->
            </div> <!-- END SERVICES-6 WRAPPER -->


        </div> <!-- End container -->
    </section> <!-- END SERVICES-7 -->




    <!-- ABOUT-5
       ============================================= -->
    <section id="about-5" class="pb-100 about-section division">
        <div class="container">
            <div class="row d-flex align-items-center">


                <!-- TEXT TABLE -->
                <div class="col-md-6 order-last order-md-2">
                    <div class="txt-table left-column wow fadeInRight">

                        <!-- Table -->
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Mon – Wed</td>
                                    <td> - </td>
                                    <td class="text-end">10:00 AM - 9:00 PM</td>
                                </tr>
                                <tr>
                                    <td>Thursday</td>
                                    <td> - </td>
                                    <td class="text-end">10:00 AM - 7:30 PM</td>
                                </tr>
                                <tr>
                                    <td>Friday</td>
                                    <td> - </td>
                                    <td class="text-end">10:00 AM - 9:00 PM</td>
                                </tr>
                                <tr class="last-tr">
                                    <td>Sun - Sun</td>
                                    <td>-</td>
                                    <td class="text-end">10:00 AM - 5:00 PM</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> <!-- END TEXT TABLE -->


                <!-- TEXT BLOCK -->
                <div class="col-md-6 order-first order-md-2">
                    <div class="txt-block right-column wow fadeInLeft">

                        <!-- Section ID -->
                        <span class="section-id">Time Schedule</span>

                        <!-- Title -->
                        <h3 class="h3-xs">Working Hours</h3>

                        <!-- Text -->
                        <p class="p-lg">Gravida porta vitae auctor congue magna impedit ligula and risus mauris donec
                            ligula magnis
                            aliqum mullam and primis risus undo donec luctus neque feugiat suscipit risus auctor egestas an
                            augue mauri
                            ligula magnis aliqum sapien vitae nemo egestas
                        </p>

                    </div>
                </div> <!-- END TEXT BLOCK -->


            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- END ABOUT-5 -->




    <!-- ABOUT-9
       ============================================= -->
    <section id="about-9" class="white-smoke--shape about-section division">
        <div class="container">
            <div class="row d-flex align-items-center">


                <!-- ABOUT-9 TEXT -->
                <div class="col-md-6 col-lg-5 order-last order-md-2">
                    <div class="about-9-txt wow fadeInRight">

                        <!-- Section ID -->
                        <span class="section-id">Get Your Shine On</span>

                        <!-- Title -->
                        <h3 class="h3-md">Shining Feminine</h3>

                        <!-- Text -->
                        <p class="p-lg">Nullam tempor sapien gravida donec and pretium ipsum porta integer justo odio
                            velna a vitae
                            auctor justo integer congue undo purus ligula a pretium rutrum egestas
                        </p>

                        <!-- Small Title -->
                        <h5 class="h5-lg">Elegance in Every Stroke</h5>

                        <!-- List -->
                        <ul class="simple-list">

                            <li class="list-item">
                                <p class="p-lg">Aliquam vitae molestie at quisque sapien volutpat and justo, aliquet
                                    molestie purus
                                    efficitur ipsum
                                </p>
                            </li>

                            <li class="list-item">
                                <p class="p-lg">Sagittis congue augue magna risus mauris volutpat and egestas magna
                                    suscipit egestas
                                    a vitae purus
                                </p>
                            </li>

                        </ul>

                    </div>
                </div> <!-- END ABOUT-9 TEXT -->


                <!-- ABOUT-9 IMAGE -->
                <div class="col-md-6 col-lg-7 order-first order-md-2">
                    <div class="about-9-img wow fadeInLeft">
                        <img class="img-fluid" src="images/800x700_2.jpg" alt="about-image">
                    </div>
                </div>


            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- END ABOUT-9 -->




    <!-- ABOUT-4
       ============================================= -->
    <section id="about-4" class="pt-100 about-section division">
        <div class="container">
            <div class="row d-flex align-items-center">


                <!-- IMAGE BLOCK -->
                <div class="col-md-6 order-last order-md-2">
                    <div class="img-block left-column wow fadeInRight">
                        <img class="img-fluid" src="images/polish.png" alt="about-image">
                    </div>
                </div>


                <!-- TEXT BLOCK -->
                <div class="col-md-6 order-first order-md-2">
                    <div class="txt-block right-column wow fadeInLeft">

                        <!-- Section ID -->
                        <span class="section-id">Fresh, Shiny, Bright</span>

                        <!-- Title -->
                        <h3 class="h3-md">Make your day shine with your shiny nails</h3>

                    </div>
                </div>


            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- END ABOUT-4 -->




    <!-- PRICING-6
       ============================================= -->
    <section id="pricing-6" class="bg--tra-img wide-70 pricing-section division">
        <div class="container">


            <!-- PRICING-6 WRAPPER -->
            <div class="pricing-6-wrapper">
                <div class="row">


                    <!-- PRICING-6 TABLE -->
                    <div class="col-lg-6">
                        <div class="pricing-6-table pr-25 wow fadeInUp">

                            <!-- Section ID -->
                            <span class="section-id">Nails & Cocktails</span>

                            <!-- Title -->
                            <h5 class="h5-xl pricing-title">Hands & Feet</h5>

                            <!-- PRICING LIST -->
                            <ul class="pricing-6-list">


                                <!-- PRICING ITEM #1 -->
                                <li class="pricing-6-item">

                                    <!-- Title & Price -->
                                    <div class="detail-price">
                                        <div class="price-name">
                                            <h5 class="h5-lg">Classic Manicure</h5>
                                        </div>
                                        <div class="price-dots"></div>
                                        <div class="price-number">
                                            <h5 class="h5-lg">$19</h5>
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class="price-txt">
                                        <p class="p-md"><em>Service length 25 minutes</em></p>
                                    </div>

                                </li>


                                <!-- MENU ITEM #2 -->
                                <li class="pricing-6-item">

                                    <!-- Title & Price -->
                                    <div class="detail-price">
                                        <div class="price-name">
                                            <h5 class="h5-lg">Spa Manicure</h5>
                                        </div>
                                        <div class="price-dots"></div>
                                        <div class="price-number">
                                            <h5 class="h5-lg">$30</h5>
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class="price-txt">
                                        <p class="p-md"><em>Service length 35 minutes</em></p>
                                    </div>

                                </li>


                                <!-- MENU ITEM #3 -->
                                <li class="pricing-6-item">

                                    <!-- Title & Price -->
                                    <div class="detail-price">
                                        <div class="price-name">
                                            <h5 class="h5-lg">Aloe Vera Manicure</h5>
                                        </div>
                                        <div class="price-dots"></div>
                                        <div class="price-number">
                                            <h5 class="h5-lg">$48</h5>
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class="price-txt">
                                        <p class="p-md"><em>Service length 45 minutes</em></p>
                                    </div>

                                </li>


                                <!-- MENU ITEM #4 -->
                                <li class="pricing-6-item">

                                    <!-- Title & Price -->
                                    <div class="detail-price">
                                        <div class="price-name">
                                            <h5 class="h5-lg">Gel Manicure</h5>
                                        </div>
                                        <div class="price-dots"></div>
                                        <div class="price-number">
                                            <h5 class="h5-lg">$35</h5>
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class="price-txt">
                                        <p class="p-md"><em>Service length 40 minutes</em></p>
                                    </div>

                                </li>


                                <!-- MENU ITEM #5 -->
                                <li class="pricing-6-item">

                                    <!-- Title & Price -->
                                    <div class="detail-price">
                                        <div class="price-name">
                                            <h5 class="h5-lg">Organic Express Pedi</h5>
                                        </div>
                                        <div class="price-dots"></div>
                                        <div class="price-number">
                                            <h5 class="h5-lg">$34</h5>
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class="price-txt">
                                        <p class="p-md"><em>Service length 35-45 minutes</em></p>
                                    </div>

                                </li>


                                <!-- MENU ITEM #6 -->
                                <li class="pricing-6-item resp-lst">

                                    <!-- Title & Price -->
                                    <div class="detail-price">
                                        <div class="price-name">
                                            <h5 class="h5-lg">Signature Gel Manicure</h5>
                                        </div>
                                        <div class="price-dots"></div>
                                        <div class="price-number">
                                            <h5 class="h5-lg">$50</h5>
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class="price-txt">
                                        <p class="p-md"><em>Service length 40 minutes</em></p>
                                    </div>

                                </li>


                                <!-- MENU ITEM #7 -->
                                <li class="pricing-6-item resp-lst">

                                    <!-- Title & Price -->
                                    <div class="detail-price">
                                        <div class="price-name">
                                            <h5 class="h5-lg">Hard Gel Full Set</h5>
                                        </div>
                                        <div class="price-dots"></div>
                                        <div class="price-number">
                                            <h5 class="h5-lg">$85</h5>
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class="price-txt">
                                        <p class="p-md"><em>Service length 100-120 minutes</em></p>
                                    </div>

                                </li>


                                <!-- MENU ITEM #8 -->
                                <li class="pricing-6-item resp-lst">

                                    <!-- Title & Price -->
                                    <div class="detail-price">
                                        <div class="price-name">
                                            <h5 class="h5-md">Mini Cure</h5>
                                        </div>
                                        <div class="price-dots"></div>
                                        <div class="price-number">
                                            <h5 class="h5-md">$17</h5>
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class="price-txt">
                                        <p class="p-md"><em>Ages 3-8. Service length 20-30 minutes</em></p>
                                    </div>

                                </li>


                            </ul> <!-- END PRICING LIST -->


                        </div>
                    </div> <!-- END pricing-6 TABLE -->


                    <!-- PRICING-6 TABLE -->
                    <div class="col-lg-6">
                        <div class="pricing-6-table pl-25 wow fadeInUp">

                            <!-- Section ID -->
                            <span class="section-id">Paint Packages</span>

                            <!-- Title -->
                            <h5 class="h5-xl pricing-title">Add-On Services</h5>

                            <!-- PRICING LIST -->
                            <ul class="pricing-6-list">


                                <!-- MENU ITEM #9 -->
                                <li class="pricing-6-item">

                                    <!-- Title & Price -->
                                    <div class="detail-price">
                                        <div class="price-name">
                                            <h5 class="h5-lg">Nail Art</h5>
                                        </div>
                                        <div class="price-dots"></div>
                                        <div class="price-number">
                                            <h5 class="h5-lg">$11</h5>
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class="price-txt">
                                        <p class="p-md"><em>Service length 15 minutes</em></p>
                                    </div>

                                </li>


                                <!-- MENU ITEM #10 -->
                                <li class="pricing-6-item">

                                    <!-- Title & Price -->
                                    <div class="detail-price">
                                        <div class="price-name">
                                            <h5 class="h5-lg">French Polish</h5>
                                        </div>
                                        <div class="price-dots"></div>
                                        <div class="price-number">
                                            <h5 class="h5-lg">$16</h5>
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class="price-txt">
                                        <p class="p-md"><em>Service length 20 minutes</em></p>
                                    </div>

                                </li>


                                <!-- MENU ITEM #11 -->
                                <li class="pricing-6-item">

                                    <!-- Title & Price -->
                                    <div class="detail-price">
                                        <div class="price-name">
                                            <h5 class="h5-lg">Paraffin Mask</h5>
                                        </div>
                                        <div class="price-dots"></div>
                                        <div class="price-number">
                                            <h5 class="h5-lg">$18</h5>
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class="price-txt">
                                        <p class="p-md"><em>Service length 20 minutes</em></p>
                                    </div>

                                </li>


                                <!-- MENU ITEM #12 -->
                                <li class="pricing-6-item resp-lst">

                                    <!-- Title & Price -->
                                    <div class="detail-price">
                                        <div class="price-name">
                                            <h5 class="h5-lg">Gel Applications</h5>
                                        </div>
                                        <div class="price-dots"></div>
                                        <div class="price-number">
                                            <h5 class="h5-lg">$24</h5>
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class="price-txt">
                                        <p class="p-md"><em>Service length 15 minutes</em></p>
                                    </div>

                                </li>


                                <!-- MENU ITEM #13 -->
                                <li class="pricing-6-item">

                                    <!-- Title & Price -->
                                    <div class="detail-price">
                                        <div class="price-name">
                                            <h5 class="h5-lg">Gel Polish Removal</h5>
                                        </div>
                                        <div class="price-dots"></div>
                                        <div class="price-number">
                                            <h5 class="h5-lg">$14</h5>
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class="price-txt">
                                        <p class="p-md"><em>Service length 25 minutes</em></p>
                                    </div>

                                </li>


                                <!-- MENU ITEM #14 -->
                                <li class="pricing-6-item">

                                    <!-- Title & Price -->
                                    <div class="detail-price">
                                        <div class="price-name">
                                            <h5 class="h5-lg">Callus Treatment</h5>
                                        </div>
                                        <div class="price-dots"></div>
                                        <div class="price-number">
                                            <h5 class="h5-lg">$19</h5>
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class="price-txt">
                                        <p class="p-md"><em>Service length 30 minutes</em></p>
                                    </div>

                                </li>


                                <!-- MENU ITEM #15 -->
                                <li class="pricing-6-item">

                                    <!-- Title & Price -->
                                    <div class="detail-price">
                                        <div class="price-name">
                                            <h5 class="h5-lg">Collagen Mask</h5>
                                        </div>
                                        <div class="price-dots"></div>
                                        <div class="price-number">
                                            <h5 class="h5-lg">$11</h5>
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class="price-txt">
                                        <p class="p-md"><em>Service length 20-30 minutes</em></p>
                                    </div>

                                </li>


                                <!-- MENU ITEM #16 -->
                                <li class="pricing-6-item">

                                    <!-- Title & Price -->
                                    <div class="detail-price">
                                        <div class="price-name">
                                            <h5 class="h5-lg">Holographic Effect</h5>
                                        </div>
                                        <div class="price-dots"></div>
                                        <div class="price-number">
                                            <h5 class="h5-lg">$16</h5>
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class="price-txt">
                                        <p class="p-md"><em>Service length 25-30 minutes</em></p>
                                    </div>

                                </li>


                            </ul> <!-- END PRICING LIST -->


                        </div>
                    </div> <!-- END PRICING-6 TABLE -->


                </div> <!-- End row -->
            </div> <!-- END PRICING-6 WRAPPER -->


            <!-- BUTTON -->
            <div class="row">
                <div class="col">
                    <div class="more-btn mt-50">
                        <p class="tra-link"><a href="pricing.html">View All Prices</a></p>
                    </div>
                </div>
            </div> <!-- END BUTTON -->


        </div> <!-- End container -->
    </section> <!-- END PRICING-6 -->




    <!-- VIDEO-1
       ============================================= -->
    <div id="video-1" class="bg-fixed video-section division">
        <div class="container white-color">
            <div class="row">


                <!-- VIDEO LINK -->
                <div class="col-md-8 offset-md-2">
                    <div class="video-1-preview">
                        <a class="video-popup1" href="https://www.youtube.com/embed/SZEflIVnhH8">
                            <!-- Change the link HERE!!! -->

                            <!-- Play Icon -->
                            <div class="video-btn video-btn-xl bg--violet-red ico-90">
                                <div class="video-block-wrapper"><span class="flaticon-18"></span></div>
                            </div>

                        </a>
                    </div>
                </div>


            </div> <!-- End row -->
        </div> <!-- End container -->
    </div> <!-- END VIDEO-1 -->




    <!-- GALLERY-2
       ============================================= -->
    <section id="gallery-2" class="pt-100 gallery-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="section-title title-01 mb-60">

                        <!-- Section ID -->
                        <span class="section-id">Images Gallery</span>

                        <!-- Title -->
                        <h2 class="h2-lg">Stop Time. Stay Beautiful</h2>

                    </div>
                </div>
            </div>


            <!-- IMAGES HOLDER -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4">


                <!-- IMAGE #1 -->
                <div class="col">
                    <div id="img-2-1" class="gallery-image">
                        <a class="image-link" href="images/gallery/700x700_1.jpg">
                            <div class="hover-overlay">

                                <!-- Image -->
                                <img class="img-fluid" src="images/gallery/700x700_1.jpg" alt="gallery-image" />
                                <div class="item-overlay"></div>

                                <!-- Image Description -->
                                <div class="image-description white--color">
                                    <div class="image-caption">
                                        <p class="txt-upcase">Art, Care</p>
                                        <h5 class="h5-lg">Nail Art Design</h5>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>


                <!-- IMAGE #2 -->
                <div class="col">
                    <div id="img-2-2" class="gallery-image">
                        <a class="image-link" href="images/gallery/700x700_2.jpg">
                            <div class="hover-overlay">

                                <!-- Image -->
                                <img class="img-fluid" src="images/gallery/700x700_2.jpg" alt="gallery-image" />
                                <div class="item-overlay"></div>

                                <!-- Image Description -->
                                <div class="image-description white--color">
                                    <div class="image-caption">
                                        <p class="txt-upcase">Hands, Treatment</p>
                                        <h5 class="h5-lg">Callus Treatment</h5>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>


                <!-- IMAGE #3 -->
                <div class="col">
                    <div id="img-2-3" class="gallery-image">
                        <a class="image-link" href="images/gallery/700x700_3.jpg">
                            <div class="hover-overlay">

                                <!-- Image -->
                                <img class="img-fluid" src="images/gallery/700x700_3.jpg" alt="gallery-image" />
                                <div class="item-overlay"></div>

                                <!-- Image Description -->
                                <div class="image-description white--color">
                                    <div class="image-caption">
                                        <p class="txt-upcase">Hands, Care</p>
                                        <h5 class="h5-lg">Polish Change</h5>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>


                <!-- IMAGE #4 -->
                <div class="col">
                    <div id="img-2-4" class="gallery-image">
                        <a class="image-link" href="images/gallery/700x700_4.jpg">
                            <div class="hover-overlay">

                                <!-- Image -->
                                <img class="img-fluid" src="images/gallery/700x700_4.jpg" alt="gallery-image" />
                                <div class="item-overlay"></div>

                                <!-- Image Description -->
                                <div class="image-description white--color">
                                    <div class="image-caption">
                                        <p class="txt-upcase">Hands, Care</p>
                                        <h5 class="h5-lg">Classic Manicure</h5>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>


                <!-- IMAGE #5 -->
                <div class="col">
                    <div id="img-2-5" class="gallery-image">
                        <a class="image-link" href="images/gallery/700x700_5.jpg">
                            <div class="hover-overlay">

                                <!-- Image -->
                                <img class="img-fluid" src="images/gallery/700x700_5.jpg" alt="gallery-image" />
                                <div class="item-overlay"></div>

                                <!-- Image Description -->
                                <div class="image-description white--color">
                                    <div class="image-caption">
                                        <p class="txt-upcase">Hands, Treatment</p>
                                        <h5 class="h5-lg">Spa Pedicure</h5>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>


                <!-- IMAGE #6 -->
                <div class="col">
                    <div id="img-2-6" class="gallery-image">
                        <a class="image-link" href="images/gallery/700x700_6.jpg">
                            <div class="hover-overlay">

                                <!-- Image -->
                                <img class="img-fluid" src="images/gallery/700x700_6.jpg" alt="gallery-image" />
                                <div class="item-overlay"></div>

                                <!-- Image Description -->
                                <div class="image-description white--color">
                                    <div class="image-caption">
                                        <p class="txt-upcase">Hands, Treatment</p>
                                        <h5 class="h5-lg">Gel Manicure</h5>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>


                <!-- IMAGE #7 -->
                <div class="col">
                    <div id="img-2-7" class="gallery-image">
                        <a class="image-link" href="images/gallery/700x700_7.jpg">
                            <div class="hover-overlay">

                                <!-- Image -->
                                <img class="img-fluid" src="images/gallery/700x700_7.jpg" alt="gallery-image" />
                                <div class="item-overlay"></div>

                                <!-- Image Description -->
                                <div class="image-description white--color">
                                    <div class="image-caption">
                                        <p class="txt-upcase">Hands, Treatment</p>
                                        <h5 class="h5-lg">Express Manicure</h5>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>


                <!-- IMAGE #8 -->
                <div class="col">
                    <div id="img-2-8" class="gallery-image">
                        <a class="image-link" href="images/gallery/700x700_8.jpg">
                            <div class="hover-overlay">

                                <!-- Image -->
                                <img class="img-fluid" src="images/gallery/700x700_8.jpg" alt="gallery-image" />
                                <div class="item-overlay"></div>

                                <!-- Image Description -->
                                <div class="image-description white--color">
                                    <div class="image-caption">
                                        <p class="txt-upcase">Hands, Treatment</p>
                                        <h5 class="h5-lg">Paraffin Manicure</h5>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>


            </div> <!-- END IMAGES HOLDER -->


        </div> <!-- End container -->
    </section> <!-- END GALLERY-2 -->




    <!-- SERVICES-2
       ============================================= -->
    <section id="services-2" class="wide-70 services-section division">
        <div class="container">


            <!-- SERVICES-2 WRAPPER -->
            <div class="sbox-2-wrapper text-center">
                <div class="row row-cols-1 row-cols-md-3">


                    <!-- SERVICES BOX #1 -->
                    <div class="col">
                        <div id="sb-2-1" class="sbox-2 mb-40 wow fadeInUp" data-wow-delay="0.3s">

                            <!-- Icon -->
                            <div class="sbox-ico ico-95 black--color">
                                <span class="flaticon-woman"></span>
                            </div>

                            <!-- Title -->
                            <h5 class="h5-lg">Best Experts</h5>

                            <!-- Text -->
                            <p class="p-lg">Ligula risus auctor tempus and dolor vitae undo purus semper sodales</p>

                            <!-- Link -->
                            <p class="tra-link mt-20"><a href="team.html">Find Out More</a></p>

                        </div>
                    </div>


                    <!-- SERVICES BOX #2 -->
                    <div class="col">
                        <div id="sb-2-2" class="sbox-2 mb-40 wow fadeInUp" data-wow-delay="0.6s">

                            <!-- Icon -->
                            <div class="sbox-ico ico-95 black--color">
                                <span class="flaticon-cosmetics"></span>

                            </div>

                            <!-- Title -->
                            <h5 class="h5-lg">Safety Standards</h5>

                            <!-- Text -->
                            <p class="p-lg">Ligula risus auctor tempus and dolor vitae undo purus semper sodales</p>

                            <!-- Link -->
                            <p class="tra-link mt-20"><a href="about.html">Find Out More</a></p>

                        </div>
                    </div>


                    <!-- SERVICES BOX #3 -->
                    <div class="col">
                        <div id="sb-2-3" class="sbox-2 mb-40 wow fadeInUp" data-wow-delay="0.9s">

                            <!-- Icon -->
                            <div class="sbox-ico ico-95 black--color">
                                <span class="flaticon-gift-card-2"></span>
                            </div>

                            <!-- Title -->
                            <h5 class="h5-lg">Gift Vouchers</h5>

                            <!-- Text -->
                            <p class="p-lg">Ligula risus auctor tempus and dolor vitae undo purus semper sodales</p>

                            <!-- Link -->
                            <p class="tra-link mt-20"><a href="gift-cards.html">Find Out More</a></p>

                        </div>
                    </div>


                </div> <!-- End row -->
            </div> <!-- END SERVICES-2 WRAPPER -->


        </div> <!-- End container -->
    </section> <!-- END SERVICES-2 -->




    <!-- ABOUT-10
       ============================================= -->
    <section id="about-10" class="about-section division">
        <div class="container white-smoke--shape">
            <div class="row d-flex align-items-center">


                <!-- ABOUT-10 IMAGE -->
                <div class="col-md-5 col-lg-6">
                    <div class="about-10-img wow fadeInRight">
                        <img class="img-fluid" src="images/700x700_2.jpg" alt="about-image">
                    </div>
                </div>


                <!-- ABOUT-10 TEXT -->
                <div class="col-md-7 col-lg-6">
                    <div class="about-10-txt wow fadeInLeft">

                        <!-- Small Title -->
                        <h5 class="h5-lg">Reveal Colourful You</h5>

                        <!-- Text -->
                        <p class="p-lg">Nullam tempor sapien gravida donec and pretium ipsum porta integer justo odio
                            velna a vitae
                            auctor justo integer congue undo purus ligula a pretium rutrum egestas
                        </p>

                        <!-- Small Title -->
                        <h5 class="h5-lg">A Personal Touch</h5>

                        <!-- List -->
                        <ul class="simple-list">

                            <li class="list-item">
                                <p class="p-lg">Aliquam vitae molestie at quisque sapien volutpat and justo, aliquet
                                    molestie purus
                                    efficitur ipsum
                                </p>
                            </li>

                            <li class="list-item">
                                <p class="p-lg">Sagittis congue augue magna risus mauris volutpat and egestas magna
                                    suscipit egestas
                                    a vitae purus
                                </p>
                            </li>

                        </ul>


                    </div>
                </div> <!-- END ABOUT-10 TEXT -->


            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- END ABOUT-10 -->




    <!-- TESTIMONIALS-1
       ============================================= -->
    <section id="reviews-1" class="wide-100 reviews-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="section-title title-01 mb-50">

                        <!-- Section ID -->
                        <span class="section-id">Testimonials</span>

                        <!-- Title -->
                        <h2 class="h2-lg">What People Are Saying</h2>

                    </div>
                </div>
            </div>


            <!-- TESTIMONIALS CONTENT -->
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme reviews-wrapper">


                        <!-- TESTIMONIAL #1 -->
                        <div class="review-1">

                            <!-- Quote Icon -->
                            <div class="quote-icon ico-80 black--color"><span class="flaticon-left-quote"></span></div>

                            <!-- Text -->
                            <p class="p-xl">&Prime;Etiam sapien sagittis congue an augue massa varius egestas suscipit
                                magna a tempus
                                and aliquet rutrum magna &Prime;
                            </p>

                            <!-- Testimonial Author -->
                            <span class="testimonial-autor black--color">&mdash; Rachel A.</span>

                        </div> <!-- END TESTIMONIAL #1 -->


                        <!-- TESTIMONIAL #2 -->
                        <div class="review-1">

                            <!-- Quote Icon -->
                            <div class="quote-icon ico-80 black--color"><span class="flaticon-left-quote"></span></div>

                            <!-- Text -->
                            <p class="p-xl">&Prime;At sagittis congue augue undo egestas magna ipsum vitae purus primis
                                suscipit and
                                blandit a cursus molestie at quisque sapien and integer congue magna&Prime;
                            </p>

                            <!-- Testimonial Author -->
                            <span class="testimonial-autor black--color">&mdash; Wendy T.</span>

                        </div> <!-- END TESTIMONIAL #2 -->


                        <!-- TESTIMONIAL #3 -->
                        <div class="review-1">

                            <!-- Quote Icon -->
                            <div class="quote-icon ico-80 black--color"><span class="flaticon-left-quote"></span></div>

                            <!-- Text -->
                            <p class="p-xl">&Prime;Mauris donec ociis magnis sapien etiam sapien congue augue pretium and
                                ligula augue
                                a lectus magna suscipit egestas a vitae purus integer congue&Prime;
                            </p>

                            <!-- Testimonial Author -->
                            <span class="testimonial-autor black--color">&mdash; Grace L.</span>

                        </div> <!-- END TESTIMONIAL #3 -->


                        <!-- TESTIMONIAL #4 -->
                        <div class="review-1">

                            <!-- Quote Icon -->
                            <div class="quote-icon ico-80 black--color"><span class="flaticon-left-quote"></span></div>

                            <!-- Text -->
                            <p class="p-xl">&Prime;An augue in cubilia laoreet magna and suscipit egestas magna ipsum
                                purus an ipsum
                                undo suscipit gravida donec and pretium ipsum porta integer&Prime;
                            </p>

                            <!-- Testimonial Author -->
                            <span class="testimonial-autor black--color">&mdash; Michelle Boxer</span>

                        </div> <!-- END TESTIMONIAL #4 -->


                        <!-- TESTIMONIAL #5 -->
                        <div class="review-1">

                            <!-- Quote Icon -->
                            <div class="quote-icon ico-80 black--color"><span class="flaticon-left-quote"></span></div>

                            <!-- Text -->
                            <p class="p-xl">&Prime;Mauris donec magnis a sapien etiam sapien and congue augue egestas
                                ultrice vitae
                                purus velna integer tempor congue egestas a vitae purus&Prime;
                            </p>

                            <!-- Testimonial Author -->
                            <span class="testimonial-autor black--color">&mdash; Kelley Baker</span>

                        </div> <!-- END TESTIMONIAL #5 -->


                        <!-- TESTIMONIAL #6 -->
                        <div class="review-1">

                            <!-- Quote Icon -->
                            <div class="quote-icon ico-80 black--color"><span class="flaticon-left-quote"></span></div>

                            <!-- Text -->
                            <p class="p-xl">&Prime;An augue cubilia laoreet magna sapien suscipit undo egestas magna
                                ipsum ligula
                                vitae a purus cubilia a blandit and auctor integer congue magna undo justo purus pretium
                                ligula
                                efficitur ipsum&Prime;
                            </p>

                            <!-- Testimonial Author -->
                            <span class="testimonial-autor black--color">&mdash; Sarah D.</span>

                        </div> <!-- END TESTIMONIAL #6 -->


                        <!-- TESTIMONIAL #7 -->
                        <div class="review-1">

                            <!-- Quote Icon -->
                            <div class="quote-icon ico-80 black--color"><span class="flaticon-left-quote"></span></div>

                            <!-- Text -->
                            <p class="p-xl">&Prime;Augue egestas volutpat undo egestas augue in cubilia laoreet magna at
                                primis libero
                                undo suscipit luctus congue magna undo purus pretium ligula rutrum&Prime;
                            </p>

                            <!-- Testimonial Author -->
                            <span class="testimonial-autor black--color">&mdash; Nicole Byer</span>

                        </div> <!-- END TESTIMONIAL #7 -->


                        <!-- TESTIMONIAL #8 -->
                        <div class="review-1">

                            <!-- Quote Icon -->
                            <div class="quote-icon ico-80 black--color"><span class="flaticon-left-quote"></span></div>

                            <!-- Text -->
                            <p class="p-xl">&Prime;Aliquam augue a suscipit luctus neque purus ipsum neque dolor primis
                                libero at tempus
                                blandit posuere magna sagittis congue augue magna risus mauris and volutpat and
                                egestas&Prime;
                            </p>

                            <!-- Testimonial Author -->
                            <span class="testimonial-autor black--color">&mdash; AJ</span>

                        </div> <!-- END TESTIMONIAL #8 -->


                    </div>
                </div>
            </div> <!-- END TESTIMONIALS CONTENT -->


        </div> <!-- End container -->
    </section> <!-- END TESTIMONIALS-1 -->




    <!-- PROMO-4
       ============================================= -->
    <section id="promo-4" class="rel promo-section division">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 align-items-center">


                <!-- PROMO BOX #1 -->
                <div class="col">
                    <div id="pb-4-1">
                        <div class="pbox-4-description black--color">
                            <div class="pbox-4-caption">

                                <!-- Section ID -->
                                <span class="section-id">A Brush of Perfection</span>

                                <!-- Title -->
                                <h3 class="h3-md">Follow & Share</h3>

                                <!-- Link -->
                                <h2 class="h2-xl"><a href="#">@la_notte_nail</a></h2>

                                <!-- Button -->
                                <a href="gallery.html" class="btn violet-red--btn tra-black--hover">View Our Gallery</a>

                            </div>
                        </div>
                    </div>
                </div> <!-- END PROMO BOX #1 -->


                <!-- PROMO BOX #2 -->
                <div class="col">
                    <div id="pb-4-2">
                        <div class="pbox-4-description white--color">
                            <div class="pbox-4-caption">

                                <!-- Section ID -->
                                <span class="section-id">Make It Happen</span>

                                <!-- Title -->
                                <h2>Gigt <span>Cards</span></h2>

                                <!-- Button -->
                                <a href="gift-cards.html" class="btn tra-white--btn violet-red--hover">Find Out More</a>

                            </div>
                        </div>
                    </div>
                </div> <!-- END PROMO BOX #2 -->


            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- END PROMO-4 -->




    <!-- PROMO-2
       ============================================= -->
    <section id="promo-2" class="pt-100 promo-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="section-title title-01 mb-70">

                        <!-- Section ID -->
                        <span class="section-id">Nails And Beyond…</span>

                        <!-- Title -->
                        <h2 class="h2-lg">Nails For Every Budget</h2>

                    </div>
                </div>
            </div>


            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">


                <!-- PROMO BOX #1 -->
                <div class="col align-self-end wow fadeInUp" data-wow-delay="0.3s">
                    <a href="pricing.html">
                        <div id="pb-2-1" class="promo-box">

                            <!-- Text -->
                            <div class="promo-box-txt mb-30">
                                <p class="txt-upcase">From 09.11.21 To 23.11.21</p>
                                <h5 class="h5-xl">30% OFF on Classic Manicure & Pedicure</h5>
                            </div>

                            <!-- Image -->
                            <div class="promo-box-img">
                                <div class="hover-overlay">
                                    <img class="img-fluid" src="images/promo-05.jpg" alt="promo-image" />
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>


                <!-- PROMO BOX #2 -->
                <div id="promo-2-img" class="col wow fadeInUp" data-wow-delay="0.6s">
                    <a href="pricing.html">
                        <div id="pb-2-2" class="promo-box">
                            <div class="hover-overlay">
                                <img class="img-fluid" src="images/promo-06.jpg" alt="promo-image" />
                                <div class="item-overlay"></div>
                            </div>
                        </div>
                    </a>
                </div>


                <!-- PROMO BOX #3 -->
                <div class="col align-self-start wow fadeInUp" data-wow-delay="0.9s">
                    <a href="pricing.html">
                        <div id="pb-2-3" class="promo-box">

                            <!-- Image -->
                            <div class="promo-box-img">
                                <div class="hover-overlay">
                                    <img class="img-fluid" src="images/promo-07.jpg" alt="promo-image" />
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="promo-box-txt mt-30">
                                <p class="txt-upcase">All Autumn Long!</p>
                                <h5 class="h5-xl">Prices Reduced On Spa Procedures UP TO 30%</h5>
                            </div>

                        </div>
                    </a>
                </div>


            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- END PROMO-2 -->




    <!-- BRANDS-1
       ============================================= -->
    <div id="brands-1" class="brands-wide brands-section division">
        <div class="container">
            <div class="row">
                <div class="col brands-1-wrapper text-center">
                    <div class="owl-carousel brands-1-carousel">


                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <img class="img-fluid" src="images/brand-1.png" alt="brand-logo" />
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <img class="img-fluid" src="images/brand-2.png" alt="brand-logo" />
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <img class="img-fluid" src="images/brand-3.png" alt="brand-logo" />
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <img class="img-fluid" src="images/brand-4.png" alt="brand-logo" />
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <img class="img-fluid" src="images/brand-5.png" alt="brand-logo">
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <img class="img-fluid" src="images/brand-6.png" alt="brand-logo" />
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <img class="img-fluid" src="images/brand-7.png" alt="brand-logo" />
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <img class="img-fluid" src="images/brand-8.png" alt="brand-logo" />
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <img class="img-fluid" src="images/brand-9.png" alt="brand-logo" />
                        </div>


                    </div>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </div> <!-- END BRANDS-1 -->




    <!-- BANNER-3
       ============================================= -->
    <section id="banner-3" class="bg-fixed banner-section division">
        <div class="container">
            <div class="row">


                <!-- BANNER TEXT -->
                <div class="col-md-7 col-lg-6">
                    <div class="banner-3-txt text-center">

                        <!-- Title -->
                        <h5 class="h5-md">We want to make every girl pretty, happy, and loved!</h5>
                        <h2>20% OFF</h2>
                        <h4 class="h4-xs">on Manicure + Gel Polish</h4>

                        <!-- Button -->
                        <a href="booking.html" class="btn violet-red--btn tra-black--hover">Booking Online</a>

                        <!-- Small Text -->
                        <p class="mt-20">* All Autumn Long!</p>

                    </div>
                </div> <!-- END BANNER TEXT -->


            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- END BANNER-3 -->
@endpush

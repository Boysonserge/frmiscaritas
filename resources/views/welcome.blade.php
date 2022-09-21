<x-main-layout>
    <x-slot name="sidebar">
        @include('site.header')
    </x-slot>

    <x-slot name="body">
        <!-- Bnner Section -->
        <section class="banner-section">
            <div class="swiper-container banner-slider">
                <div class="swiper-wrapper">
                    <!-- Slide Item -->
                    <div class="swiper-slide" style="background-image: url('https://res.cloudinary.com/dpxr46hv6/image/upload/v1663073369/caritas/smara4_oavzwz.jpg');">
                        <div class="content-outer">
                            <div class="content-box justify-content-center">
                                <div class="inner text-center">
                                    <h4><span class="border-shape-left"></span>{{__('slider.lumen')}}<span class="border-shape-right"></span></h4>
                                    <h1>{{__('slider.lumen')}}</h1>
                                    <div class="text">{{__('slider.lumen-content')}}</div>
                                    <div class="link-box"><a href="#" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide Item -->
                    <div class="swiper-slide" style="background-image: url('https://res.cloudinary.com/dpxr46hv6/image/upload/v1663074820/caritas/5f667adacf9e9_tp3ga7.jpg');">
                        <div class="content-outer">
                            <div class="content-box justify-content-center">
                                <div class="inner text-center">
                                    <h3>{{__('slider.environment')}}</h3>
                                    <h1>{{__('slider.environment')}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-slider-pagination style-two"></div>
                <div class="banner-slider-nav style-one">
                    <div class="banner-slider-control banner-slider-button-prev"><span class="fa fa-angle-left"></span></div>
                    <div class="banner-slider-control banner-slider-button-next"><span class="fa fa-angle-right"></span> </div>
                </div>
            </div>
        </section>
        <!-- End Bnner Section -->


        <!-- About Section -->
        <section class="about-section">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-content-block">
                            <h1>{{__('about.about')}}</h1>
                            <div class="text wow fadeInUp" data-wow-delay="200ms">{{__('about.about-content1')}}</div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="link-btn wow fadeInLeft" data-wow-delay="500ms"><a href="#" class="theme-btn btn-style-two"><i class="flaticon-next"></i><span>Mission</span></a></div>
                                    <div class="text">The Mission of Caritas Diocese Kabgayi is to assist the most vulnerable people in the society, to intervene in case of disasters and advocacy for the needy in promoting integral human development.</div>
                                </div>
                                <div class="col-md-6">
                                    <div class="link-btn wow fadeInRight" data-wow-delay="900ms"><a href="#" class="theme-btn btn-style-three"><i class="flaticon-next"></i><span>Vision</span></a></div>
                                    <div class="text">Our Vision is to achieve a society that provides human dignity and saves its members from social marginalization and injustices. Its inherent concern is to see the poorest social groups, individually or in social solidarity, be self dependent to achieve their human dignity.</div>
                                </div>
                            </div>
                            <div class="link-btn-two">
                                <a href="about.php" class="theme-btn btn-style-one"><span>More About Us</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-image-block">
                            <div class="logo-box">
                                <div class="image wow zoomIn" data-wow-delay="500ms"><img src="images/resource/logo-icon12.png" alt="">
                                </div>
                            </div>

                            <div class="image-one wow fadeInUp" data-wow-delay="200ms"><img src="images/resource/hed11.jpg" alt="">
                            </div>
                            <div class="image-two">
                                <img src="images/resource/hed33.jpg" alt=""><a href="#" class="overlay-link lightbox-image video-fancybox"></a>
                            </div>
                            <div class="image-three wow fadeInRight" data-wow-delay="200ms"><img src="images/resource/hed22.jpg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog Section -->
        <section class="blog-section">
            @livewire('blog')
        </section>


        <!-- Team Section -->
        <section class="team-section">
            <div class="auto-container">
                <div class="row m-0 justify-content-md-between align-items-end">
                    <div class="sec-title light">
                        <h1>Team behind Caritas Diocese Kabgayi.</h1>
                        <div class="text">Our work would not be possible without the work of our dedicated volunteers.</div>
                    </div>
                    <!--Link Btn-->
                    <div class="link-btn mb-50">
                        <a href="all_team_members.php" class="theme-btn btn-style-one"><span>Meet All Members</span></a>
                    </div>
                </div>
                <div class="wrapper-box">
                    <div class="row">
                        <!-- Team Blokc One -->
                        <div class="col-lg-4 team-block-one">
                            <div class="inner-box wow fadeInDown" data-wow-delay="200ms">
                                <div class="image"><a href="#"><img src="https://blogtimenow.com/wp-content/uploads/2014/06/hide-facebook-profile-picture-notification.jpg" alt=""></a></div>
                                <div class="lower-content">
                                    <h4> <a href="#">BAKUNDUKIZE Pamphile</a></h4>
                                    <div class="designation">Head Of Departments</div>
                                </div>
                                <ul class="social-icon-two">
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Team Blokc One -->
                        <div class="col-lg-4 team-block-one">
                            <div class="inner-box wow fadeInUp" data-wow-delay="400ms">
                                <div class="image"><a href="#"><img src="https://blogtimenow.com/wp-content/uploads/2014/06/hide-facebook-profile-picture-notification.jpg" alt=""></a></div>
                                <div class="lower-content">
                                    <h4> <a href="#">Agnes</a></h4>
                                    <div class="designation">Director Of Health Department</div>
                                </div>
                                <ul class="social-icon-two">
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Team Blokc One -->
                        <div class="col-lg-4 team-block-one">
                            <div class="inner-box wow fadeInDown" data-wow-delay="200ms">
                                <div class="image"><a href="#"><img src="https://blogtimenow.com/wp-content/uploads/2014/06/hide-facebook-profile-picture-notification.jpg" alt=""></a></div>
                                <div class="lower-content">
                                    <h4> <a href="#">Fidel</a></h4>
                                    <div class="designation">Director Of Development Department</div>
                                </div>
                                <ul class="social-icon-two">
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-- Volunteer -->
        <section class="volunteer-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <h1>Become a volunteer</h1>
                    <div class="text">Please read below to see what a few of our charity partners have to say about us.</div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="image-wrapper-one wow fadeInLeft" data-wow-delay="400ms">
                            <div class="row no-gutters justify-content-center align-items-center">
                                <div class="image"><img src="images/resource/ax.jpg" alt=""></div>
                            </div>
                            <div class="row no-gutters justify-content-center align-items-center">
                                <div class="image"><img src="images/resource/bx.jpg" alt=""></div>
                                <div class="image"><img src="images/resource/b2.jpg" alt=""></div>
                            </div>
                            <div class="row no-gutters justify-content-center align-items-center">
                                <div class="image"><img src="images/resource/cx.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 order-lg-2">
                        <div class="image-wrapper-two wow fadeInRight" data-wow-delay="600ms">
                            <div class="row no-gutters justify-content-center align-items-center">
                                <div class="image"><img src="images/resource/ex.jpg" alt=""></div>
                            </div>
                            <div class="row no-gutters justify-content-center align-items-center">
                                <div class="image"><img src="images/resource/b1.jpg" alt=""></div>
                                <div class="image"><img src="images/resource/fx.jpg" alt=""></div>
                            </div>
                            <div class="row no-gutters justify-content-center align-items-center">
                                <div class="image"><img src="images/resource/kx.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="default-form-area wow fadeInUp" data-wow-delay="200ms">
                            <form id="contact-form" name="contact_form" class="contact-form" action="http://steelthemes.com/demo/html/Goodsoul_html/inc/sendmail.php" method="post">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 column">
                                        <div class="form-group">
                                            <input type="text" name="form_name" class="form-control" value="" placeholder="Your Name*" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 column">
                                        <div class="form-group">
                                            <select class="filters-selec form-controlt selectmenu" name="form_subject">
                                                <option value="*">Gender*</option>
                                                <option value=".category-1">Male</option>
                                                <option value=".category-2">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 column">
                                        <div class="form-group">
                                            <input type="email" name="form_email" class="form-control required email" value="" placeholder="Email*" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 column">
                                        <div class="form-group">
                                            <select class="filters-selec form-controlt selectmenu" name="form_subject">
                                                <option value="*">How did you here us</option>
                                                <option value=".category-1">How did you here us</option>
                                                <option value=".category-2">How did you here us</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 column">
                                        <div class="form-group">
                                            <textarea name="form_message" class="form-control textarea required" placeholder="Briefly Explain Your Project..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-section-btn">
                                    <div class="row m-0 justify-content-md-between align-items-end">
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">CV UPLOAD</label>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                        <div class="form-group">
                                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                            <button class="theme-btn btn-style-one" type="submit" data-loading-text="Please wait..."><span>Send Message</span></button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-- Client section -->
        <section class="client-section">
            <div class="col-md-6">
                <div class="link-btn wow fadeInLeft" data-wow-delay="500ms"><a href="all_partners_member.php" class="theme-btn btn-style-two"><i class="flaticon-next"></i><span>View All Partners</span></a></div>
            </div>

            <div class="auto-container">
                <div class="sponsors-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">

                    <div class="image" data-toggle="tooltip" data-placement="top" title="CARITAS Rwanda"><a href="https://www.caritas.org/where-caritas-work/africa/rwanda/"><img src="{{asset('images/clients/caritas_rwanda.png')}}" alt=""></a></div>

                    <div class="image" data-toggle="tooltip" data-placement="top" title="FONERWA"><a href="https://www.fonerwa.org"><img src="{{asset('images/clients/fonerwa.png')}}" alt=""></a></div>

                    <div class="image" data-toggle="tooltip" data-placement="top" title="GAVI"><a href="https://www.gavi.org/"><img src="{{asset('images/clients/GAVI.png')}}" alt=""></a></div>

                    <div class="image" data-toggle="tooltip" data-placement="top" title="UNDP"><a href="https://www.undp.org/content/undp/en/home.html"><img src="{{asset('images/clients/UNDP.png')}}" alt=""></a></div>

                    <div class="image" data-toggle="tooltip" data-placement="top" title="RGB"><a href="https://www.rgb.rw/index.php?id=2"><img src="{{asset('images/clients/RGB.png')}}" alt=""></a></div>

                    <div class="image" data-toggle="tooltip" data-placement="top" title="MUHANGA Distict"><a href="https://www.muhanga.gov.rw/index.php?id=39"><img src="{{asset('images/clients/muhanga_district.png')}}" alt=""></a></div>

                    <div class="image" data-toggle="tooltip" data-placement="top" title="USAID-CDC/WAGE"><a href="www.usaid.gov"><img src="{{asset('images/clients/cdc.png')}}" alt=""></a></div>

                    <div class="image" data-toggle="tooltip" data-placement="top" title="RUHANGO District"><a href="https://www.ruhango.gov.rw/index.php?id=39"><img src="{{asset('images/clients/ruhango_district.png')}}" alt=""></a></div>

                    <div class="image" data-toggle="tooltip" data-placement="top" title="USAID-Ingobyi"><a href="www.usaid.gov"><img src="images/clients/ingobyi.png" alt=""></a></div>

                    <div class="image" data-toggle="tooltip" data-placement="top" title="Ministry Of Environment"><a href="https://environment.gov.rw/index.php?id=2"><img src="{{asset('images/clients/ministry_environment.png')}}" alt=""></a></div>

                    <div class="image" data-toggle="tooltip" data-placement="top" title="Manos Unidas"><a href="https://www.manosunidas.org/?gclid=Cj0KCQjws536BRDTARIsANeUZ5-lnSVg4M3OQfb0HlUj5Lr4m3YUnzAslaPbNvRYvHnbFrJDNcNNSfAaAs58EALw_wcB"><img src="{{asset('images/clients/manos_unidas.png')}}" alt=""></a></div>

                    <div class="image" data-toggle="tooltip" data-placement="top" title="MINALOC"><a href="https://www.minaloc.gov.rw/index.php?id=2"><img src="{{asset('images/clients/minaloc.png')}}" alt=""></a></div>

                    <div class="image" data-toggle="tooltip" data-placement="top" title="CARITAS Espagne"><a href="https://www.caritas.es/?open&purpose=diocesana&gclid=Cj0KCQjws536BRDTARIsANeUZ58d1Q4S7Vh2U63r8EdjXBjcHdajNJUNbAjJie19i86ZENHqXPkzN00aAv9eEALw_wcB"><img src="{{asset('images/clients/caritas_espagne.png')}}" alt=""></a></div>

                    <div class="image" data-toggle="tooltip" data-placement="top" title="KAMONYI District"><a href="https://kamonyi.gov.rw/index.php?id=39"><img src="{{asset('images/clients/kamonyi.png')}}" alt=""></a></div>

                    <div class="image" data-toggle="tooltip" data-placement="top" title="CRS"><a href="https://www.crs.org/"><img src="{{asset('images/clients/CRS.png')}}" alt=""></a></div>

                    <div class="image" data-toggle="tooltip" data-placement="top" title="Kindermission's werk"><a href="https://www.sternsinger.de/ueber-uns/about-us/principles-and-guidelines-for-funding-projects/"><img src="{{asset('images/clients/Diei.png')}}" alt=""></a></div>

                    <div class="image" data-toggle="tooltip" data-placement="top" title="AMICI DEI POPOLI"><a href="http://www.amicideipopoli.org/"><img src="{{asset('images/clients/amici_dei.png')}}" alt=""></a></div>

                    <div class="image" data-toggle="tooltip" data-placement="top" title="FAO"><a href="http://www.fao.org/home/en/"><img src="{{asset('images/clients/fao.png')}}" alt=""></a></div>

                    <div class="image" data-toggle="tooltip" data-placement="top" title="Global Funds"><a href="www.scidev.net"><img src="{{asset('images/clients/global_fund.png')}}" alt=""></a></div>

                    <div class="image" data-toggle="tooltip" data-placement="top" title="SECODEV"><a href="https://www.secodev.ch/"><img src="{{asset('images/clients/secodev.png')}}" alt=""></a></div>

                    <div class="image" data-toggle="tooltip" data-placement="top" title="Ministry Of Health"><a href="https://moh.gov.rw/index.php?id=188"><img src="{{asset('images/clients/health_Logo_2.png')}}" alt=""></a></div>

                    <div class="image" data-toggle="tooltip" data-placement="top" title="NUDOR FOUNDATION"><a href="https://www.nudor.org/partners-2/"><img src="{{asset('images/clients/nudor.png')}}" alt=""></a></div>

                    <div class="image" data-toggle="tooltip" data-placement="top" title="ICLI"><a href="https://icliny.org/"><img src="{{asset('images/clients/icli.png')}}" alt=""></a></div>

                    <div class="image" data-toggle="tooltip" data-placement="top" title="TROCAIRE"><a href="https://www.trocaire.org/whatwedo/wherewework/rwanda"><img src="{{asset('images/clients/trocaire.png')}}" alt=""></a></div>

                    <div class="image" data-toggle="tooltip" data-placement="top" title="LODA"><a href="https://loda.gov.rw/home/"><img src="{{asset('images/clients/loda.png')}}" alt=""></a></div>

                   {{-- <div class="image" data-toggle="tooltip" data-placement="top" title="Mairie de Bilbao/Spain"><a href="https://fr.wikipedia.org/wiki/Mairie_de_Bilbao"><img src="{{asset('images/clients/mairie.png'}}" alt=""></a></div>--}}



                    <div class="image" data-toggle="tooltip" data-placement="top" title="NYANZA District"><a href="https://www.nyanza.gov.rw/index.php?id=39"><img src="{{asset('images/clients/nyanza_district.png')}}" alt=""></a></div>

                    <div class="image" data-toggle="tooltip" data-placement="top" title="RAB"><a href="http://www.rab.gov.rw/index.php?id=180"><img src="{{asset('images/clients/rab.png')}}" alt=""></a></div>

                    <div class="image" data-toggle="tooltip" data-placement="top" title="MISSION Autriche"><a href="https://www.geneve-int.ch/fr/autriche-mission-permanente-onu-0"><img src="{{asset('images/clients/missio_autriche.png')}}" alt=""></a></div>

                </div>
            </div>
        </section>
    </x-slot>




    <x-slot:footer>
        @include('site.footer')
    </x-slot:footer>




</x-main-layout>





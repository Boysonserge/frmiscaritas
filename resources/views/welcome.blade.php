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
                                    <div class="link-btn wow fadeInLeft" data-wow-delay="500ms"><a href="#" class="theme-btn btn-style-two"><i class="flaticon-next"></i><span>{{__('about.mission')}}</span></a></div>
                                    <div class="text">{{__('about.mission-content')}}</div>
                                </div>
                                <div class="col-md-6">
                                    <div class="link-btn wow fadeInRight" data-wow-delay="900ms"><a href="#" class="theme-btn btn-style-three"><i class="flaticon-next"></i><span>{{__('about.vision')}}</span></a></div>
                                    <div class="text">{{__('about.vision-content')}}</div>
                                </div>
                            </div>
                            <div class="link-btn-two">
                                <a href="" class="theme-btn btn-style-one"><span>{{__('about.more-about')}}</span></a>
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


        <!-- Causes Section -->
        <section class="causes-section">
            <div class="container">
                <div class="sec-title text-center">
                    <h1>Causes we care about</h1>
                    <div class="text">We connects nonprofits, donors, and companies in nearly every country around the world.</div>
                </div>
                <div class="cause-carousel-wrapper">
                    <div class="cause-carousel owl-theme owl-carousel owl-dots-none owl-nav-style-three">
                        <!-- Cause Block One -->
                        <div class="cause-block-one">
                            <div class="inner-box">
                                <div class="image"><a href="#"><img src="{{asset('images/resource/agri.jpg')}}" alt=""></a></div>
                                <div class="lower-content">
                                    <h4><a href="#">Support In Agriculture</a></h4>
                                    <div class="category"><a href="#"><span class="flaticon-book"></span>Agriculture</a></div>
                                    <div class="text">Content</div>
                                    <div class="info-box">
                                        <a href="#"><span>Raised:</span> $Amount</a>
                                        <a href="#"><span>Goal:</span> $Amount</a>
                                    </div>
                                    <!--Progress Levels-->
                                    <div class="progress-levels">

                                        <!--Skill Box-->
                                        <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                            <div class="inner">
                                                <div class="bar">
                                                    <div class="bar-innner"><div class="bar-fill" data-percent="60"><div class="percent"></div></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text">Raised by a Number Of people in a Number Of days</div>
                                    <div class="bottom-content">
                                        <div class="link-btn"><a href="#" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
                                        <div class="share-icon post-share-icon">
                                            <div class="share-btn"><i class="flaticon-share"></i></div>
                                            <ul>
                                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Cause Block One -->
                        <div class="cause-block-one">
                            <div class="inner-box">
                                <div class="image"><a href="#"><img src="{{asset('images/resource/mental.jpg')}}" alt=""></a></div>
                                <div class="lower-content">
                                    <h4><a href="#">Help People from Mental Deseases</a></h4>
                                    <div class="category"><a href="#"><span class="flaticon-heart"></span>Helth & Diseases</a></div>
                                    <div class="text">Content</div>
                                    <div class="info-box">
                                        <a href="#"><span>Raised:</span> $Amount</a>
                                        <a href="#"><span>Goal:</span> $Amount</a>
                                    </div>
                                    <!--Progress Levels-->
                                    <div class="progress-levels">

                                        <!--Skill Box-->
                                        <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                            <div class="inner">
                                                <div class="bar">
                                                    <div class="bar-innner"><div class="bar-fill" data-percent="60"><div class="percent"></div></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text">Raised by a Number Of people in a Number Of days</div>
                                    <div class="bottom-content">
                                        <div class="link-btn"><a href="#" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
                                        <div class="share-icon post-share-icon">
                                            <div class="share-btn"><i class="flaticon-share"></i></div>
                                            <ul>
                                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Cause Block One -->
                        <div class="cause-block-one">
                            <div class="inner-box">
                                <div class="image"><a href="#"><img src="{{asset('images/resource/agr2.jpg')}}" alt=""></a></div>
                                <div class="lower-content">
                                    <h4><a href="#">Support In Agriculture</a></h4>
                                    <div class="category"><a href="#"><span class="flaticon-book"></span>Agriculture</a></div>
                                    <div class="text">Content</div>
                                    <div class="info-box">
                                        <a href="#"><span>Raised:</span> $Amount</a>
                                        <a href="#"><span>Goal:</span> $Amount</a>
                                    </div>
                                    <!--Progress Levels-->
                                    <div class="progress-levels">

                                        <!--Skill Box-->
                                        <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                            <div class="inner">
                                                <div class="bar">
                                                    <div class="bar-innner"><div class="bar-fill" data-percent="60"><div class="percent"></div></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text">Raised by a Number Of people in a Number Of days</div>
                                    <div class="bottom-content">
                                        <div class="link-btn"><a href="#" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
                                        <div class="share-icon post-share-icon">
                                            <div class="share-btn"><i class="flaticon-share"></i></div>
                                            <ul>
                                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Cause Block One -->
                        <div class="cause-block-one">
                            <div class="inner-box">
                                <div class="image"><a href="#"><img src="{{asset('images/resource/stu1.jpg')}}" alt=""></a></div>
                                <div class="lower-content">
                                    <h4><a href="#">Help In Education</a></h4>
                                    <div class="category"><a href="#"><span class="flaticon-book"></span>Education</a></div>
                                    <div class="text">Content</div>
                                    <div class="info-box">
                                        <a href="#"><span>Raised:</span> $Aamount</a>
                                        <a href="#"><span>Goal:</span> $Amount</a>
                                    </div>
                                    <!--Progress Levels-->
                                    <div class="progress-levels">

                                        <!--Skill Box-->
                                        <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                            <div class="inner">
                                                <div class="bar">
                                                    <div class="bar-innner"><div class="bar-fill" data-percent="60"><div class="percent"></div></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text">Raised by a Number Of people in a Number Of days</div>
                                    <div class="bottom-content">
                                        <div class="link-btn"><a href="#" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
                                        <div class="share-icon post-share-icon">
                                            <div class="share-btn"><i class="flaticon-share"></i></div>
                                            <ul>
                                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Cause Block One -->
                        <div class="cause-block-one">
                            <div class="inner-box">
                                <div class="image"><a href="#"><img src="{{asset('images/resource/agr4.jpg')}}" alt=""></a></div>
                                <div class="lower-content">
                                    <h4><a href="#">Support In Livestock</a></h4>
                                    <div class="category"><a href="#"><span class="flaticon-book"></span>Agriculture</a></div>
                                    <div class="text">Content</div>
                                    <div class="info-box">
                                        <a href="#"><span>Raised:</span> $Amount</a>
                                        <a href="#"><span>Goal:</span> $Amount</a>
                                    </div>
                                    <!--Progress Levels-->
                                    <div class="progress-levels">

                                        <!--Skill Box-->
                                        <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                            <div class="inner">
                                                <div class="bar">
                                                    <div class="bar-innner"><div class="bar-fill" data-percent="60"><div class="percent"></div></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text">Raised by a Number Of people in a Number Of days</div>
                                    <div class="bottom-content">
                                        <div class="link-btn"><a href="#" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
                                        <div class="share-icon post-share-icon">
                                            <div class="share-btn"><i class="flaticon-share"></i></div>
                                            <ul>
                                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Cause Block One -->
                        <div class="cause-block-one">
                            <div class="inner-box">
                                <div class="image"><a href="#"><img src="{{asset('images/resource/eld1.jpg')}}" alt=""></a></div>
                                <div class="lower-content">
                                    <h4><a href="#">Support Elders Generation</a></h4>
                                    <div class="category"><a href="#"><span class="flaticon-fruit"></span>Hunger & Nutrition</a></div>
                                    <div class="text">Content</div>
                                    <div class="info-box">
                                        <a href="#"><span>Raised:</span> $Amount</a>
                                        <a href="#"><span>Goal:</span> $Amount</a>
                                    </div>
                                    <!--Progress Levels-->
                                    <div class="progress-levels">

                                        <!--Skill Box-->
                                        <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                            <div class="inner">
                                                <div class="bar">
                                                    <div class="bar-innner"><div class="bar-fill" data-percent="60"><div class="percent"></div></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text">Raised by a Number Of people in a Number Of days</div>
                                    <div class="bottom-content">
                                        <div class="link-btn"><a href="#" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
                                        <div class="share-icon post-share-icon">
                                            <div class="share-btn"><i class="flaticon-share"></i></div>
                                            <ul>
                                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Cause Block One -->
                        <div class="cause-block-one">
                            <div class="inner-box">
                                <div class="image"><a href="#"><img src="{{asset('images/resource/stu3.jpg')}}" alt=""></a></div>
                                <div class="lower-content">
                                    <h4><a href="#">Help Childreen Drop Out From Schools</a></h4>
                                    <div class="category"><a href="#"><span class="flaticon-book"></span>Education</a></div>
                                    <div class="text">Content</div>
                                    <div class="info-box">
                                        <a href="#"><span>Raised:</span> $Amount</a>
                                        <a href="#"><span>Goal:</span> $Amount</a>
                                    </div>
                                    <!--Progress Levels-->
                                    <div class="progress-levels">

                                        <!--Skill Box-->
                                        <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                            <div class="inner">
                                                <div class="bar">
                                                    <div class="bar-innner"><div class="bar-fill" data-percent="60"><div class="percent"></div></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text">Raised by a Number Of people in a Number Of days</div>
                                    <div class="bottom-content">
                                        <div class="link-btn"><a href="#" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
                                        <div class="share-icon post-share-icon">
                                            <div class="share-btn"><i class="flaticon-share"></i></div>
                                            <ul>
                                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Cause Block One -->
                        <div class="cause-block-one">
                            <div class="inner-box">
                                <div class="image"><a href="#"><img src="{{asset('images/resource/dev1.jpg')}}" alt=""></a></div>
                                <div class="lower-content">
                                    <h4><a href="#">Help In Disasters Risk Management</a></h4>
                                    <div class="category"><a href="#"><span class="flaticon-heart"></span>Development</a></div>
                                    <div class="text">Content</div>
                                    <div class="info-box">
                                        <a href="#"><span>Raised:</span> $Amount</a>
                                        <a href="#"><span>Goal:</span> $Amount</a>
                                    </div>
                                    <!--Progress Levels-->
                                    <div class="progress-levels">

                                        <!--Skill Box-->
                                        <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                            <div class="inner">
                                                <div class="bar">
                                                    <div class="bar-innner"><div class="bar-fill" data-percent="60"><div class="percent"></div></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text">Raised by a Number Of people in a Number Of days</div>
                                    <div class="bottom-content">
                                        <div class="link-btn"><a href="#" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
                                        <div class="share-icon post-share-icon">
                                            <div class="share-btn"><i class="flaticon-share"></i></div>
                                            <ul>
                                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Cause Block One -->
                        <div class="cause-block-one">
                            <div class="inner-box">
                                <div class="image"><a href="#"><img src="{{asset('images/resource/stu2.jpg')}}" alt=""></a></div>
                                <div class="lower-content">
                                    <h4><a href="#">Help Orphans In Education</a></h4>
                                    <div class="category"><a href="#"><span class="flaticon-book"></span>Education</a></div>
                                    <div class="text">Content</div>
                                    <div class="info-box">
                                        <a href="#"><span>Raised:</span> $Amount</a>
                                        <a href="#"><span>Goal:</span> $Amount</a>
                                    </div>
                                    <!--Progress Levels-->
                                    <div class="progress-levels">

                                        <!--Skill Box-->
                                        <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                            <div class="inner">
                                                <div class="bar">
                                                    <div class="bar-innner"><div class="bar-fill" data-percent="60"><div class="percent"></div></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text">Raised by a Number Of people in a Number Of days</div>
                                    <div class="bottom-content">
                                        <div class="link-btn"><a href="#" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
                                        <div class="share-icon post-share-icon">
                                            <div class="share-btn"><i class="flaticon-share"></i></div>
                                            <ul>
                                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Cause Block One -->
                        <div class="cause-block-one">
                            <div class="inner-box">
                                <div class="image"><a href="#"><img src="{{asset('images/resource/dev2.jpg')}}" alt=""></a></div>
                                <div class="lower-content">
                                    <h4><a href="#">Help In Environmental Protectionj</a></h4>
                                    <div class="category"><a href="#"><span class="flaticon-heart"></span>Development</a></div>
                                    <div class="text"></div>
                                    <div class="info-box">
                                        <a href="#"><span>Raised:</span> $Amount</a>
                                        <a href="#"><span>Goal:</span> $Amount</a>
                                    </div>
                                    <!--Progress Levels-->
                                    <div class="progress-levels">

                                        <!--Skill Box-->
                                        <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                            <div class="inner">
                                                <div class="bar">
                                                    <div class="bar-innner"><div class="bar-fill" data-percent="60"><div class="percent"></div></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text">Raised by a Number Of people in a Number Of days</div>
                                    <div class="bottom-content">
                                        <div class="link-btn"><a href="#" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
                                        <div class="share-icon post-share-icon">
                                            <div class="share-btn"><i class="flaticon-share"></i></div>
                                            <ul>
                                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Cause Block One -->
                        <div class="cause-block-one">
                            <div class="inner-box">
                                <div class="image"><a href="#"><img src="{{asset('images/resource/wom1.jpg')}}" alt=""></a></div>
                                <div class="lower-content">
                                    <h4><a href="#">Help In Empowering Women</a></h4>
                                    <div class="category"><a href="#"><span class="flaticon-fruit"></span>Hunger & Nutrition</a></div>
                                    <div class="text">Content</div>
                                    <div class="info-box">
                                        <a href="#"><span>Raised:</span> $Amount</a>
                                        <a href="#"><span>Goal:</span> $Amount</a>
                                    </div>
                                    <!--Progress Levels-->
                                    <div class="progress-levels">

                                        <!--Skill Box-->
                                        <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                            <div class="inner">
                                                <div class="bar">
                                                    <div class="bar-innner"><div class="bar-fill" data-percent="60"><div class="percent"></div></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text">Raised by a Number Of people in a Number Of days</div>
                                    <div class="bottom-content">
                                        <div class="link-btn"><a href="#" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
                                        <div class="share-icon post-share-icon">
                                            <div class="share-btn"><i class="flaticon-share"></i></div>
                                            <ul>
                                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Cause Block One -->
                        <div class="cause-block-one">
                            <div class="inner-box">
                                <div class="image"><a href="#"><img src="{{asset('images/resource/ment1.jpg')}}" alt=""></a></div>
                                <div class="lower-content">
                                    <h4><a href="#">Help Helpless In HealthCare</a></h4>
                                    <div class="category"><a href="#"><span class="flaticon-fruit"></span>Hunger & Nutrition</a></div>
                                    <div class="text">Content</div>
                                    <div class="info-box">
                                        <a href="#"><span>Raised:</span> $Amount</a>
                                        <a href="#"><span>Goal:</span> $Amount</a>
                                    </div>
                                    <!--Progress Levels-->
                                    <div class="progress-levels">

                                        <!--Skill Box-->
                                        <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                            <div class="inner">
                                                <div class="bar">
                                                    <div class="bar-innner"><div class="bar-fill" data-percent="60"><div class="percent"></div></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text">Raised by a Number Of people in a Number Of days</div>
                                    <div class="bottom-content">
                                        <div class="link-btn"><a href="#" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
                                        <div class="share-icon post-share-icon">
                                            <div class="share-btn"><i class="flaticon-share"></i></div>
                                            <ul>
                                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                        <h1>{{__('about.team-behind')}}</h1>
                        <div class="text">{{__('about.team-behind-content')}}</div>
                    </div>
                    <!--Link Btn-->
                    <div class="link-btn mb-50">
                        <a href="" class="theme-btn btn-style-one"><span>{{__('about.meet-all')}}</span></a>
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
                                    <div class="designation">Project coordinator. </div>
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
                                    <h4> <a href="#">NIYONSHIMA Asterie</a></h4>
                                    <div class="designation">Coordinatrice de la commission diocÃ©saine justice</div>
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
                                    <h4> <a href="#">DISHIMIMANA Fidelr</a></h4>
                                    <div class="designation">Chief of Development Department</div>
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



        <!-- Funfact Section -->
        <section class="funfacts-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <h1>{{__('about.Numbers-speaking')}}</h1>
                    <div class="text"> </div>
                </div>
                <div class="outer-box">
                    <div class="funfact-wrapper row">

                        <div class="col-md-3 counter-block wow fadeInUp" data-wow-delay="300ms">
                            <div class="inner-box">
                                <div class="icon-box"><img src="images/icons/icon-5.png" alt=""></div>
                                <h4>{{__('about.our-team')}}</h4>
                                <div class="count-box">
                                    <span class="prefix"></span><span class="count-text" data-speed="3000" data-stop="12">0</span><span class="affix"></span>
                                </div>
                                <div class="text">( {{__('about.our-team-content')}} )</div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="col-md-3 counter-block wow fadeInUp" data-wow-delay="300ms">
                            <div class="inner-box">
                                <div class="icon-box"><img src="images/icons/icon-5.png" alt=""></div>
                                <h4>Parishes</h4>
                                <div class="count-box">
                                    <span class="prefix"></span><span class="count-text" data-speed="3000" data-stop="30">0</span><span class="affix"></span>
                                </div>
                                <div class="text">All parishes we work with.</div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="col-md-3 counter-block wow fadeInUp" data-wow-delay="300ms">
                            <div class="inner-box">
                                <div class="icon-box"><img src="images/icons/icon-5.png" alt=""></div>
                                <h4>Centrale</h4>
                                <div class="count-box">
                                    <span class="prefix"></span><span class="count-text" data-speed="3000" data-stop="139">0</span><span class="affix"></span>
                                </div>
                                <div class="text">Centrale .</div>
                            </div>
                        </div>


                        <!--Column-->
                        <div class="col-md-3 counter-block wow fadeInUp" data-wow-delay="300ms">
                            <div class="inner-box">
                                <div class="icon-box"><img src="images/icons/icon-5.png" alt=""></div>
                                <h4>Cells</h4>
                                <div class="count-box">
                                    <span class="prefix"></span><span class="count-text" data-speed="3000" data-stop="197">0</span><span class="affix"></span>
                                </div>
                                <div class="text">Cells.</div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="col-md-3 counter-block wow fadeInUp" data-wow-delay="300ms">
                            <div class="inner-box">
                                <div class="icon-box"><img src="images/icons/icon-5.png" alt=""></div>
                                <h4>Sectors</h4>
                                <div class="count-box">
                                    <span class="prefix"></span><span class="count-text" data-speed="3000" data-stop="36">0</span><span class="affix"></span>
                                </div>
                                <div class="text">Sectors we work with</div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="col-md-3 counter-block wow fadeInUp" data-wow-delay="300ms">
                            <div class="inner-box">
                                <div class="icon-box"><img src="images/icons/icon-5.png" alt=""></div>
                                <h4>Districts</h4>
                                <div class="count-box">
                                    <span class="prefix"></span><span class="count-text" data-speed="3000" data-stop="4">0</span><span class="affix"></span>
                                </div>
                                <div class="text">Districts.</div>
                            </div>
                        </div>


                        <!--Column-->
                        <div class="col-md-3 counter-block wow fadeInUp" data-wow-delay="300ms">
                            <div class="inner-box">
                                <div class="icon-box"><img src="images/icons/icon-5.png" alt=""></div>
                                <h4>CEBs</h4>
                                <div class="count-box">
                                    <span class="prefix"></span><span class="count-text" data-speed="3000" data-stop="5472">0</span><span class="affix"></span>
                                </div>
                                <div class="text">CEBS.</div>
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





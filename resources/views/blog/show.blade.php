<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="{{$selectedBlog->blogSummary}}">
    <meta name="keywords" content="caritas Diocese Kabgayi, Diocese Kabgayi, Kabgayi Diocese, Diocesaine Kabgayi, caritas Diocesaine Kabgayi">
    <meta name="author" content="Caritas Diocese Kabgayi">
    <title>{{$selectedBlog->blogTitle}}</title>

    <meta name="title" content="{{$selectedBlog->blogTitle}}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{url()->full()}}">
    <meta property="og:title" content="{{$selectedBlog->blogTitle}}">
    <meta property="og:description" content="{{$selectedBlog->blogSummary}}">
    <meta property="og:image" content="{{asset('storage/'.$selectedBlog->mainPhoto)}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{url()->full()}}">
    <meta property="twitter:title" content="{{$selectedBlog->blogTitle}}">
    <meta property="twitter:description" content="{{$selectedBlog->blogTitle}}">
    <meta property="twitter:image" content="{{asset('storage/'.$selectedBlog->mainPhoto)}}">

    <link rel="shortcut icon" href="{{asset('images/resource/caritas2.png')}}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Prata|Rubik:300,400,500,700&amp;display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{asset('css/swiper.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom-animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    @livewireStyles

</head>

<body>

<div class="page-wrapper">

        @include('site.header')



        <!-- Page Title -->
        <section class="page-title" style="background-image:url({{asset('images/background/back1.jpg')}})">
            <div class="auto-container">
                <div class="content-box">
                    <h1>{{$selectedBlog->blogTitle}}</h1>
                    <ul class="bread-crumb">
                        <li><a class="home" href=""><span class="fa fa-home"></span></a></li>
                        <li>News room</li>
                    </ul>
                </div>
            </div>

        </section>

        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="post-wrapper">
                            <!-- Single Blog Post -->
                            <div class="single-blog-post">
                                <div class="inner-box">
                                    <div class="top-content">
                                        <h2>{{$selectedBlog->blogSummary}}</h2>
                                        <div class="post-info">
                                            <div class="author">
                                                <div class="author-thumb"><img src="storage/{{$selectedBlog->mainPhoto}}" alt=""></div>
                                                <div class="author-title"><a href="#">Rubin Santro</a></div>
                                            </div>
                                            <div class="date"><span class="flaticon-clock"></span>{{$selectedBlog->created_at}}</div>
                                            <div class="category"><span class="flaticon-folder"></span>Life saving</div>
                                            <div class="views"><span class="flaticon-eye"></span>{{$selectedBlog->views}} Views</div>
                                        </div>
                                        <div class="image"><img src="{{asset('storage/'.$selectedBlog->mainPhoto)}}" alt=""></div>

                                        {!! $selectedBlog->mainStory !!}

                                        <div class="post-tag">
                                            <div class="wrapper-box">

                                            </div>
                                            <ul class="social-icon-three">
                                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                                <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    {{--<div class="bottom-content">
                                        <!-- Author -->
                                        <div class="author-box">
                                            <div class="wrapper-area">
                                                <div class="img-box">
                                                    <img src="images/resource/author-thumb-5.jpg" alt="Awesome Image">
                                                </div>
                                                <h3>Steve Anderson</h3>
                                                <div class="text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupting.</div>
                                                <ul class="social-icon-three">
                                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                    <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Post Pagination -->
                                        <div class="blog-post-pagination">
                                            <div class="wrapper-box">

                                                <div class="prev-post">
                                                    <a href="#"> Previous Post</a>
                                                    <h4>Coaching for our fundraisers</h4>
                                                </div>

                                                <div class="page-view"><span class="fa fa-th"></span></div>

                                                <div class="next-post">
                                                    <a href="#">Next Topic </a>
                                                    <h4>Camp for japan earth quake</h4>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Comment Reply -->
                                        <div class="comments-area">
                                            <div class="group-title">
                                                <h2>Read Comments</h2>
                                            </div>
                                            <!--Comment Box-->
                                            <div class="comment-box">
                                                <div class="comment">
                                                    <div class="author-thumb"><img src="images/resource/author-thumb-6.jpg" alt=""></div>
                                                    <div class="comment-inner">
                                                        <div class="comment-info">Steven Rich<span class="date">February 26, 2019</span></div>
                                                        <div class="text">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized saying through shrinking.</div>
                                                        <a class="reply-comment" href="#"><span class="flaticon-next"></span> Reply</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Comment Box-->
                                            <div class="comment-box">
                                                <div class="comment">
                                                    <div class="author-thumb"><img src="images/resource/author-thumb-7.jpg" alt=""></div>
                                                    <div class="comment-inner">
                                                        <div class="comment-info">William Cobus,<span class="date">February 25, 2019</span></div>
                                                        <div class="text"> These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled nothing.</div>
                                                        <a class="reply-comment" href="#"><span class="flaticon-next"></span> Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Comment form -->
                                        <div class="comment-form">
                                            <div class="group-title">
                                                <h2>Leave a Reply</h2>
                                            </div>
                                            <form method="post" action="http://steelthemes.com/demo/html/Goodsoul_html/contact.html">
                                                <div class="row clearfix">

                                                    <div class="col-md-12 form-group">
                                                        <textarea name="message" placeholder="Comment..."></textarea>
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <input type="text" name="username" placeholder="Name*" required="">
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <input type="email" name="email" placeholder="Email*" required="">
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <input type="text" name="website" placeholder="Website" required="">
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span>Post Comment</span></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- End Form -->
                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--<div class="col-lg-4">
                        <div class="sidebar">
                            <!-- Search Widget -->
                            <div class="sidebar-title">
                                <h4>Search</h4>
                            </div>
                            <div class="sidebar-widget search-box">
                                <form method="post" action="#">
                                    <div class="form-group">
                                        <input type="search" name="search-field" value="" placeholder="Search...." required="">
                                        <button type="submit"><span class="flaticon-magnifying-glass"></span></button>
                                    </div>
                                </form>
                            </div>
                            <!-- Category Widget -->
                            <div class="sidebar-widget category-widget-two">
                                <div class="sidebar-title">
                                    <h4>Categories</h4>
                                </div>
                                <ul>
                                    <li>
                                        <div class="wrapper-box">
                                            <div class="image">
                                                <img src="images/resource/category-thumb-1.jpg" alt="">
                                                <span class="post-count">5</span>
                                            </div>
                                            <a href="#">Life savings </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wrapper-box">
                                            <div class="image">
                                                <img src="images/resource/category-thumb-2.jpg" alt="">
                                                <span class="post-count">8</span>
                                            </div>
                                            <a href="#">Life savings </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wrapper-box">
                                            <div class="image">
                                                <img src="images/resource/category-thumb-3.jpg" alt="">
                                                <span class="post-count">12</span>
                                            </div>
                                            <a href="#">Life savings </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wrapper-box">
                                            <div class="image">
                                                <img src="images/resource/category-thumb-4.jpg" alt="">
                                                <span class="post-count">6</span>
                                            </div>
                                            <a href="#">Life savings </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--Popular Posts-->
                            <div class="sidebar-widget post-widget-three">
                                <div class="sidebar-title">
                                    <h4>Trending Post</h4>
                                </div>

                                <!-- Post -->
                                <article class="post">
                                    <div class="thumb"><img src="images/resource/post-thumb-1.jpg" alt=""><a class="overlay overlay-style-one" href="blog-details.html"></a></div>
                                    <div class="content">
                                        <div class="date">June 28, 2019</div>
                                        <h5><a href="blog-details.html">Aid for Nigierians Health</a></h5>
                                    </div>
                                </article>

                                <!-- Post -->
                                <article class="post">
                                    <div class="thumb"><img src="images/resource/post-thumb-2.jpg" alt=""><a class="overlay overlay-style-one" href="blog-details.html"></a></div>
                                    <div class="content">
                                        <div class="date">April 14, 2019</div>
                                        <h5><a href="blog-details.html">Aid for Serians Education </a></h5>
                                    </div>
                                </article>

                                <!-- Post -->
                                <article class="post">
                                    <div class="thumb"><img src="images/resource/post-thumb-3.jpg" alt=""><a class="overlay overlay-style-one" href="blog-details.html"></a></div>
                                    <div class="content">
                                        <div class="date">January 21, 2019</div>
                                        <h5><a href="blog-details.html">Help for Homeless People</a></h5>
                                    </div>
                                </article>

                            </div>
                            <!-- Tag-cloud Widget -->
                            <div class="sidebar-widget tag-cloud-widget">
                                <div class="sidebar-title">
                                    <h4>Tag Cloud </h4>
                                </div>
                                <ul class="clearfix">
                                    <li><a href="#">Beauty</a></li>
                                    <li><a href="#">Classic</a></li>
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Drinks & Food</a></li>
                                    <li><a href="#">Designs</a></li>
                                    <li><a href="#">Featured</a></li>
                                    <li><a href="#">Free Style</a></li>
                                    <li><a href="#">Grid</a></li>
                                    <li><a href="#">Photography</a></li>
                                    <li><a href="#">Programs</a></li>
                                    <li><a href="#">Travel</a></li>
                                </ul>
                            </div>
                            <!-- End Widget -->
                            <!-- Instagram Widget -->
                            <div class="sidebar-widget instagram-widget-two">
                                <div class="sidebar-title">
                                    <h4>Instagram</h4>
                                </div>
                                <div class="instagram-wrapper">
                                    <div class="image">
                                        <img src="images/resource/instagram-1.jpg" alt="">
                                        <div class="overlay-link">
                                            <ul>
                                                <li><span class="flaticon-heart-2"></span>1k</li>
                                                <li><span class="flaticon-comment-1"></span>84</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img src="images/resource/instagram-2.jpg" alt="">
                                        <div class="overlay-link">
                                            <ul>
                                                <li><span class="flaticon-heart-2"></span>1k</li>
                                                <li><span class="flaticon-comment-1"></span>84</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img src="images/resource/instagram-3.jpg" alt="">
                                        <div class="overlay-link">
                                            <ul>
                                                <li><span class="flaticon-heart-2"></span>1k</li>
                                                <li><span class="flaticon-comment-1"></span>84</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img src="images/resource/instagram-4.jpg" alt="">
                                        <div class="overlay-link">
                                            <ul>
                                                <li><span class="flaticon-heart-2"></span>1k</li>
                                                <li><span class="flaticon-comment-1"></span>84</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img src="images/resource/instagram-5.jpg" alt="">
                                        <div class="overlay-link">
                                            <ul>
                                                <li><span class="flaticon-heart-2"></span>1k</li>
                                                <li><span class="flaticon-comment-1"></span>84</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img src="images/resource/instagram-6.jpg" alt="">
                                        <div class="overlay-link">
                                            <ul>
                                                <li><span class="flaticon-heart-2"></span>1k</li>
                                                <li><span class="flaticon-comment-1"></span>84</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="#" class="theme-btn"><span class="fa fa-instagram"></span>Follow Us</a>
                                </div>
                            </div>
                            <!-- Newsletter Widget -->
                            <div class="sidebar-title">
                                <h4>Subscribe Us</h4>
                            </div>
                            <div class="sidebar-widget newsletter-widget-three">
                                <div class="inner-content">
                                    <div class="text">Subscribe us and get latest news and <br>upcoming events.</div>
                                    <form action="#">
                                        <input type="email" placeholder="Email Address...">
                                        <button class="theme-btn btn-style-two text-center"><span>Subscribe Us</span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>--}}
                </div>
            </div>
        </div>







        @include('site.footer')

            @livewireScripts
            <script src="{{asset('js/jquery.js')}}"></script>
            <script src="{{asset('js/popper.min.js')}}"></script>
            <script src="{{asset('js/bootstrap.min.js')}}"></script>
            <script src="{{asset('js/TweenMax.min.js')}}"></script>
            <script src="{{asset('js/wow.js')}}"></script>
            <script src="{{asset('js/owl.js')}}"></script>
            <script src="{{asset('js/appear.js')}}"></script>
            <script src="{{asset('js/swiper.min.js')}}"></script>
            <script src="{{asset('js/jquery.fancybox.js')}}"></script>
            <script src="{{asset('js/menu-nav-btn.js')}}"></script>
            <script src="{{asset('js/jquery-ui.js')}}"></script>
            <script src="{{asset('js/sweetalert.min.js')}}"></script>
            <!-- Custom JS -->
            <script src="{{asset('js/script.js')}}"></script>

</body>


</html>


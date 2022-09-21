<div class="auto-container">
    <div class="row">
        @forelse($blogs as $blog=>$value)
            <div class="col-lg-4 col-md-6 news-block-two style-three">
                <div class="inner-box wow fadeInUp" data-wow-delay="200ms">
                    <div class="image">
                        <div class="category"><a href="#">General</a></div>
                        <a href="{{ route('blog.show',$value->blogSlug) }}"><img src="storage/{{$value->mainPhoto}}" alt=""></a>
                        <div class="post-meta-info">
                            <a href="#"><span class="flaticon-eye"></span>21</a>
                            <a href="#"><span class="flaticon-comment"></span>08</a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <div class="date"><span class="flaticon-clock"></span>Jul 14, 2019 {{app()->getLocale()}}</div>
                        <h4><a href="{{ route('blog.show',$value->blogSlug) }}">
                                {{$value->blogTitle}}

                            </a></h4>
                        <div class="author-info">
                            <div class="image"><img style="width: 25px" src="{{asset('images/resource/caritas2.png')}}" alt=""></div>
                            <div class="author-title"><a href="#">By admin</a></div>
                            <div class="share-icon style-two post-share-icon">
                                <div class="share-btn"><img src="{{asset('images/resource/dotted.png')}}" alt=""></div>
                                <ul>
                                    <li><a href=""><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            {{__('No blogs available')}}
        @endforelse
    </div>

    {{$blogs->links()}}

</div>

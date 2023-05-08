<header>
   
    <!-- Mobile Menu Start -->
    <div class="mobile-menu-area navbar-fixed-top hidden-sm hidden-md hidden-lg">
        <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Language
            </button>
            <div class="dropdown-menu">
                <ul>
                    <li><a class="dropdown-item" href="#">English</a></li>
                    <li><a class="dropdown-item" href="#">Igbo</a></li>
                </ul>
              
            </div>
        </div>
        <nav class="mobile-menu" id="mobile-menu">
            <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Language
                </button>
                <div class="dropdown-menu">
                    <ul>
                        <li><a class="dropdown-item" href="#">English</a></li>
                        <li><a class="dropdown-item" href="#">Igbo</a></li>
                    </ul>
                  
                </div>
            </div>
            <div class="sidebar-nav">
                <ul class="nav side-menu">
                    <li class="sidebar-search">
                        
                        
                    </li>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>
                        <a href="{{ route('about') }}">About<span class=""></span></a>
                                <!-- /.nav-third-level -->
                            </li>
                            <li>
                                <a href="#">Categories <span class="fa arrow"></span></a>
                                <!-- /.nav-third-level -->
                            </li>
                            <li>
                                <a href="#">Archive <span class="fa arrow"></span></a>
                               
                                <!-- /.nav-third-level -->
                            </li>
                            <li>
                                <a href="#">News <span class="fa arrow"></span></a>
                                
                                <!-- /.nav-third-level -->
                            </li>
                            <li>
                                <a href="#">Contact <span class="fa arrow"></span></a>
                                <!-- /.nav-third-level -->
                            </li>
                            <li><a href="#">International</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="top_header_icon">
               
            </div>
            <div id="showLeft" class="nav-icon">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- Mobile Menu End -->
    <!-- top header -->
    <div class="top_header hidden-xs">
        <div class="container">
            <div class="row">
                <div class="top_header_menu_wrap"> 
                    <ul class="top-header-menu">
                        
                    </ul>
                    <div class="col-sm-4 col-md-3">
                        @if ($global_page_status->registration_status == 'Show')
                        <li><a href="">REGISTER</a></li>
                        @endif
                        @if ($global_page_status->login_status == 'Show') 
                        <li><a href="{{ route('login') }}">LOGIN</a></li>
                        @endif
                    </div>
                    
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Language
                    </button>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a class="dropdown-item" href="#">English</a></li>
                            <li><a class="dropdown-item" href="#">Igbo</a></li>
                        </ul>
                    
                    </div>
                </div>
                <!--breaking news-->
                @if ($settings->news_ticker_status == 'Show')
                    <div class="col-sm-8 col-md-9">
                    <div class="newsticker-inner">
                        @php $i = 0; @endphp
                        
                        <ul class="newsticker">
                            @foreach ($post as $item)
                            @php $i++; @endphp
                            @if ($i > $settings->news_ticker_total)

                            @break;
                                
                            @endif
                                <li><a href="{{ route('post_detail', $item->id) }}"><span class="color-1">{{ $item->rSubCategory->rCategory->category_name }}</span></a><a href="{{ route('post_detail', $item->id) }}">{{ $item->post_tittle }}</a></li>
                            @endforeach
                            
                        </ul>
                        <div class="next-prev-inner">
                            <a href="#" id="prev-button"><i class='pe-7s-angle-left'></i></a>
                            <a href="#" id="next-button"><i class='pe-7s-angle-right'></i></a>
                        </div>
                    </div>
                </div>
                @endif
                
            </div>
        </div>
    </div>
    <div class="top_banner_wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4 col-sm-4">
                    <div class="header-logo">
                        <!-- logo -->
                        <a href="home-style-one.html">
                            <img class="td-retina-data img-responsive" src="{{ asset('frontend/images/logo.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xs-8 col-md-8 col-sm-8 hidden-xs">
                    <div class="header-banner">
                        @if ($global_top_ad->top_ad_status == 'Show')
                        <div class="ads">
                            @if ($global_top_ad->top_ad_url == '') 
                            <img class="td-retina img-responsive" src="{{ asset('frontend/images/'.$global_top_ad->top_ad) }}" alt="">
                            @else
                            <a href="{{ $global_top_ad->top_ad_url }}"><img class="td-retina img-responsive" src="{{ asset('frontend/images/'.$global_top_ad->top_ad) }}" alt=""></a> 
                            @endif
                        </div>
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- navber -->
    <div class="container hidden-xs">
        <nav class="navbar">
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ route('home') }}" class="category01">HOME</a></li>

                    @if ($global_page_status->about_status == 'Show')
                        <li class=""><a href="{{ route('about') }}" class="category02" data-toggle="dropdown">ABOUT</a></li>
                    @endif
                    

                    @if ($global_page_status->all_news_status == 'Show')
                         <li><a href="{{ route('all_posts') }}" class="category03">All NEWS</a></li>
                    @endif
                   

                    @foreach ($global_categories as $item)
                    @if($loop->iteration > 4)
                    @break
                    @endif
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle category04" data-toggle="dropdown">{{ $item->category_name }} <span class="pe-7s-angle-down"></span></a>
                        <ul class="dropdown-menu menu-slide">
                            @foreach ($item->rSubCategory as $item2)
                            @if($loop->iteration > 2)
                            @break
                            @endif
                                <li><a href="{{ route('sub_category_news',$item2->id)}}">{{ $item2->sub_category_name }}</a></li>
                            @endforeach
                                
                            
                        </ul>
                    </li>
                    @endforeach
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle category05" data-toggle="dropdown">GALLERIES <span class="pe-7s-angle-down"></span></a>
                        <ul class="dropdown-menu menu-slide">
                            <li><a href="{{ route('photo_gallery') }}">Photo Gallery</a></li>
                            <li><a href="{{ route('video_gallery') }}">Video Gallery</a></li>
                        </ul>
                    </li>

                    @if ($global_contact->contact_status == 'Show')
                        <li><a href="{{ route('contact') }}" >CONTACT</a></li>
                    @endif
                    
                </ul>
            </div>
            <!-- navbar-collapse -->
        </nav>
    </div>
</header>
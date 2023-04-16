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
                
                <div class="col-sm-4 col-md-3">
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
                </div>
                <!--breaking news-->
                @if ($settings->news_ticker_status == 'Show')
                    <div class="col-sm-8 col-md-7">
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
                    <li class="dropdown">
                        <a href="{{ route('about') }}" class="dropdown-toggle category03" data-toggle="dropdown">ABOUT <span class="pe-7s-angle-down"></span></a>
        
                    </li>
                    <li><a href="category-style-two.html" class="category04">FASHION</a></li>
                    <li><a href="category-style-one.html" class="category05">TRAVEL</a></li>
                    <li><a href="#" class="category06">FOOD</a></li>
                    <li><a href="#" class="category07">TECHNOLOGY</a></li>
                    <li><a href="#" class="category08">LIFESTYLE</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle category09" data-toggle="dropdown">CONTACT <span class="pe-7s-angle-down"></span></a>
                    </li>
                </ul>
            </div>
            <!-- navbar-collapse -->
        </nav>
    </div>
</header>
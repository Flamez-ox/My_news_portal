@extends('frontend.frontend_master')

@section('body')

      <!-- news feed Area
        ============================================ -->
        <section class="news-feed paddb">
            <div class="container">
                <div class="row row-margin">
                    <div class="col-xs-12 col-md-6 col-sm-6 col-padding">
                        <div id="news-feed-carousel" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                                    <div class="post-thumb img-zoom-in">
                                        <a href="#">
                                            <img class="entry-thumb-4" src="{{ asset('frontend/images/slider/slide-02.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <span class="color-2">FASHION </span>
                                        <h3 class="post-title"><a href="#" rel="bookmark">The 20 free things in Sydney with your girlfriend </a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                            <!-- read more -->
                                            <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                                    <div class="post-thumb img-zoom-in">
                                        <a href="#">
                                            <img class="entry-thumb-4" src="{{ asset('frontend/images/slider/slide-03.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <span class="color-3">FASHION </span>
                                        <h3 class="post-title"><a href="#" rel="bookmark">The 20 free things in Sydney with your girlfriend </a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                            <!-- read more -->
                                            <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                                    <div class="post-thumb img-zoom-in">
                                        <a href="#">
                                            <img class="entry-thumb-4" src="{{ asset('frontend/images/slider/slide-04.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <span class="color-4">FASHION </span>
                                        <h3 class="post-title"><a href="#" rel="bookmark">The 20 free things in Sydney with your girlfriend </a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                            <!-- read more -->
                                            <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- right side post -->
                    <div class="hidden-xs col-md-6 col-sm-6 col-padding-1">
                        <section class="articale-inner">
                            <div class="row">
                                <div id="content-slide-5" class="owl-carousel">
                                    <!-- item-1 -->
                                    <div class="item">
                                        <div class="row rn_block">
                                            <div class="col-md-6 col-sm-6 padd">
                                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                                    <!-- image -->
                                                    <div class="post-thumb">
                                                        <a href="#">
                                                            <img class="img-responsive" src="{{ asset('frontend/images/articale.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-info meta-info-rn">
                                                        <div class="slide">
                                                            <a target="_blank" href="#" class="post-badge btn_five">B</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-title-author-details">
                                                    <h4><a href="#">World Econmy Changing and Affecting in 3rd ...</a></h4>
                                                </div>
                                                <div class="post-editor-date">
                                                    <div class="post-date">
                                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                                    </div>
                                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 padd">
                                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                                    <!-- image -->
                                                    <div class="post-thumb">
                                                        <a href="#">
                                                            <img class="img-responsive" src="{{ asset('frontend/images/articale02.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-info meta-info-rn">
                                                        <div class="slide">
                                                            <a target="_blank" href="#" class="post-badge btn_three">S</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-title-author-details">
                                                    <h4><a href="#">World Econmy Changing and Affecting in 3rd ...</a></h4>
                                                </div>
                                                <div class="post-editor-date">
                                                    <div class="post-date">
                                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                                    </div>
                                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 padd">
                                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                                    <!-- image -->
                                                    <div class="post-thumb">
                                                        <a href="#">
                                                            <img class="img-responsive" src="{{ asset('frontend/images/articale03.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-info meta-info-rn">
                                                        <div class="slide">
                                                            <a target="_blank" href="#" class="post-badge btn_one">F</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-title-author-details">
                                                    <h4><a href="#">World Econmy Changing and Affecting in 3rd ...</a></h4>
                                                </div>
                                                <div class="post-editor-date">
                                                    <div class="post-date">
                                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                                    </div>
                                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 padd">
                                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                                    <!-- image -->
                                                    <div class="post-thumb">
                                                        <a href="#">
                                                            <img class="img-responsive" src="{{ asset('frontend/images/articale04.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-info meta-info-rn">
                                                        <div class="slide">
                                                            <a target="_blank" href="#" class="post-badge btn_eight">H</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-title-author-details">
                                                    <h4><a href="#">World Econmy Changing and Affecting in 3rd ...</a></h4>
                                                </div>
                                                <div class="post-editor-date">
                                                    <div class="post-date">
                                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                                    </div>
                                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <!-- left content inner -->
                    
                    <!-- Politics Area
                        ============================================ -->
                    <section class="politics_wrapper">
                        <h3 class="category-headding ">POLITICS</h3>
                        <div class="headding-border"></div>
                        <div class="row">
                            <div id="content-slide-2" class="owl-carousel">
                                <!-- item-1 -->
                                <div class="item">
                                    <div class="row">
                                        <!-- main post -->
                                        <div class="col-sm-6 col-md-6">
                                            <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                                                <!-- post title -->
                                                <h3><a href="#">The standard chunk of Lorem Ipsum used since the 1500s is .</a></h3>
                                                <!-- post image -->
                                                <div class="post-thumb">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend/images/politics_01.jpg') }}" class="img-responsive" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-title-author-details">
                                                <div class="post-editor-date">
                                                    <!-- post date -->
                                                    <div class="post-date">
                                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                                    </div>
                                                    <!-- post comment -->
                                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                </div>
                                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                                            </div>
                                        </div>
                                        <!-- right side post -->
                                        <div class="col-sm-6 col-md-6">
                                            <div class="row rn_block">
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend/images/politics_02.jpg') }}" class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">All the Lorem Ipsum generators on the </a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend/images/politics_03.jpg') }}" class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">If you are going to use a passage of Lorem Ipsum,</a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend/images/politics_04.jpg') }}" class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Lorem Ipsum comes from sections</a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend/images/politics_05.jpg') }}" class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- item-2 -->
                                <div class="item">
                                    <div class="row">
                                        <!-- main post -->
                                        <div class="col-sm-6 col-md-6">
                                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                                <!-- post title -->
                                                <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a></h3>
                                                <!-- post image -->
                                                <div class="post-thumb">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend/images/politics_01.jpg') }}" class="img-responsive" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-title-author-details">
                                                <div class="post-editor-date">
                                                    <!-- post date -->
                                                    <div class="post-date">
                                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                                    </div>
                                                    <!-- post comment -->
                                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                </div>
                                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                                            </div>
                                        </div>
                                        <!-- right side post -->
                                        <div class="col-sm-6 col-md-6">
                                            <div class="row rn_block">
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend/images/politics_02.jpg') }}" class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend/images/politics_03.jpg') }}" class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend/images/politics_04.jpg') }}" class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend/images/politics_05.jpg') }}" class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </section>
                    <!-- /.Politics -->
                    <div class="ads">
                        <a href="#"><img src="{{ asset('frontend/images/top-bannner2.jpg') }}" class="img-responsive center-block" alt=""></a>
                    </div>
                </div>
                    <!-- right content wrapper -->
                    <div class="input-group search-area">
                        <!-- search area -->
                        <input type="text" class="form-control" placeholder="Search articles here ..." name="q">
                        <div class="input-group-btn">
                            <button class="btn btn-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <!-- /.twitter feed -->
                    <div class="banner-add">
                        <!-- add -->
                        <span class="add-title">- Advertisement -</span>
                        <a href="#"><img src="{{ asset('frontend/images/ad-banner.jpg') }}" class="img-responsive center-block" alt=""></a>
                    </div>
                    <div class="tab-inner">
                        <ul class="tabs">
                            <li><a href="#">POPULAR</a></li>
                            <li><a href="#">MOST VIEWED</a></li>
                        </ul>
                        <hr>
                        <!-- tabs -->
                        <div class="tab_content">
                            <div class="tab-item-inner">
                                <div class="box-item wow fadeIn" data-wow-duration="1s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb" src="{{ asset('frontend/images/popular_news_01.jpg') }}" alt="" height="80" width="90"></a>
                                    </div>
                                    <div class="item-details">
                                        <h6 class="sub-category-title bg-color-1">
                                                <a href="#">SPORTS</a>
                                            </h6>
                                        <h3 class="td-module-title"><a href="#">It is a long established fact that a reader will</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb" src="{{ asset('frontend/images/popular_news_02.jpg') }}" alt="" height="80" width="90"></a>
                                    </div>
                                    <div class="item-details">
                                        <h6 class="sub-category-title bg-color-2">
                                                <a href="#">TECHNOLOGY </a>
                                            </h6>
                                        <h3 class="td-module-title"><a href="#">The generated Lorem Ipsum is therefore</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb" src="{{ asset('frontend/images/popular_news_03.jpg') }}" alt="" height="80" width="90"></a>
                                    </div>
                                    <div class="item-details">
                                        <h6 class="sub-category-title bg-color-3">
                                                <a href="#">HEALTH</a>
                                            </h6>
                                        <h3 class="td-module-title"><a href="#">The standard chunk of Lorem Ipsum used since</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb" src="{{ asset('frontend/images/popular_news_04.jpg') }}" alt="" height="80" width="90"></a>
                                    </div>
                                    <div class="item-details">
                                        <h6 class="sub-category-title bg-color-4">
                                                <a href="#">FASHION</a>
                                            </h6>
                                        <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free from</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / tab item -->
                            <div class="tab-item-inner">
                                <div class="box-item">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb" src="{{ asset('frontend/images/popular_news_01.jpg') }}" alt="" height="80" width="90"></a>
                                    </div>
                                    <div class="item-details">
                                        <h6 class="sub-category-title bg-color-5">
                                                <a href="#">BUSINESS</a>
                                            </h6>
                                        <h3 class="td-module-title"><a href="#">It is a long established fact that a reader will</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-item">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb" src="{{ asset('frontend/images/popular_news_02.jpg') }}" alt="" height="80" width="90"></a>
                                    </div>
                                    <div class="item-details">
                                        <h6 class="sub-category-title bg-color-2">
                                                <a href="#">TECHNOLOGY </a>
                                            </h6>
                                        <h3 class="td-module-title"><a href="#">The generated Lorem Ipsum is therefore</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-item">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb" src="{{ asset('frontend/images/popular_news_03.jpg') }}" alt="" height="80" width="90"></a>
                                    </div>
                                    <div class="item-details">
                                        <h6 class="sub-category-title bg-color-3">
                                                <a href="#">HEALTH</a>
                                            </h6>
                                        <h3 class="td-module-title"><a href="#">The standard chunk of Lorem Ipsum used since</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-item">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb" src="{{ asset('frontend/images/popular_news_04.jpg') }}" alt="" height="80" width="90"></a>
                                    </div>
                                    <div class="item-details">
                                        <h6 class="sub-category-title bg-color-4">
                                                <a href="#">FASHION</a>
                                            </h6>
                                        <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free from</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / tab item -->
                        </div>
                        <!-- / tab_content -->
                    </div>
                    <!-- / tab -->
                </div>
                <!-- side content end -->
            </div>
            <!-- row end -->
        </div>
        <!-- container end -->
        <!-- Video News Area
            ============================================ -->
        <section class="video-post-inner" id="video-post">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="category-headding ">Featured Video</h3>
                        <div class="headding-border"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div id="rypp-demo-4" class="RYPP r16-9" data-playlist="PLw8TejMbmHM6IegrJ4iECWNoFuG7RiCV_">
                            <div class="RYPP-video">
                                <div class="RYPP-video-player">
                                    <!-- Will be replaced -->
                                </div>
                            </div>
                            <div class="RYPP-playlist">
                                <header>
                                    <h2 class="_h1 RYPP-title">Playlist title</h2>
                                    <p class="RYPP-desc">Playlist subtitle <a href="#" target="_blank">#hashtag</a></p>
                                </header>
                                <div class="RYPP-items"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.video -->
            </div>
        </section>
        <!-- second content -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="row">
                            <!-- business Area
                                ============================================ -->
                            <div class="col-sm-6 col-md-6">
                                <div class="buisness">
                                    <h3 class="category-headding ">BUSINESS</h3>
                                    <div class="headding-border bg-color-5"></div>
                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                        <!-- post title -->
                                        <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a></h3>
                                        <!-- post image -->
                                        <div class="post-thumb">
                                            <a href="#">
                                                <img src="{{ asset('frontend/images/business-01.jpg') }}" class="img-responsive" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-title-author-details">
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                        </div>
                                        <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                                    </div>
                                    <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                        <div class="img-thumb">
                                            <a href="#" rel="bookmark"><img class="entry-thumb" src="{{ asset('frontend/images/business-02.jpg') }}" alt="" height="70" width="100"></a>
                                        </div>
                                        <div class="item-details">
                                            <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free from repetition</a></h3>
                                            <div class="post-editor-date">
                                                <!-- post date -->
                                                <div class="post-date">
                                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                                </div>
                                                <!-- post comment -->
                                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                        <div class="img-thumb">
                                            <a href="#" rel="bookmark"><img class="entry-thumb" src="{{ asset('frontend/images/business-03.jpg') }}" alt="" height="70" width="100"></a>
                                        </div>
                                        <div class="item-details">
                                            <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free from repetition</a></h3>
                                            <div class="post-editor-date">
                                                <!-- post date -->
                                                <div class="post-date">
                                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                                </div>
                                                <!-- post comment -->
                                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- international Area
                                ============================================ -->
                            <div class="col-sm-6 col-md-6">
                                <div class="international">
                                    <h3 class="category-headding ">INTERNATIONAL</h3>
                                    <div class="headding-border bg-color-2"></div>
                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                        <!-- post title -->
                                        <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a></h3>
                                        <!-- post image -->
                                        <div class="post-thumb">
                                            <a href="#">
                                                <img src="{{ asset('frontend/images/international.jpg') }}" class="img-responsive" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-title-author-details">
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                        </div>
                                        <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                                    </div>
                                    <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                        <div class="img-thumb">
                                            <a href="#" rel="bookmark"><img class="entry-thumb" src="{{ asset('frontend/images/international-2.jpg') }}" alt="" height="70" width="100"></a>
                                        </div>
                                        <div class="item-details">
                                            <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free from repetition</a></h3>
                                            <div class="post-editor-date">
                                                <!-- post date -->
                                                <div class="post-date">
                                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                                </div>
                                                <!-- post comment -->
                                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                        <div class="img-thumb">
                                            <a href="#" rel="bookmark"><img class="entry-thumb" src="{{ asset('frontend/images/international-3.jpg') }}" alt="" height="70" width="100"></a>
                                        </div>
                                        <div class="item-details">
                                            <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free from repetition</a></h3>
                                            <div class="post-editor-date">
                                                <!-- post date -->
                                                <div class="post-date">
                                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                                </div>
                                                <!-- post comment -->
                                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.international -->
                            </div>
                        </div>
                        <!-- technology Area
                            ============================================ -->
                        <section class="politics_wrapper">
                            <h3 class="category-headding ">TECHNOLOGY</h3>
                            <div class="headding-border"></div>
                            <div class="row">
                                <div id="content-slide-3" class="owl-carousel">
                                    <!-- item-1 -->
                                    <div class="item">
                                        <div class="row">
                                            <!-- left side post -->
                                            <div class="col-sm-6 col-md-6">
                                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                                    <!-- post title -->
                                                    <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a></h3>
                                                    <!-- post image -->
                                                    <div class="post-thumb">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend/images/technology/tecnology-01.jpg') }}" class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-title-author-details">
                                                    <div class="post-editor-date">
                                                        <!-- post date -->
                                                        <div class="post-date">
                                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                                        </div>
                                                        <!-- post comment -->
                                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                    </div>
                                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                                                </div>
                                            </div>
                                            <!-- right side post -->
                                            <div class="col-sm-6 col-md-6">
                                                <div class="row rn_block">
                                                    <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                        <!-- post image -->
                                                        <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                                            <a href="#">
                                                                <img src="{{ asset('frontend/images/technology/tecnology-02.jpg') }}" class="img-responsive" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="post-title-author-details">
                                                            <!-- post image -->
                                                            <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a></h5>
                                                            <div class="post-editor-date">
                                                                <!-- post date -->
                                                                <div class="post-date">
                                                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                                                </div>
                                                                <!-- post comment -->
                                                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                        <!-- post image -->
                                                        <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                                            <a href="#">
                                                                <img src="{{ asset('frontend/images/technology/tecnology-03.jpg') }}" class="img-responsive" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="post-title-author-details">
                                                            <!-- post image -->
                                                            <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a></h5>
                                                            <div class="post-editor-date">
                                                                <!-- post date -->
                                                                <div class="post-date">
                                                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                                                </div>
                                                                <!-- post comment -->
                                                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                        <!-- post image -->
                                                        <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                                            <a href="#">
                                                                <img src="{{ asset('frontend/images/technology/tecnology-04.jpg') }}" class="img-responsive" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="post-title-author-details">
                                                            <!-- post image -->
                                                            <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a></h5>
                                                            <div class="post-editor-date">
                                                                <!-- post date -->
                                                                <div class="post-date">
                                                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                                                </div>
                                                                <!-- post comment -->
                                                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                        <!-- post image -->
                                                        <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                                                            <a href="#">
                                                                <img src="{{ asset('frontend/images/technology/tecnology-05.jpg') }}" class="img-responsive" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="post-title-author-details">
                                                            <!-- post image -->
                                                            <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a></h5>
                                                            <div class="post-editor-date">
                                                                <!-- post date -->
                                                                <div class="post-date">
                                                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                                                </div>
                                                                <!-- post comment -->
                                                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item-2 -->
                                    <div class="item">
                                        <div class="row">
                                            <!-- left side post -->
                                            <div class="col-sm-6 col-md-6">
                                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                                    <!-- post title -->
                                                    <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a></h3>
                                                    <!-- post image -->
                                                    <div class="post-thumb">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend/images/technology/tecnology-01.jpg') }}" class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-title-author-details">
                                                    <div class="post-editor-date">
                                                        <!-- post date -->
                                                        <div class="post-date">
                                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                                        </div>
                                                        <!-- post comment -->
                                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                    </div>
                                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                                                </div>
                                            </div>
                                            <!-- right side post -->
                                            <div class="col-sm-6 col-md-6">
                                                <div class="row rn_block">
                                                    <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                        <!-- post image -->
                                                        <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                                            <a href="#">
                                                                <img src="{{ asset('frontend/images/technology/tecnology-02.jpg') }}" class="img-responsive" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="post-title-author-details">
                                                            <!-- post image -->
                                                            <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a></h5>
                                                            <div class="post-editor-date">
                                                                <!-- post date -->
                                                                <div class="post-date">
                                                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                                                </div>
                                                                <!-- post comment -->
                                                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                        <!-- post image -->
                                                        <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                                            <a href="#">
                                                                <img src="{{ asset('frontend/images/technology/tecnology-03.jpg') }}" class="img-responsive" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="post-title-author-details">
                                                            <!-- post image -->
                                                            <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a></h5>
                                                            <div class="post-editor-date">
                                                                <!-- post date -->
                                                                <div class="post-date">
                                                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                                                </div>
                                                                <!-- post comment -->
                                                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                        <!-- post image -->
                                                        <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                                            <a href="#">
                                                                <img src="{{ asset('frontend/images/technology/tecnology-04.jpg') }}" class="img-responsive" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="post-title-author-details">
                                                            <!-- post image -->
                                                            <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a></h5>
                                                            <div class="post-editor-date">
                                                                <!-- post date -->
                                                                <div class="post-date">
                                                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                                                </div>
                                                                <!-- post comment -->
                                                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                        <!-- post image -->
                                                        <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                                            <a href="#">
                                                                <img src="{{ asset('frontend/images/technology/tecnology-05.jpg') }}" class="img-responsive" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="post-title-author-details">
                                                            <!-- post image -->
                                                            <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a></h5>
                                                            <div class="post-editor-date">
                                                                <!-- post date -->
                                                                <div class="post-date">
                                                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                                                </div>
                                                                <!-- post comment -->
                                                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                        </section>
                    </div>
                    <!-- second content aside -->
                    <div class="col-md-4 col-sm-4 left-padding">
                        <aside>
                            <!-- online vote -->
                            <div class="online-vote">
                                <h3 class="category-headding ">ONLINE VOTE</h3>
                                <div class="headding-border"></div>
                                <div class="vote-inner">
                                    <p>All the Lorem Ipsum generators the Internet tend repeat predefined chunks as necessary, making this the first true Internet. </p>
                                    <div class="radio-btn">
                                        <label class="radio-inline">
                                            <input type="radio" name="optradio">Yes</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optradio">No</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optradio">No comment</label>
                                    </div>
                                    <button type="button" class="btn btn-style">Success</button>
                                </div>
                            </div>
                            <!-- /.online vote -->
                            <!-- social icon -->
                            <h3 class="category-headding ">SOCIAL PIXEL</h3>
                            <div class="headding-border"></div>
                            <div class="social">
                                <ul>
                                    <li><a href="#" class="facebook"><i class="fa  fa-facebook"></i><span>3987</span> </a></li>
                                    <li><a href="#" class="twitter"><i class="fa  fa-twitter"></i><span>3987</span></a></li>
                                    <li><a href="#" class="google"><i class="fa  fa-google-plus"></i><span>3987</span></a></li>
                                    <li><a href="#" class="flickr"><i class="fa fa-flickr"></i><span>3987</span> </a></li>
                                </ul>
                            </div>
                            <!-- /.social icon -->
                            <!-- corresponder news -->
                            <!-- left post -->
                            <div class="left-post">
                                <h3>From our correspondents</h3>
                                <ul class="lsit-unstyled" id="ticker">
                                    <li>
                                        <a href="#">
                                            <div class="post-style2 latest-com">
                                                <img src="{{ asset('frontend/images/comment-01.jpg') }}" alt="">
                                                <div class="latest-com-detail">
                                                    <h4>What happens if Donald Trump lose?</h4>
                                                    <span><em>By Naeem Khan</em></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="post-style2 latest-com">
                                                <img src="{{ asset('frontend/images/comment-02.jpg') }}" alt="">
                                                <div class="latest-com-detail">
                                                    <h4>Will Brexit struggles mean early election?  </h4>
                                                    <span><em>By Naeem Khan</em></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="post-style2 latest-com">
                                                <img src="{{ asset('frontend/images/comment-01.jpg') }}" alt="">
                                                <div class="latest-com-detail">
                                                    <h4>What happens if Donald Trump lose?</h4>
                                                    <span><em>By Naeem Khan</em></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /left post -->
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- second content end -->
        <div class="container">
            <!-- /.adds -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="ads">
                        <a href="#"><img src="{{ asset('frontend/images/top-bannner2.jpg') }}" class="img-responsive center-block" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.adds-->
        <!-- all category  news Area
            ============================================ -->
        <section class="all-category-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <!-- sports -->
                        <div class="sports-inner">
                            <h3 class="category-headding ">SPORTS</h3>
                            <div class="headding-border bg-color-1"></div>
                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                <!-- post title -->
                                <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a></h3>
                                <!-- post image -->
                                <div class="post-thumb">
                                    <a href="#">
                                        <img src="{{ asset('frontend/images/sports.jpg') }}" class="img-responsive" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="post-title-author-details">
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.sports -->
                    <div class="col-md-4 col-sm-4">
                        <!-- fashion -->
                        <div class="fashion-inner">
                            <h3 class="category-headding ">FASHION</h3>
                            <div class="headding-border bg-color-4"></div>
                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                <!-- post title -->
                                <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a></h3>
                                <!-- post image -->
                                <div class="post-thumb">
                                    <a href="#">
                                        <img src="{{ asset('frontend/images/fashion.jpg') }}" class="img-responsive" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="post-title-author-details">
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.fashion -->
                    <div class="col-md-4 col-sm-4">
                        <!-- travel -->
                        <div class="travel-inner">
                            <h3 class="category-headding ">TRAVEL</h3>
                            <div class="headding-border bg-color-3"></div>
                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                <!-- post title -->
                                <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a></h3>
                                <!-- post image -->
                                <div class="post-thumb">
                                    <a href="#">
                                        <img src="{{ asset('frontend/images/travel.jpg') }}" class="img-responsive" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="post-title-author-details">
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.travel -->
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <!-- food -->
                        <div class="food-inner">
                            <h3 class="category-headding ">FOOD</h3>
                            <div class="headding-border bg-color-4"></div>
                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                <!-- post title -->
                                <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a></h3>
                                <!-- post image -->
                                <div class="post-thumb">
                                    <a href="#">
                                        <img src="{{ asset('frontend/images/food.jpg') }}" class="img-responsive" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="post-title-author-details">
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.food -->
                    <div class="col-md-4 col-sm-4">
                        <!-- politics -->
                        <div class="politics-inner">
                            <h3 class="category-headding ">POLITICS</h3>
                            <div class="headding-border bg-color-5"></div>
                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                <!-- post title -->
                                <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a></h3>
                                <!-- post image -->
                                <div class="post-thumb">
                                    <a href="#">
                                        <img src="{{ asset('frontend/images/politics_06.jpg') }}" class="img-responsive" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="post-title-author-details">
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.politics -->
                    <div class="col-md-4 col-sm-4">
                        <!-- health -->
                        <div class="health-inner">
                            <h3 class="category-headding ">HEALTH</h3>
                            <div class="headding-border bg-color-3"></div>
                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                <!-- post title -->
                                <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a></h3>
                                <!-- post image -->
                                <div class="post-thumb">
                                    <a href="#">
                                        <img src="{{ asset('frontend/images/health.jpg') }}" class="img-responsive" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="post-title-author-details">
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.health -->
                </div>
            </div>
        </section>
        <!-- article section Area
            ============================================ -->  
@endsection
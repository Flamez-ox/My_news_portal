@extends('frontend.frontend_master')

@section('Tittle', 'About')


@section('body')
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-8">
            <!-- left content inner -->
            <section class="recent_news_inner">
                <h3 class="category-headding ">RECENT NEWS</h3>
                <div class="headding-border"></div>
                <div class="row">
                    <div id="content-slide" class="owl-carousel">
                        <!-- item-1 -->
                        <div class="item">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                <!-- image -->
                                <h3><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting.</a></h3>
                                <div class="post-thumb">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('frontend/images/recent_news_01.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="post-info meta-info-rn">
                                    <div class="slide">
                                        <a target="_blank" href="#" class="post-badge btn_six">T</a>
                                    </div>
                                </div>
                            </div>
                            <div class="post-title-author-details">
                                <div class="post-editor-date">
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                            </div>
                        </div>
                        <!-- item-2 -->
                        <div class="item">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                <!-- image -->
                                <h3><a href="#">Contrary to popular belief, Lorem Ipsum is not simply random text.</a></h3>
                                <div class="post-thumb">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('frontend/images/recent_news_02.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="post-info meta-info-rn">
                                    <div class="slide">
                                        <a target="_blank" href="#" class="post-badge btn_sev">I</a>
                                    </div>
                                </div>
                            </div>
                            <div class="post-title-author-details">
                                <div class="post-editor-date">
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text <a href="#">Read more...</a></p>
                            </div>
                        </div>
                        <!-- item-3 -->
                        <div class="item">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                <!-- image -->
                                <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a></h3>
                                <div class="post-thumb">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('frontend/images/recent_news_03.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="post-info meta-info-rn">
                                    <div class="slide">
                                        <a target="_blank" href="#" class="post-badge btn_five">B</a>
                                    </div>
                                </div>
                            </div>
                            <div class="post-title-author-details">
                                <div class="post-editor-date">
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row rn_block">
                    <div class="col-md-4 col-sm-6 padd">
                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                            <!-- image -->
                            <div class="post-thumb">
                                <a href="#">
                                    <img class="img-responsive" src="{{ asset('frontend/images/recent_news_04.jpg') }}" alt="">
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
                            <div class="post-editor-date">
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                </div>
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 padd">
                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <!-- image -->
                            <div class="post-thumb">
                                <a href="#">
                                    <img class="img-responsive" src="{{ asset('frontend/images/recent_news_05.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="post-info meta-info-rn">
                                <div class="slide">
                                    <a target="_blank" href="#" class="post-badge btn_nine">p</a>
                                </div>
                            </div>
                        </div>
                        <div class="post-title-author-details">
                            <h4><a href="#">It is a long established fact that a reader will be ...</a></h4>
                            <div class="post-editor-date">
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                </div>
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 hidden-sm padd">
                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                            <!-- image -->
                            <div class="post-thumb">
                                <a href="#">
                                    <img class="img-responsive" src="{{ asset('frontend/images/recent_news_06.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="post-info meta-info-rn">
                                <div class="slide">
                                    <a target="_blank" href="#" class="post-badge btn_one">F</a>
                                </div>
                            </div>
                        </div>
                        <div class="post-title-author-details">
                            <h4><a href="#">Various versions have evolved over the years, ...</a></h4>
                            <div class="post-editor-date">
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                </div>
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
        <!-- /.left content inner -->
        <div class="col-md-4 col-sm-4 left-padding">
            <!-- right content wrapper -->
            <div class="input-group search-area">
                <!-- search area -->
                <input type="text" class="form-control" placeholder="Search articles here ..." name="q">
                <div class="input-group-btn">
                    <button class="btn btn-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
            </div>
            <!-- /.search area -->
            <!-- twitter feed -->
            <h3 class="category-headding ">TWITTER FEED</h3>
            <div class="headding-border"></div>
            <div class="feed-inner">
                <p>It is a long established fact that a reader will be distracted by the.</p>
                <div class="feed-footer">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                    <cite><a href="#" class="social-feed__author">@newsagency</a></cite>
                    <span class="feed-date">2 hours ago</span>
                </div>
                <hr>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                <div class="feed-footer">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                    <cite><a href="#" class="social-feed__author">@newsagency</a></cite>
                    <span class="feed-date">2 hours ago</span>
                </div>
                <hr>
                <p>The standard chunk of Lorem Ipsum used since the 1500s is.</p>
                <div class="feed-footer">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                    <cite><a href="#" class="social-feed__author">@newsagency</a></cite>
                    <span class="feed-date">2 hours ago</span>
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
@endsection
@extends('front.layout')
@section('contant')
    <!--====== BINDUZ TOP NEWS PART START ======-->

    <section class="binduz-er-top-news-2-area pt-40">
        <div class=" container">
            <div class="row">
                <div class=" col-lg-4">
                    <div class="binduz-er-video-post binduz-er-top-news-2-slider">
                        <div class="binduz-er-latest-news-item">
                            <div class="binduz-er-thumb">
                                <img src="{{ asset('front/assets/images/top-news-item-1.jpg') }}" alt="">
                            </div>
                            <div class="binduz-er-content">
                                <div class="binduz-er-meta-item">
                                    <div class="binduz-er-meta-categories">
                                        <a href="#">Technology</a>
                                    </div>
                                    <div class="binduz-er-meta-date">
                                        <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                    </div>
                                </div>
                                <h5 class="binduz-er-title"><a href="#">When artists and machine intelligence come</a>
                                </h5>
                            </div>
                        </div>
                        <div class="binduz-er-latest-news-item">
                            <div class="binduz-er-thumb">
                                <img src="{{ asset('front/assets/images/top-news-item-4.jpg') }}" alt="">
                            </div>
                            <div class="binduz-er-content">
                                <div class="binduz-er-meta-item">
                                    <div class="binduz-er-meta-categories">
                                        <a href="#">Technology</a>
                                    </div>
                                    <div class="binduz-er-meta-date">
                                        <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                    </div>
                                </div>
                                <h5 class="binduz-er-title"><a href="#">Google Translate: One billion installs,
                                        one</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-4">
                    <div class="binduz-er-top-news-2-item">
                        <div class="binduz-er-trending-news-item mb-30">
                            <div class="binduz-er-trending-news-overlay">
                                <div class="binduz-er-trending-news-meta">
                                    <div class="binduz-er-meta-categories">
                                        <a href="#">Technology</a>
                                    </div>
                                    <div class="binduz-er-meta-date">
                                        <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                    </div>
                                    <div class="binduz-er-trending-news-title">
                                        <h3 class="binduz-er-title"><a href="#">Loud and clear: AI is improving
                                                Assistant conversations</a></h3>
                                    </div>
                                </div>
                                <div class="binduz-er-news-share">
                                    <a href="#"><i class="fal fa-share"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-4">
                    <div class="binduz-er-top-news-2-item binduz-er-top-news-2-1-item">
                        <div class="binduz-er-trending-news-item mb-30">
                            <div class="binduz-er-trending-news-overlay">
                                <div class="binduz-er-trending-news-meta">
                                    <div class="binduz-er-meta-categories">
                                        <a href="#">Technology</a>
                                    </div>
                                    <div class="binduz-er-meta-date">
                                        <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                    </div>
                                    <div class="binduz-er-trending-news-title">
                                        <h3 class="binduz-er-title"><a href="#">Tips and shortcuts for a more
                                                productive spring</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="binduz-er-trending-news-item item-2 mb-30">
                            <div class="binduz-er-trending-news-overlay">
                                <div class="binduz-er-trending-news-meta">
                                    <div class="binduz-er-meta-categories">
                                        <a href="#">Technology</a>
                                    </div>
                                    <div class="binduz-er-meta-date">
                                        <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                    </div>
                                    <div class="binduz-er-trending-news-title">
                                        <h3 class="binduz-er-title"><a href="#">Helpful tools for when you're ready to
                                                travel</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== BINDUZ TOP NEWS PART ENDS ======-->

    <!--====== BINDUZ TRENDING NEWS BOX PART START ======-->

    {{-- <section class="binduz-er-trending-news-box-area pb-40">
        <div class=" container">
            <div class="row">
                <div class=" col-lg-12">
                    <div class="binduz-er-trending-news-box">
                        <div
                            class="binduz-er-trending-news-topbar d-block d-md-flex justify-content-between align-items-center">
                            <h3 class="binduz-er-title">Trending News</h3>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="pills-1-tab" data-bs-toggle="pill" href="#pills-1"
                                        role="tab" aria-controls="pills-1" aria-selected="true">All</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-2-tab" data-bs-toggle="pill" href="#pills-2"
                                        role="tab" aria-controls="pills-2" aria-selected="false">Travel</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-3-tab" data-bs-toggle="pill" href="#pills-3"
                                        role="tab" aria-controls="pills-3" aria-selected="false">Fashion</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-4-tab" data-bs-toggle="pill" href="#pills-4"
                                        role="tab" aria-controls="pills-4" aria-selected="false">Health</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-5-tab" data-bs-toggle="pill" href="#pills-5"
                                        role="tab" aria-controls="pills-5" aria-selected="false">Nature</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-1" role="tabpanel"
                                aria-labelledby="pills-1-tab">
                                <div class="row">
                                    <div class=" col-lg-3 col-md-6">
                                        <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="{{ asset('front/assets/images/trending-today-thumb-1.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February
                                                                2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">Tips from Google’s
                                                            resilience expert on avoiding</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-3 col-md-6">
                                        <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="{{ asset('front/assets/images/trending-today-thumb-2.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February
                                                                2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">A DJ’s mission to tell
                                                            Asian American stories</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-3 col-md-6">
                                        <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="{{ asset('front/assets/images/trending-today-thumb-3.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February
                                                                2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">Supporting India during
                                                            the current COVID crisis</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-3 col-md-6">
                                        <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="{{ asset('front/assets/images/trending-today-thumb-4.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February
                                                                2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">Discover the people
                                                            behind Japanese gastronomy</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                                <div class="row">
                                    <div class=" col-lg-3 col-md-6">
                                        <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="assets/images/trending-today-thumb-1.png" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February
                                                                2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">Tips from Google’s
                                                            resilience expert on avoiding</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-3 col-md-6">
                                        <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="{{ asset('front/assets/images/trending-today-thumb-2.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February
                                                                2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">A DJ’s mission to tell
                                                            Asian American stories</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-3 col-md-6">
                                        <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="{{ Asset('front/assets/images/trending-today-thumb-3.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February
                                                                2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">Supporting India during
                                                            the current COVID crisis</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-3 col-md-6">
                                        <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="{{ asset('front/assets/images/trending-today-thumb-4.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February
                                                                2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">Discover the people
                                                            behind Japanese gastronomy</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
                                <div class="row">
                                    <div class=" col-lg-3 col-md-6">
                                        <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="assets/images/trending-today-thumb-1.png" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February
                                                                2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">Tips from Google’s
                                                            resilience expert on avoiding</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-3 col-md-6">
                                        <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="assets/images/trending-today-thumb-2.png" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February
                                                                2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">A DJ’s mission to tell
                                                            Asian American stories</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-3 col-md-6">
                                        <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="assets/images/trending-today-thumb-3.png" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February
                                                                2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">Supporting India during
                                                            the current COVID crisis</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-3 col-md-6">
                                        <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="assets/images/trending-today-thumb-4.png" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February
                                                                2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">Discover the people
                                                            behind Japanese gastronomy</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
                                <div class="row">
                                    <div class=" col-lg-3 col-md-6">
                                        <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="assets/images/trending-today-thumb-1.png" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February
                                                                2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">Tips from Google’s
                                                            resilience expert on avoiding</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-3 col-md-6">
                                        <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="assets/images/trending-today-thumb-2.png" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February
                                                                2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">A DJ’s mission to tell
                                                            Asian American stories</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-3 col-md-6">
                                        <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="assets/images/trending-today-thumb-3.png" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February
                                                                2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">Supporting India during
                                                            the current COVID crisis</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-3 col-md-6">
                                        <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="assets/images/trending-today-thumb-4.png" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February
                                                                2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">Discover the people
                                                            behind Japanese gastronomy</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-5-tab">
                                <div class="row">
                                    <div class=" col-lg-3 col-md-6">
                                        <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="assets/images/trending-today-thumb-1.png" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February
                                                                2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">Tips from Google’s
                                                            resilience expert on avoiding</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-3 col-md-6">
                                        <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="assets/images/trending-today-thumb-2.png" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February
                                                                2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">A DJ’s mission to tell
                                                            Asian American stories</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-3 col-md-6">
                                        <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="assets/images/trending-today-thumb-3.png" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February
                                                                2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">Supporting India during
                                                            the current COVID crisis</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-3 col-md-6">
                                        <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                                            <div class="binduz-er-latest-news-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="assets/images/trending-today-thumb-4.png" alt="">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <div class="binduz-er-meta-item">
                                                        <div class="binduz-er-meta-categories">
                                                            <a href="#">Technology</a>
                                                        </div>
                                                        <div class="binduz-er-meta-date">
                                                            <span><i class="fal fa-calendar-alt"></i>24th February
                                                                2020</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="binduz-er-title"><a href="#">Discover the people
                                                            behind Japanese gastronomy</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!--====== BINDUZ TRENDING NEWS BOX PART ENDS ======-->

    <!--====== BINDUZ VIDEO POST 4 PART START ======-->

    <section class="binduz-er-video-post-4-area">
        <div class=" container">
            <div class="row">
                <div class=" col-lg-9">
                    <div class="row">


                    </div>

                    <div class="binduz-er-footer-add pt-35">
                        <div class="binduz-er-footer-add-item text-center">
                            <span class="mb-10 d-inline-block">ADVERTISEMENT</span>
                            <img src="assets/images/space-bg-4.jpg" alt="">
                        </div>
                    </div>
                    <div class="binduz-er-recent-news-box">
                        <div class="binduz-er-recent-news-title">
                            <h3 class="binduz-er-title">Recent News</h3>
                        </div>
                        @foreach ($LastFivePost as $item)
                            <div class="binduz-er-recent-news-item mb-20">
                                <div class="binduz-er-thumb">
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="" style="height: 50px"
                                        style="width: 50px">
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">{{ $item->category }}</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i>{{ $item->created_at }}</span>
                                        </div>
                                    </div>
                                    <h5 class="binduz-er-title"><a
                                            href="{{ route('postdetal', $item->id) }}">{{ $item->title }}</a></h5>
                                    <p>{{ $item->smallDesc }}</p>
                                </div>
                            </div>
                        @endforeach


                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection

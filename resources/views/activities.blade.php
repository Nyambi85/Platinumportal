@extends('layouts.app')

@section('content')
    <!--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>-->



    <!--=== Slider ===-->
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <!-- SLIDE -->
                <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Title 1">
                    <!-- MAIN IMAGE -->
                    <img src="assets/img/test4.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                    <div class="tp-caption revolution-ch1 sft start"
                         data-x="center"
                         data-hoffset="0"
                         data-y="100"
                         data-speed="1500"
                         data-start="500"
                         data-easing="Back.easeInOut"
                         data-endeasing="Power1.easeIn"
                         data-endspeed="300">
                        Feel in control again
                    </div>

                    <!-- LAYER -->
                    <div class="tp-caption revolution-ch2 sft"
                         data-x="center"
                         data-hoffset="0"
                         data-y="190"
                         data-speed="1400"
                         data-start="2000"
                         data-easing="Power4.easeOut"
                         data-endspeed="300"
                         data-endeasing="Power1.easeIn"
                         data-captionhidden="off"
                         style="z-index: 6">
                        Platinum Credit
                    </div>

                    <!-- LAYER -->
                    <div class="tp-caption sft"
                         data-x="center"
                         data-hoffset="0"
                         data-y="310"
                         data-speed="1600"
                         data-start="2800"
                         data-easing="Power4.easeOut"
                         data-endspeed="300"
                         data-endeasing="Power1.easeIn"
                         data-captionhidden="off"
                         style="z-index: 6">
                        <a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">Learn More</a>
                        <a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">Our Work</a>
                    </div>
                </li>
                <!-- END SLIDE -->

                <!-- SLIDE -->
                <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Title 2">
                    <!-- MAIN IMAGE -->
                    <img src="assets/img/test2.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                    <div class="tp-caption revolution-ch1 sft start"
                         data-x="center"
                         data-hoffset="0"
                         data-y="100"
                         data-speed="1500"
                         data-start="500"
                         data-easing="Back.easeInOut"
                         data-endeasing="Power1.easeIn"
                         data-endspeed="300">
                        Simple way to make different
                    </div>

                    <!-- LAYER -->
                    <div class="tp-caption revolution-ch2 sft"
                         data-x="center"
                         data-hoffset="0"
                         data-y="190"
                         data-speed="1400"
                         data-start="2000"
                         data-easing="Power4.easeOut"
                         data-endspeed="300"
                         data-endeasing="Power1.easeIn"
                         data-captionhidden="off"
                         style="z-index: 6">

                        We are creative technology company providing <br/>
                        key digital services on web and mobile.
                    </div>

                    <!-- LAYER -->
                    <div class="tp-caption sft"
                         data-x="center"
                         data-hoffset="0"
                         data-y="310"
                         data-speed="1600"
                         data-start="2800"
                         data-easing="Power4.easeOut"
                         data-endspeed="300"
                         data-endeasing="Power1.easeIn"
                         data-captionhidden="off"
                         style="z-index: 6">
                        <a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">Learn More</a>
                        <a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">Our Work</a>
                    </div>
                </li>
                <!-- END SLIDE -->

                <!-- SLIDE -->
                <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Title 3">
                    <!-- MAIN IMAGE -->
                    <img src="assets/img/test2.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                    <div class="tp-caption revolution-ch1 sft start"
                         data-x="center"
                         data-hoffset="0"
                         data-y="100"
                         data-speed="1500"
                         data-start="500"
                         data-easing="Back.easeInOut"
                         data-endeasing="Power1.easeIn"
                         data-endspeed="300">
                        There when you need us.
                    </div>

                    <!-- LAYER -->
                    <div class="tp-caption revolution-ch2 sft"
                         data-x="center"
                         data-hoffset="0"
                         data-y="190"
                         data-speed="1400"
                         data-start="2000"
                         data-easing="Power4.easeOut"
                         data-endspeed="300"
                         data-endeasing="Power1.easeIn"
                         data-captionhidden="off"
                         style="z-index: 6">
                        We are creative technology company providing <br/>
                        key digital services on web and mobile.
                    </div>

                    <!-- LAYER -->
                    <div class="tp-caption sft"
                         data-x="center"
                         data-hoffset="0"
                         data-y="310"
                         data-speed="1600"
                         data-start="2800"
                         data-easing="Power4.easeOut"
                         data-endspeed="300"
                         data-endeasing="Power1.easeIn"
                         data-captionhidden="off"
                         style="z-index: 6">
                        <a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">Work Hard</a>
                        <a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">Our Work</a>
                    </div>
                </li>
                <!-- END SLIDE -->
            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        </div>
    </div>
    <!--=== End Slider ===-->

    <!--=== Call To Action ===--
    <div class="call-action-v1 bg-color-light">
        <div class="container">
            <div class="call-action-v1-box">
                <div class="call-action-v1-in">
                    <p>Platinum Credit Limited is a credit only Micro-Finance Company licensed in Tanzania under the Company’s Act. The company was founded in 2005 with a vision to provide emergency loans to Civil Servants, employees of approved companies. </p>
                </div>
                <div class="call-action-v1-in inner-btn page-scroll">
                    <a href="#portfolio" class="btn-u btn-brd btn-brd-hover btn-u-dark btn-u-block">View Our Portfolio</a>
                </div>
            </div>
        </div>
    </div>
    <!--=== End Call To Action ===-->

    <!--=== Content Part ===-->

    <div class="one-page-inner one-default">

        <!--=== Cube-Portfdlio ===-->
        <div class="cube-portfolio container margin-bottom-60">
            <div class="content-xs">
                <div id="filters-container" class="cbp-l-filters-text content-xs">

                </div><!--/end Filters Container-->
            </div>

            <div id="grid-container" class="cbp-l-grid-agency">
                <div class="cbp-item graphic">
                    <div class="cbp-caption">
                        <div class="overflow-hidden">
                            <div class="responsive-video">
                                <iframe allowFullScreen frameborder="0" height="564" mozallowfullscreen src="https://player.vimeo.com/video/251106549" webkitAllowFullScreen width="640"></iframe>
                            </div>

                            <!--<a class="btn-more hover-effect" href="#">read more +</a>-->
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <ul class="link-captions">
                                        <li><a href="blogMoreDetails5"><i class="rounded-x fa fa-link"></i></a></li>
                                        <li><a href="https://player.vimeo.com/video/251106549" class="cbp-lightbox" data-title="Design Object"><i class="rounded-x fa fa-eye"></i></a></li>
                                    </ul>
                                    <div class="cbp-l-grid-agency-desc">Training Eps 01</div>
                                    <div class="cbp-l-grid-agency-desc">conquer Fear</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item web-design logos">
                    <div class="cbp-caption">
                        <div class="responsive-video">
                            <iframe allowFullScreen frameborder="0" height="564" mozallowfullscreen src="http://player.vimeo.com/video/250733108" webkitAllowFullScreen width="640"></iframe>

                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <ul class="link-captions">
                                        <li><a href="showTraining2"><i class="rounded-x fa fa-link"></i></a></li>
                                        <li><a href="http://player.vimeo.com/video/250733108" class="cbp-lightbox" data-title="Design Object"><i class="rounded-x fa fa-eye"></i></a></li>
                                    </ul>
                                    <div class="cbp-l-grid-agency-desc">Training Eps 02</div>
                                    <div class="cbp-l-grid-agency-desc">Motivational Talk</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item graphic logos">
                    <div class="cbp-caption">
                        <div class="responsive-video">
                            <iframe allowFullScreen frameborder="0" height="564" mozallowfullscreen src="http://player.vimeo.com/video/251106518" webkitAllowFullScreen width="640"></iframe>

                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <ul class="link-captions">
                                        <li><a href="blogMoreDetails5"><i class="rounded-x fa fa-link"></i></a></li>
                                        <li><a href="http://player.vimeo.com/video/251106518" class="cbp-lightbox" data-title="Design Object"><i class="rounded-x fa fa-eye"></i></a></li>
                                    </ul>
                                    <div class="cbp-l-grid-agency-desc">Training Eps 03</div>
                                    <div class="cbp-l-grid-agency-desc">You will win</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item web-design graphic">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="assets/img/corrections2.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <ul class="link-captions">
                                        <li><a href="portfolio_single_item.html"><i class="rounded-x fa fa-link"></i></a></li>
                                        <li><a href="assets/img/main/img10.html" class="cbp-lightbox" data-title="Design Object"><i class="rounded-x fa fa-eye"></i></a></li>
                                    </ul>
                                    <div class="cbp-l-grid-agency-desc">Training Eps 04</div>
                                    <div class="cbp-l-grid-agency-desc">Know Your Market</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item identity web-design">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="assets/img/main/img11.html" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <ul class="link-captions">
                                        <li><a href="portfolio_single_item.html"><i class="rounded-x fa fa-link"></i></a></li>
                                        <li><a href="assets/img/main/img11.html" class="cbp-lightbox" data-title="Design Object"><i class="rounded-x fa fa-eye"></i></a></li>
                                    </ul>
                                    <div class="cbp-l-grid-agency-desc">Training Eps 04</div>
                                    <div class="cbp-l-grid-agency-desc">Know Your Market</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item identity web-design">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="assets/img/platinumlights.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <ul class="link-captions">
                                        <li><a href="portfolio_single_item.html"><i class="rounded-x fa fa-link"></i></a></li>
                                        <li><a href="assets/img/main/img12.html" class="cbp-lightbox" data-title="Design Object"><i class="rounded-x fa fa-eye"></i></a></li>
                                    </ul>
                                    <div class="cbp-l-grid-agency-desc">Training Eps 06</div>
                                    <div class="cbp-l-grid-agency-desc">Design Your Plan</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!--/end Grid Container-->
        </div>
        <!--=== End Cube-Portfdlio ===-->

    </div>
    </div><!--/one-page-->
    <!-- End Content Part -->

@endsection
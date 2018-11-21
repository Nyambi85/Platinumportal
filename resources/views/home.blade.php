<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html dir="rtl" lang="en"> <!--<![endif]-->

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.5/RTL/page_home8.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2016 06:14:02 GMT -->
<head>
    <title> Main Page | Career </title>

    @include('layouts.HeaderLogin')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>

<body>
<div class="wrapper">

    <!--=== Header ===-->
    <div class="header">
        <div class="container">
            <!-- Logo -->
            <a class="logo" href="/home">
                <img src="{{URL::asset('assets/img/logo3-default.png')}}" alt="Logo" >
            </a>
            <!-- End Logo -->

            <!-- Topbar -->
            <div class="topbar">
                <ul class="loginbar pull-right">
                    <li class="topbar-devider"></li>
                    <li><a href="">Account reset</a></li>
                    <li class="topbar-devider"></li>
                    <li><a href="{{ url('/logout') }}">Log Out</a></li>
                </ul>

                <span class="loginbar pull-right">For any challenge please write to us: helpdesk@platinumcredit.co.tz </span>
            </div>
            <!-- End Topbar -->




        </div><!--/end container-->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
            <div class="container">
                <ul class="nav navbar-nav" >
                    <li >
                        <a href="javascript:void(0);" style="color: #00008B">
                            about us
                        </a>
                    </li>

                    <!-- Home -->
                    <li >
                        <a href="blog" style="color: #00008B" >
                            blog
                        </a>

                    </li>

                    <!-- End Home -->


                    <!-- Portfolio -->
                    <li >
                        <a href="javascript:void(0);" style="color: #00008B">
                            Portfolio
                        </a>

                    </li>
                    <!-- End Portfolio -->

                    <!-- Features -->
                    <li >
                        <a href="javascript:void(0);" style="color: #00008B" >
                            Our Products
                        </a>

                    </li>
                    <!-- End Features -->

                    <!-- Features -->
                    <li >
                        <a href="blog" style="color: #00008B" >
                            blog
                        </a>

                    </li>
                    <!-- End Features -->


                    <!-- Demo Pages -->
                    <li class="active" >
                        <a href="/"  style="color: #00008B">
                            Home
                        </a>


                    </li>

                    <!-- End Demo Pages -->

                    <!-- Search Block -->
                    <li>
                        <i class="search fa fa-search search-btn"></i>
                        <div class="search-open">
                            <div class="input-group animated fadeInDown">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
										<button class="btn-u" type="button">Go</button>
									</span>
                            </div>
                        </div>
                    </li>
                    <!-- End Search Block -->
                </ul>
            </div><!--/end container-->
        </div><!--/navbar-collapse-->
    </div>
<!--=== End Header ===-->
    <!--=== Search Block ===-->
    <div class="search-block parallaxBg">
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
            </div>
        </div>
    </div><!--/container-->
    <!--=== End Search Block ===-->


    <!--=== Content ===-->
    <div class="container content">

        <div class="clearfix margin-bottom-20"></div>
        <div class="shadow-wrapper">
            <!--   <div class="tag-box tag-box-v1 box-shadow shadow-effect-2">
                   <h2>AgroExchange Career</h2>
                   <p>Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
               </div>-->


            <!-- Top Categories --
            <div class="headline"><h2>Top Jobs</h2></div>-->
            <div class="row category margin-bottom-20">
                <!-- Info Blocks -->
                <div class="col-md-4 col-sm-6">

                    <!-- Top Categories -->
                    <div class="headline"><h2>Current Jobs</h2></div>

                    @for($i=0; $i < count($parameters['jobs']); $i++)

                        <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                            <i class="icon-custom icon-sm rounded-x icon-bg-dark-blue fa fa-newspaper-o"></i>
                            <div class="content-boxes-in-v3">
                                <h3><a href="job/jobDetails/{{$parameters['jobs'][$i]->id}}" style="color:#00008b; text-align: justify;">{{$parameters['jobs'][$i]->jobTitle}}</a></h3>
                                <p>{{$parameters['jobs'][$i]->jobDescription}}</p>
                            </div>
                        </div>

                    @endfor

                </div>
                <!-- End Info Blocks -->

                <!-- Info Blocks -->
                <div class="col-md-4 col-sm-6 md-margin-bottom-40">

                    <!-- Top Categories -->
                    <div class="headline"><h2>Applied Jobs</h2></div>

                    @for($i=0; $i < count($parameters['appliedJobs']); $i++)

                        <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                            <i class="icon-custom icon-sm rounded-x icon icon-layers icon-bg-dark-blue"></i>
                            <div class="content-boxes-in-v3">
                                <h3><a href="job/jobDetails/{{$parameters['appliedJobs'][$i]->id}}">{{$parameters['appliedJobs'][$i]->jobTitle}}</a></h3>
                                <p>{{$parameters['appliedJobs'][$i]->jobDescription}}</p>
                            </div>
                        </div>

                    @endfor






                </div>
                <!-- End Info Blocks -->

                <!-- Begin Section-Block -->
                <div class="col-md-4 col-sm-12">
                    <div class="section-block">


                        @if(!empty($parameters['passport']) && $parameters['passport'] != '')
                            <div class="row col-sm-10 col-sm-12 " style="float: inherit; margin-right: 10%">
                            <img class="img-responsive img-bordered rounded-2x" src="{{URL::asset('assets/passPortPicture/'.$parameters['passport'])}}" alt="">
                                </div>
                        @else
                            <div class="row col-sm-10 col-sm-12 " style="float: inherit; margin-right: 10%">
                                <img class="img-responsive rounded" src="assets/img/demo.html" alt="">
                            </div>
                        @endif

                        <div class="text-right">
                            <h2>{{ Auth::user()->name }}</h2>


                            <h4>Complete your Profile to maximize your earning opportunities</h4>
                            <p> A professional profile is essential to effectively showcase your skills. Applicants who have completed their profile are far more likely to get hired<a href="#">Update Profile</a></p>
                        </div>

                        </br>

                        <!-- Progress Bar -->
                        <h3 class="heading-xs no-top-space">Your profile  <span class="pull-right">88%</span></h3>
                        <div class="progress progress-u progress-xxs">
                            <div style="width: 88%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="88" role="progressbar"  class="progress-bar progress-bar-dark-blue">
                            </div>
                        </div>

                        <!-- End Progress Bar -->

                        <div class="clearfix"></div>

                        <div class="section-block-info">
                          <!--  <ul class="list-inline tags-v1">
                                <p><a class="btn-u btn-u-dark-blue btn-u-small" href="{{ route('users.loadCV') }}"><i class="fa fa-plus-sign"></i> Update CV</a></p>
                                <!--<li><h3><a href="users/loadCV" style="color:#00008B">Update CV</a></h3></li>--
                            </ul>-->
                        </div>
                    </div>
                </div>
                <!-- End Section-Block -->
            </div>
            <!-- End Top Categories -->
        </div><!--/container-->
        <!--=== End Content ===-->

        <!--=== Parallax Counter ===-->

        <!--=== End Parallax Counter ===-->

        <!--=== Container Part ===-->
        <!--/container-->
        <!--=== Container Part ===-->

    </div><!--/End Wrapepr-->



    <!-- JS Global Compulsory -->
    <script src="{{URL::asset('assets/plugins/jquery/jquery.min.html')}}"></script>
    <script src="{{URL::asset('assets/plugins/jquery/jquery-migrate.min.htmll')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap/js/bootstrap.min.html')}}"></script>
    <!-- JS Implementing Plugins -->
    <script src="{{URL::asset('assets/plugins/back-to-top.html')}}"></script>
    <script src="{{URL::asset('assets/plugins/smoothScroll.html')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/plugins/sweetalert.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
    <script src="{{URL::asset('assets/plugins/jquery.parallax.html')}}"></script>
    <script src="{{URL::asset('assets/plugins/jquery.parallax.html')}}"></script>
    <script src="{{URL::asset('assets/plugins/counter/jquery.counterup.min.html')}}"></script>
    <script src="{{URL::asset('assets/plugins/owl-carousel2/owl.carousel.min.html')}}"></script>
    <!-- JS Customization -->
    <script src="{{URL::asset('assets/js/custom.html')}}"></script>
    <!-- JS Page Level -->
    <script src="{{URL::asset('assets/js/app.html')}}"></script>
    <script src="{{URL::asset('assets/js/plugins/owl-carousel-rtl.html')}}"></script>
    <script src="{{URL::asset('assets/js/plugins/style-switcher-rtl.js')}}"></script>
    <script>


    /*    window.onload = function() {

            swal({
                title: "Good job!",
                text: "You clicked the button!",
                icon: "success",
            });
        }*/



        jQuery(document).ready(function() {
            App.init();
            App.initCounter();
            App.initParallaxBg();
            OwlCarousel.initOwlCarousel();
            StyleSwitcher.initStyleSwitcher();
        });
    </script>
    <!--[if lt IE 9]>
    <script src="../assets/plugins/respond.js"></script>
    <script src="../assets/plugins/html5shiv.js"></script>
    <script src="../assets/plugins/placeholder-IE-fixes.js"></script>
    <![endif]-->

</body>

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.5/RTL/page_home8.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2016 06:14:02 GMT -->
</html>
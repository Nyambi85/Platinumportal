<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html dir="rtl" lang="en"> <!--<![endif]-->

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.5/RTL/page_home8.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2016 06:14:02 GMT -->
<head>
    <title> Main Page | Career </title>

    @include('layouts.HeaderLogin')

    <link rel="stylesheet" href="{{URL::asset('assets/css/accounting.style.css')}}">
    <link rel="stylesheet" href={{URL::asset('assets/plugins/brand-buttons/brand-buttons.css')}}">
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
                        <a href="/mainhome"  style="color: #00008B">
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
                <!--   <h1>Discover <span class="color-green">new</span> things</h1>

                   <div class="input-group">
                       <input type="text" class="form-control" placeholder="Search words with regular expressions ...">
                       <span class="input-group-btn">
                           <button class="btn-u btn-u-lg" type="button"><i class="fa fa-search"></i></button>
                       </span>
                   </div>

                   <form action="#" class="sky-form page-search-form">
                       <div class="inline-group">
                           <label class="checkbox"><input type="checkbox" name="checkbox-inline" checked><i></i>Recent</label>
                           <label class="checkbox"><input type="checkbox" name="checkbox-inline"><i></i>Related</label>
                           <label class="checkbox"><input type="checkbox" name="checkbox-inline"><i></i>Popular</label>
                           <label class="checkbox"><input type="checkbox" name="checkbox-inline"><i></i>Most Common</label>
                       </div>
                   </form>-->
            </div>
        </div>
    </div><!--/container-->
    <!--=== End Search Block ===-->

    <!--=== Content ===-->
    <div class="container content">

        <div class="clearfix margin-bottom-30"></div>
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
                    <div class="headline"><h2>Top Jobs</h2></div>

                    @foreach($jobs as $job)

                        <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                            <i class="icon-custom icon-sm rounded-x icon-bg-dark-blue fa fa-newspaper-o"></i>
                            <div class="content-boxes-in-v3">
                                <h3><a href="job/jobDetails/{{$job->id}}">{{$job->jobTitle}}</a></h3>
                                <p>{{$job->jobDescription}}</p>
                            </div>
                        </div>

                    @endforeach

                </div>
                <!-- End Info Blocks -->

                <!-- Info Blocks -->
                <div class="col-md-4 col-sm-6 md-margin-bottom-40">

                    <!-- Top Categories -->
                    <div class="headline"><h2>Training Updatea </h2></div>

     <!--               <div class="info-block-v2">
                        <i class="icon icon-layers"></i>
                        <div class="info-block-in">
                            <h3>Pellentesque vulputate</h3>
                            <p>Vestibulum non ex volutpat, sodales diam sit amet, semper nunc. Integer sed nibh commodo, tincidunt nisi.</p>
                        </div>
                    </div>-->


                    <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                        <span class="blinking2"><i class="icon-custom icon-sm rounded-x icon icon-eye icon-bg-dark-blue blinking2"></i></span>
                        <div class="content-boxes-in-v3" style="text-align: justify;">
                            <h3><a href="showTraining2">It security awareness campaign</a> </h3>
                            <p>Watch video series that cover security item on IT</p>
                        </div>
                    </div>
                    
                    <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                        <span class="blinking2"><i class="icon-custom icon-sm rounded-x icon icon-eye icon-bg-dark-blue blinking2"></i></span>
                        <div class="content-boxes-in-v3" style="text-align: justify;">
                            <h3><a href="Announcement/1"> Employee recognition </a> </h3>
                            <p >Platinum is introducing monthly employee recognition program, Read more about it as HR Comminicate </p>
                        </div>
                    </div>

                    <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                        <span class="blinking2"><i class="icon-custom icon-sm rounded-x icon icon-eye icon-bg-dark-blue blinking2"></i></span>
                        <div class="content-boxes-in-v3" style="text-align: justify;">
                            <h3><a href="MStraining"> Microsoft Office Training </a> </h3>
                            <p>IT department is happy to invite you on Series of training for Microsoft office,
                                click on the link above to see our latest training video</p>
                        </div>
                    </div>

                    <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                        <i class="icon-custom icon-sm rounded-x icon icon-layers icon-bg-dark-blue"></i>
                        <div class="content-boxes-in-v3" style="text-align: justify;">
                            <h3><a href="showActivities"> Team biulding Traing at HQ </a> </h3>
                            <p>Get updated with new traing activity that are taking place at Platinum credit Tanzania</p>
                        </div>
                    </div>




                </div>
                <!-- End Info Blocks -->

                <!-- Begin Section-Block -->
                <div class="col-md-4 col-sm-12">
                    <div class="section-block">


                        <img class="img-responsive profile-img margin-bottom-20" src="{{URL::asset('assets/img/images2.jpg')}}" alt="">

                        <div class="text-right">
                            <h2>{{ Auth::user()->name }}</h2>


                            <h5><a href="paytan" style="color: #00008b">Click here to visit your account <strong>HRM Systm</strong></a></h5>

			<!--<h5><a href="paytan" style="color: #00008b"><span><strong class="blinking">Important Announcement</strong></span></a></h5>-->

                                    <button class="btn btn-block btn-appnet">
                                        <a href="/adminView/adminview" style="color: #00008b"><span><strong>Admin view</strong></span></a>
                                    </button>



                         </div>
                        <div class="row margin-bottom-70">
                           <!-- <div class="col-md-12">
                                <p><a class="btn-u btn-u-dark-blue btn-u-small rounded" href="{{ url('/login') }}"><i class="fa fa-plus-sign"></i> Sign In</a></p>
                            </div>-->
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

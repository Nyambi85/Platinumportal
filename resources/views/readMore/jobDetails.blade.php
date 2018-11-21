<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html dir="rtl" lang="en"> <!--<![endif]-->

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.5/RTL/page_home8.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2016 06:14:02 GMT -->
<head>
    <title> Main Page | Career </title>

    @include('layouts.HeaderLogin')
</head>

<body>
<div class="wrapper">
    <!--=== Header ===-->
@include('layouts.headerNav')
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

        <div class="clearfix margin-bottom-20"></div>
        <div class="shadow-wrapper">
            <!--   <div class="tag-box tag-box-v1 box-shadow shadow-effect-2">
                   <h2>AgroExchange Career</h2>
                   <p>Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
               </div>-->


            <!-- Top Categories --
            <div class="headline"><h2>Top Jobs</h2></div>-->
            <div class="row category margin-bottom-20">


                <!--Blog Post-->
                <div class=" text-right blog margin-bottom-40">
                    <h2>{{$job->jobTitle}}</h2>
                    <div class="blog-post-tags">
                        <ul class="list-unstyled list-inline blog-info">
                            <li><i class="fa fa-calendar color-dark-blue"></i> {{$job->created_at}}</li>
                        </ul>
                    </div>
                    <p>{{$job->jobDescription}}</p><br>
                    <!--<div class="section-block">-->
                        <iframe src="{{URL::asset('assets/img/Tangazo_la_Kazi_Afisa_Mauzo.pdf')}}" style="width:100%; height:800px;" frameborder="0"></iframe>
                     <!--   </div>-->
                    <div class="alert alert-danger fade in col-md-4 col-sm-12">
                        <h6>Applay before : <i class="fa fa-calendar"></i> {{$job->Expiredate}} </h6>
                    </div>
                    <p><a class="btn-u btn-u-dark-blue btn-u-small" href="/job/applay/{{$job->id}}"><i class="fa fa-plus-sign"></i> Apply now</a></p>
                </div>
                <!--End Blog Post-->
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

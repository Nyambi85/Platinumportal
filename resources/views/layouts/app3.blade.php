<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.5/page_login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2016 06:12:41 GMT -->
<head>
    <title> Reset Password | Platinum </title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{URL::asset('../../assets/img/logo3-default.png')}}">

    <!-- Web Fonts -->
    <link rel="stylesheet" type="text/css" href="../../../fonts.googleapis.com/css025a.css?family=Open+Sans:400,300,700&amp;subset=cyrillic,latin">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="../../assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">


    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="../../assets/plugins/animate.css">
    <link rel="stylesheet" href="../../assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="../../assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/plugins/brand-buttons/brand-buttons.css">
<!--<link href="{{URL::asset('../css/app.css') }}" rel="stylesheet">-->

    <!-- CSS Page Style -->
    <link rel="stylesheet" href="../../assets/css/pages/page_log_reg_v4.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="../../assets/css/custom.css">


    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>

<body>
<!--=== Content Part ===-->
<div class="container-fluid">
    <div class="row equal-height-columns">

        <div class="col-md-6 col-sm-6 hidden-xs image-block equal-height-column"></div>

        <div class="col-md-6 col-sm-6 form-block equal-height-column">
            <a href="/">
                <!--<img src="assets/img/themes/logo1-blue.html" alt="">-->
                <img class="shrink-logo" src="{{URL::asset('../assets/img/logo3-default.png')}}" alt="Logo">
            </a>
            @if(Auth::guest())
                <h4 class="margin-bottom-30"><a href="{{ route('login') }}" style="color: #00008b;">Login To Your Account</a></h4>
            @else
                <h2 class="margin-bottom-30">Pleas share your mail</h2>
            @endif

            @yield('content')


        </div>


    </div>
</div><!--/container-->
<!--=== End Content Part ===-->

<!--=== Sticky Footer ===-->
<div class="container sticky-footer">
    <ul class="list-unstyled list-inline social-links margin-bottom-20">
        <li><a href="#"><i class="icon-custom icon rounded-x icon-bg-dark-blue fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="icon-custom icon rounded-x icon-bg-dark-blue fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="icon-custom icon rounded-x icon-bg-dark-blue fa fa-google-plus"></i></a></li>
    </ul>
    <p class="copyright-space">
        2017 &copy; All Rights Reserved. AgroSoftware by <a href="#">AgroCorp</a>
    </p>
</div>
<!--=== End Sticky Footer ===-->

<!-- JS Global Compulsory -->
<script src="{{URL::asset('../../assets/plugins/jquery/jquery.min.html')}}"></script>
<script src="{{URL::asset('../../assets/plugins/jquery/jquery-migrate.min.html')}}"></script>
<script src="{{URL::asset('../../assets/plugins/bootstrap/js/bootstrap.min.html')}}"></script>

<!-- JS Implementing Plugins -->
<script src="{{URL::asset('../../assets/plugins/back-to-top.html')}}"></script>
<script src="{{URL::asset('../../assets/plugins/backstretch/jquery.backstretch.min.html')}}"></script>

<!-- JS Customization -->
<script src="{{URL::asset('../../assets/js/custom.html')}}"></script>

<!-- JS Page Level -->
<script src="{{URL::asset('../../assets/js/app.html')}}"></script>
<script>
    jQuery(document).ready(function() {
        App.init();
    });
</script>
<script>
    $(".image-block").backstretch([
        "assets/img/bg/img11.jpg",
        "assets/img/bg/img5.html",
    ], {
        fade: 1000,
        duration: 7000
    });
</script>
<!--[if lt IE 9]>
<script src="../../assets/plugins/respond.js"></script>
<script src="../../assets/plugins/html5shiv.js"></script>
<script src="../../assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->
</body>

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.5/page_login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2016 06:12:41 GMT -->
</html>

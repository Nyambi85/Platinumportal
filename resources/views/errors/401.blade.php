<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.5/page_404_error6.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2016 06:12:47 GMT -->
<head>
    <title> Career | 401 Error </title>

@include('layouts.HeaderLogin2')
<!-- CSS Page Style -->
    <link rel="stylesheet" href="{{URL::asset("assets/css/pages/page_404_error.css")}}">

</head>

<body>
<div class="wrapper">
    <!--=== Header ===-->
@include('layouts.loginHeaderNav2')
<!--=== End Header ===-->

    <!--=== Content Part ===-->
    <div class="container content">
        <!--Error Block-->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="error-v1">
                    <span class="error-v1-title">401</span>
                    <span>That’s an error!</span>
                    <p>Sorry your not autghorize to access this page.</p>
                    <a class="btn-u btn-u-dark-blue btn-bordered" href="/">Back Home</a>
                </div>
            </div>
        </div>
        <!--End Error Block-->
    </div>
    <!--=== End Content Part ===-->

    <!--=== Sticky Footer ===-->
@include('layouts.footer')
<!--=== End Sticky Footer ===-->
</div><!--/wrapper-->

<!-- JS Global Compulsory -->
<script type="text/javascript" src="{{URL::asset("assets/plugins/jquery/jquery.min.html")}}"></script>
<script type="text/javascript" src="{{URL::asset("assets/plugins/jquery/jquery-migrate.min.html")}}"></script>
<script type="text/javascript" src="{{URL::asset("assets/plugins/bootstrap/js/bootstrap.min.html")}}"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="{{URL::asset("assets/plugins/back-to-top.html")}}"></script>
<script type="text/javascript" src="{{URL::asset("assets/plugins/smoothScroll.html")}}"></script>
<!-- JS Customization -->
<script type="text/javascript" src="{{URL::asset("assets/js/custom.html")}}"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="{{URL::asset("assets/js/app.html")}}"></script>
<script type="text/javascript" src="{{URL::asset("assets/js/plugins/style-switcher.html")}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        StyleSwitcher.initStyleSwitcher();
    });
</script>
<!--[if lt IE 9]>
<script src="assets/plugins/respond.js"></script>
<script src="assets/plugins/html5shiv.js"></script>
<script src="assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->
</body>

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.5/page_404_error6.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2016 06:12:47 GMT -->
</html>
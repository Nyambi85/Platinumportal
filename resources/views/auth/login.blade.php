<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.5/page_login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2016 06:12:41 GMT -->
<head>
    <title> Log in | Career </title>

    @include('layouts.appRegisterHeader')

</head>

<body>
<!--=== Content Part ===-->
<div class="container-fluid">
    <div class="row equal-height-columns">

        <div class="col-md-6 col-sm-6 hidden-xs image-block equal-height-column"></div>

        <div class="col-md-6 col-sm-6 form-block equal-height-column">
            <a href="/">
                <!--<img src="assets/img/themes/logo1-blue.html" alt="">-->
            <img class="shrink-logo" src="{{URL::asset('assets/img/logo3-default.png')}}" alt="Logo">
            </a>

            <h2 class="margin-bottom-30">Login To Your Account</h2>
		{{ csrf_field() }}

                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="login-block">

                        <div class="input-group margin-bottom-20 ">

                            <span class="input-group-addon rounded-left"><i class="icon-user color-dark-blue"></i></span>
                            <input id="email" type="email" class="form-control rounded-right" placeholder="email" name="email" value="{{ old('email') }}" required autofocus>

                        </div>

                        <div class="input-group margin-bottom-20 ">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif

                        </div>

                        <div class="input-group margin-bottom-20 " >

                            <span class="input-group-addon rounded-left"><i class="icon-lock color-dark-blue"></i></span>
                            <input id="password" type="password" class="form-control rounded-right" placeholder="Password" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="checkbox">
                            <ul class="list-inline">
                                <li>
                                    <label style="color:#00008B">
                                        <input type="checkbox" > Remember me
                                    </label>
                                </li>

                                <li class="pull-right">
                                    <a href="{{ route('password.request') }}" style="color:#00008B">Forgot password?</a>
                                </li>
                            </ul>
                        </div>


                        <div class="row margin-bottom-70">
                            <div class="col-md-12 margin-bottom-20">
                                <button type="submit" class="btn-u btn-u-dark-blue btn-block rounded">Sign In</button>
                            </div>

                            <span class="text-center"><p>Don't have an account? <a href="{{ url('register') }}" style="color:#00008B">Sign up</a></p></span>

                        </div>

                    <!-- <div class="social-login ">
                            <div class="or rounded-x">Or</div>
                            <ul class="list-inline margin-bottom-20">
                                <li>
                                    <a href="{{url('/redirect')}}">
                                    <button  class="btn rounded btn-lg btn-facebook color-dark-blue">
                                        <i class="fa fa-facebook"></i> Facebook Sign in
                                    </button>
                                    </a>
                                </li>
                                <li>

                                    <button class="btn rounded btn-lg btn-google color-dark-blue">
                                        <i class="fa fa-google"></i> Google Sign in
                                    </button>
                                </li>
                            </ul>


                        </div>-->

                    </div>
                </form>

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
        2018 &copy; All Rights Reserved. Powered by <a href="#" style="color: #00008b">Platinum credit</a>
    </p>
</div>
<!--=== End Sticky Footer ===-->

<!-- JS Global Compulsory -->
<script src="{{URL::asset('assets/plugins/jquery/jquery.min.html')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery/jquery-migrate.min.html')}}"></script>
<script src="{{URL::asset('assets/plugins/bootstrap/js/bootstrap.min.html')}}"></script>

<!-- JS Implementing Plugins -->
<script src="{{URL::asset('assets/plugins/back-to-top.html')}}"></script>
<script src="{{URL::asset('assets/plugins/backstretch/jquery.backstretch.min.html')}}"></script>

<!-- JS Customization -->
<script src="{{URL::asset('assets/js/custom.html')}}"></script>

<!-- JS Page Level -->
<script src="{{URL::asset('assets/js/app.html')}}"></script>
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
<script src="assets/plugins/respond.js"></script>
<script src="assets/plugins/html5shiv.js"></script>
<script src="assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->
</body>

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.5/page_login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2016 06:12:41 GMT -->
</html>

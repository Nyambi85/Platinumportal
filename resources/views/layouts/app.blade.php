<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>


    <title>{{ config('app.name', 'Laravel') }}</title>

@include('layouts/Header')
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css') }}">


<!-- Styles --
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
</head>
<body class="header-fixed">
<div class="wrapper page-option-v1">

    <!--=== Header v6 ===-->
    <div class="header-v6 header-white-transparent header-sticky">
        <!-- Navbar -->
        <div class="navbar mega-menu" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="menu-container">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Navbar Brand -->
                    <div class="navbar-brand">
                        <a href="/">
                            <img class="default-logo" src="{{URL::asset('assets/img/logo3-default.png')}}" alt="Logo">
                            <img class="shrink-logo" src="{{URL::asset('assets/img/logo3-default.png')}}" alt="Logo">
                        </a>
                    </div>
                    <!-- ENd Navbar Brand -->


                    <!-- Header Inner Right -->
                    <div class="header-inner-right">
                        <ul class="menu-icons-list">
                            <!--<li class="menu-icons shopping-cart">
                                <i class="menu-icons-style fa fa-ellipsis-h"></i>



                                    <div class="shopping-cart-open ">
                                        <span class="shc-title">Account</span>
                                        <ul >
                                            <li>
                                                <!--<span class="shc-title"><a href="{{ url('register') }}">reset password</a></span>--

                                            </li>

                                            <li>
                                               <!-- <span class="shc-title"><a href="{{ url('/logout') }}">Logout</a></span>--

                                            </li>
                                        </ul>


                                    </div>

                                    <div class="shopping-cart-open ">
                                        <span class="shc-title">Categories</span>
                                        <ul >
                                            <li >
                                                <span class="shc-title"><a href="/selectBussiness" >Agriculture</a></span>
                                            </li>
                                        </ul>
                                    </div>


                            </li>-->
                            <li class="menu-icons">
                                <i class="menu-icons-style search search-close search-btn fa fa-search"></i>
                                <div class="search-open">

                                    <input type="text" style="text-transform:lowercase" class="animated fadeIn form-control SearchControl" onkeyup="showResult(this.value)" placeholder="Start searching ...">
                                    <div class="SearchOption mega-menu-content disable-icons">
                                        <!--<ul class="Option list-unstyled equal-height-list">

                                        </ul>-->
                                    </div>

                                </div>

                            </li>

                        </ul>
                    </div>
                    <!-- End Header Inner Right -->
                </div>


                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <div class="menu-container">
                        <ul class="nav navbar-nav">
                            <!-- Home -->
                            <li class="dropdown active">
                                <a href="/" class="dropdown-toggle" data-toggle="dropdown" >
                                    Home
                                </a>

                            </li>
                            <!-- End Home -->

                            <!-- Corporate -->
                            <li class="dropdown mega-menu-fullwidth">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                    About us
                                </a>


                            </li>
                            <!-- End Pages -->


                            <!-- Portfolio -->
                            <li class="dropdown mega-menu-fullwidth">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                    Our Product
                                </a>

                            <!-- End Portfolio -->

                            <!-- Features -->
                            <li class="dropdown">
                                <a href="#" class="" data-toggle="">
                                    FAQ
                                </a>



                            </li>
                            <!-- End Features -->

                            <!-- Shortcodes -->
                            <li class="dropdown mega-menu-fullwidth">
                                <a href="#" class="dropdown-toggle" data-toggle="">
                                    Branches
                                </a>


                            </li>
                            <!-- End Shortcodes -->

                            <!-- Demo Pages -->
                            <li class="dropdown mega-menu-fullwidth pull-righ">

                                    <a class="cd-signin" href="blog" >
                                        Blog
                                    </a>


                            </li>
                            <!-- End Demo Pages -->




                        </ul>
                    </div>
                </div><!--/navbar-collapse-->
            </div>
        </div>
        <!-- End Navbar -->
    </div>
    <!--=== End Header v6 ===-->

    @yield('content')


    @include('layouts/footer')


    <div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
        <div class="cd-user-modal-container">
            <!-- this is the container wrapper 				<ul class="cd-switcher">
					<li><a href="javascript:void(0);">Login</a></li>
					<li><a href="javascript:void(0);">Register</a></li>
				</ul>

				<div id="cd-login"> <!-- log in form
									<form class="cd-form">
						<p class="social-login">
							<span class="social-login-facebook"><a href="#"><i class="fa fa-facebook"></i> Facebook</a></span>
							<span class="social-login-google"><a href="#"><i class="fa fa-google"></i> Google</a></span>
							<span class="social-login-twitter"><a href="#"><i class="fa fa-twitter"></i> Twitter</a></span>
						</p>

						<div class="lined-text"><span>Or use your account on Unify</span><hr></div>

						<p class="fieldset">
							<label class="image-replace cd-email" for="signin-email">E-mail</label>
							<input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
							<span class="cd-error-message">Error message here!</span>
						</p>

						<p class="fieldset">
							<label class="image-replace cd-password" for="signin-password">Password</label>
							<input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password">
							<a href="javascript:void(0);" class="hide-password">Hide</a>
							<span class="cd-error-message">Error message here!</span>
						</p>

						<p class="fieldset">
							<input type="checkbox" id="remember-me" checked>
							<label for="remember-me">Remember me</label>
						</p>

						<p class="fieldset">
							<input class="full-width" type="submit" value="Login">
						</p>
					</form>

					<p class="cd-form-bottom-message"><a href="javascript:void(0);">Forgot your password?</a></p>
					<!-- <a href="javascript:void(0);" class="cd-close-form">Close</a>
				</div> <!-- cd-login

				<div id="cd-signup"> <!-- sign up form
					<form class="cd-form">
						<p class="social-login">
							<span class="social-login-facebook"><a href="#"><i class="fa fa-facebook"></i> Facebook</a></span>
							<span class="social-login-google"><a href="#"><i class="fa fa-google"></i> Google</a></span>
							<span class="social-login-twitter"><a href="#"><i class="fa fa-twitter"></i> Twitter</a></span>
						</p>

						<div class="lined-text"><span>Or register your new account on Unify</span><hr></div>

						<p class="fieldset">
							<label class="image-replace cd-username" for="signup-username">Username</label>
							<input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
							<span class="cd-error-message">Error message here!</span>
						</p>

						<p class="fieldset">
							<label class="image-replace cd-email" for="signup-email">E-mail</label>
							<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
							<span class="cd-error-message">Error message here!</span>
						</p>

						<p class="fieldset">
							<label class="image-replace cd-password" for="signup-password">Password</label>
							<input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password">
							<a href="javascript:void(0);" class="hide-password">Hide</a>
							<span class="cd-error-message">Error message here!</span>
						</p>

						<p class="fieldset">
							<input type="checkbox" id="accept-terms">
							<label for="accept-terms">I agree to the <a href="page_terms.html">Terms</a></label>
						</p>

						<p class="fieldset">
							<input class="full-width has-padding" type="submit" value="Create account">
						</p>
					</form>

					<!-- <a href="javascript:void(0);" class="cd-close-form">Close</a>
				</div> <!-- cd-signup

				<div id="cd-reset-password"> <!-- reset password form -->
            <div class="container " >
                <div class="row">

                    <div class="col-md-6">
                        <div class="magazine-news-img PopImage" style="padding-top:20px">


                        </div>
                        <div class="headline"><h2>Contacts</h2></div>
                        <ul class="list-unstyled who margin-bottom-30">
                            <li class="add"><a href="#" class="address"><i class="fa fa-home"></i>210,Sinza B Street,Sinza Palestina</a></li>
                            <li class="addEmail"><a href="#" class="Email"><i class="fa fa-envelope"></i>info.agroexchange.co</a></li>
                            <li class="addphoneNumber"><a href="#" class="phoneNumber"><i class="fa fa-phone"></i>+255 713 595 057 | +255 783 123 735</a></li>
                            <li class="addwebPage"><a href="#" class="webPage"><i class="fa fa-globe"></i>http://www.agroexchange.co</a></li>
                        </ul>

                        <!-- Business Hours -->
                        <div class="headline"><h2>Business Hours</h2></div>
                        <ul class="list-unstyled margin-bottom-30">
                            <li><strong>Monday-Friday:</strong> 10am to 8pm</li>
                            <li><strong>Saturday:</strong> 11am to 3pm</li>
                            <li><strong>Sunday:</strong> Closed</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- cd-reset-password -->
        <a href="javascript:void(0);" class="cd-close-form">Close</a>
    </div> <!-- cd-user-modal-container -->
</div> <!-- cd-user-modal -->




</div>

<!-- Scripts -->
<meta name="_token" content="{!! csrf_token() !!}" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


<script src="{{ asset('js/app.js') }}"></script>
<!-- JS Global Compulsory -->
<script type="text/javascript" src="{{ URL::asset('assets/plugins/jquery/jquery.min.html') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/jquery/jquery-migrate.min.html') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.min.html') }}"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="{{ URL::asset('assets/plugins/back-to-top.html') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/smoothScroll.html') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/parallax-slider/js/modernizr.html')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/parallax-slider/js/jquery.cslider.html')}}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/flexslider/jquery.flexslider-min.html') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/fancybox/source/jquery.fancybox.pack.html') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/owl-carousel/owl-carousel/owl.carousel.html')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/modernizr.html')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.html')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/login-signup-modal-window/js/main.html')}}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.html') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.html') }}"></script>
<!-- JS Customization -->
<script src="{{ URL::asset('assets/plugins/login-signup-modal-window/js/main.html')}}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/custom.html') }}"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="{{ URL::asset('assets/js/app.html') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/plugins/fancy-box.html') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/plugins/style-switcher.html') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/plugins/owl-carousel.html')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/plugins/cube-portfolio/cube-portfolio-4.html')}}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/plugins/revolution-slider.html') }}"></script>
<script src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        FancyBox.initFancybox();
        StyleSwitcher.initStyleSwitcher();
        RevolutionSlider.initRSfullWidth();
    });

    $('.contact').click(function(){


        var task_id = $(this).attr('values');
        var obj = JSON.parse(task_id);
        //alert(obj.clienEmail);
        var web = 'http://www.agroexchange.co';

        $('.popsimage').remove();
        $('.address').remove();
        $('.Email').remove();
        $('.phoneNumber').remove();
        $('.webPage').remove();
        var address = '<a href="#" class="address"><i class="fa fa-home"></i>'+obj.physicalAddress+'</a>';
        var temp = '<img class="img-responsive popsimage" src="assets/img/agrImg/'+obj.frontWallImag+'" alt="">';
        var clientmail = '<a href="#" class="Email"><i class="fa fa-envelope"></i>'+obj.clientEmail+'</a>';
        var phone = '<a href="#" class="phoneNumber"><i class="fa fa-phone"></i>'+obj.telephoneNumber+'</a>'
        var webpage = '<a href="#" class="webPage"><i class="fa fa-globe"></i>'+web+'</a>'
        $('.PopImage').append(temp);
        $('.add').append(address)
        $('.addEmail').append(clientmail);
        $('.addphoneNumber').append(phone);
        $('.addwebPage').append(webpage);



    });

    function showResult(str) {
        var  txtInput = $('.SearchControl').val();
        //alert(txtInput);
        //$('.OptionChoice').remove();
        $('.Option').remove();
        $.ajaxSetup({

            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })


        if(txtInput && txtInput !== ''){

            $.ajax({
                type: 'POST',
                url:'/search' + txtInput,
                success: function (data) {

                    //alert(JSON.stringify(data));
                    // $("#task" + task_id).remove();
                    // $('.OptionChoice').remove();
                    var unOrderList = '<ul class="Option"></ul>';
                    $('.SearchOption').append(unOrderList);
                    for (var p=0; p<data.length; p++) {



                        if(data[p]['frontTitleHeader']){

                            var clientCode =data[p]['id'];

                            //alert(JSON.stringify(data[p]['frontTitleHeader']));
                            //var address = '<li class="OptionChoice"><a href="#" >'+data[p]['frontTitleHeader']+'</a><\li><hr />';
                            var address = '<li><a href="/ '+ clientCode +' moreClientDetails" >'+data[p]['frontTitleHeader']+'</a></li>';
                            $('.Option').append(address);
                        }

                    }

                },
                error: function (data) {
                    alert('There are an error');
                    //console.log('Error:', data);
                }
            })
        }

    }




</script>
<!--[if lt IE 9]>
<script src="{{ asset('assets/plugins/respond.js') }}"></script>
<script src="{{ asset('assets/plugins/html5shiv.js') }}"></script>
<script src="{{ asset('assets/plugins/placeholder-IE-fixes.js') }}"></script>
<![endif]-->
</body>
</html>
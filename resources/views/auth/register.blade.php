<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->


<head>
    <title> Regsitration | Career </title>

    @include('layouts.appRegisterHeader')

</head>



<body>
<!--=== Content Part ===-->
<div class="container-fluid">
    <div class="row equal-height-columns">



        <div class="col-md-6 col-sm-6 hidden-xs image-block equal-height-column"></div>


        <div class="col-md-6 col-sm-6 form-block equal-height-column">

        <form  method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="reg-block">

                <a href="\">
                    <img src="{{URL::asset('assets/img/logo3-default.png')}}" alt="">
                </a>
		
	

                <h2 class="margin-bottom-30">Create new account</h2>


		 <h5 style="color: #00008b"><a style="color: #00008b" href="home">i have account</a></h5>

                <div class=" form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon rounded-left"><i class="icon-pencil color-dark-blue"></i></span>
                        <input id="name" type="text" class="form-control rounded-right" placeholder="Your name"  name="name" value="{{ old('name') }}" required autofocus>
                    </div>

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif

                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                    <div class="input-group margin-bottom-20">
                    <span class="input-group-addon rounded-left"><i class="icon-envelope color-dark-blue"></i></span>
                    <input id="email" type="email" class="form-control rounded-right" placeholder="Your email"  name="email" value="{{ old('email') }}" required>
                    </div>
		    <lable style="color: #00008b">For Platinumcredit staff, Please use your offical mail</lable>
                    @if ($errors->has('email'))
                        <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="input-group margin-bottom-20">
                    <span class="input-group-addon rounded-left"><i class="icon-lock color-dark-blue"></i></span>
                    <input type="password" class="form-control rounded-right" placeholder="Password" name="password" id="password"  required>
                        </div>

                    @if ($errors->has('password'))
                        <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                </div>



                <div class="form-group{{ $errors->has('password-confirm') ? ' has-error' : '' }}">
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon rounded-left"><i class="icon-lock color-dark-blue"></i></span>
                        <input type="password" class="form-control rounded-right" placeholder="Confirm Password" name="password_confirmation" id="password-confirm"  required>
                    </div>


                </div>


                <div class="checkbox margin-bottom-30">
                    <label>
                        <input type="checkbox"> I agree to terms &amp; conditions
                    </label>

                    <label>
                        <input type="checkbox"> Subscribe to our newsletter
                    </label>
                </div>

                <button type="submit" class="btn-u btn-u-dark-blue btn-block rounded">Create new</button>


            </div>

        </form>

        </div>

    </div>

</div><!--/container-->
<!--=== End Content Part ===-->

<!--=== Sticky Footer ===-->
<div class="container sticky-footer">
    <ul class="list-unstyled list-inline social-links margin-bottom-30">
        <li><a href="#"><i class="icon-custom icon rounded-x icon-bg-dark-blue fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="icon-custom icon rounded-x icon-bg-dark-blue fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="icon-custom icon rounded-x icon-bg-dark-blue fa fa-linkedin"></i></a></li>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/plugins/sweetalert.min.js')}}"></script>
<!-- JS Customization -->
<script src="{{URL::asset('assets/js/custom.html')}}"></script>

<!-- JS Page Level -->
<script src="{{URL::asset('assets/js/app.html')}}"></script>
<script>
    jQuery(document).ready(function() {
        App.init();
    });

window.onload = function() {



        var test = {!! json_encode($parameters['data']) !!};

        @if($parameters['errorNote'] == 'success'){


        swal({
            title: "Ok!",
            text: "We have successfully save your personal details, proceed next Tab!",
            icon: "success",
        });




        }@elseif($parameters['errorNote'] == 'notification'){

            @if($parameters['tabData'] == 'NotPCLStaff'){


                    swal({
                        title: "Sorry!",
                        text: "We could not find your mail : " + test + "\n from PCL Staff Mail list, Please use your official mail to register",
                        icon: "error",
                        dangerMode: true,
                    });

                }@endif
           

       }@endif


    }




</script>
<script>
    $(".image-block").backstretch([
        "assets/img/bg/img6.jpg",
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

</html>

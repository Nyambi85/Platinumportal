<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.5/shortcode_accordion_and_tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2016 06:13:01 GMT -->
<head>
    <title> Career | Admin Main </title>


    <!-- CSS Global Compulsory -->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{URL::asset('assets/img/logo3-default.png')}}">

    <!-- Web Fonts -->
    <link rel="stylesheet" href="../../../fonts.googleapis.com/css0bd2.css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/headers/header-default.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/footers/footer-v1.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">



    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/animate.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/line-icons/line-icons.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css')}}">
    <!--[if lt IE 9]><link rel="stylesheet" href="{{URL::asset('assets/plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css')}}"><![endif]-->

    <!-- CSS Theme -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/theme-colors/default.css')}}" id="style_color">
    <link rel="stylesheet" href="{{URL::asset('assets/css/theme-skins/dark.css')}}">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/custom.css')}}">


</head>

<body>
<div class="wrapper">





    <!--=== Header ===-->
@include('layouts.headerNav')
<!--=== End Header ===-->

    <!--=== Content Part ===-->
    <div class="container content">



        <div class="row">
            <!-- Begin Sidebar Menu -->
            <div class="col-md-3">
                <!--<ul class="list-group sidebar-nav-v1" id="sidebar-nav">
                    <li class="list-group-item list-toggle">
                        <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-typography">Personal Details</a>
                        <ul id="collapse-typography" class="collapse">
                            <li><a href=""> Persnal Information</a></li>
                            <li><a href=""> Persnal Contact detaisl</a></li>
                            <li>
                                <a href="/manageClient">Residential Address</a>
                            </li>
                            <li>
                                <a href="/manageClient">Postal Address</a>
                            </li>
                        </ul>
                    </li>
                    <li class="list-group-item list-toggle">
                        <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-buttons">Employment Requirements</a>
                        <ul id="collapse-buttons" class="collapse">
                            <li><a href="/CreateArtcle">Create Articles</a></li>
                            <li>
                                <a href="/manageArticle">Manage Articel</a>
                            </li>
                        </ul>
                    </li>
                    <li class="list-group-item list-toggle">
                        <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-buttons1">Education</a>
                        <ul id="collapse-buttons1" class="collapse">
                            <li><a href="/AdminStory">Create Page Story</a></li>
                            <li>
                                <a href="/managePagestory">Manage PageStory</a>
                            </li>
                        </ul>
                    </li>
                    <li class="list-group-item list-toggle">
                        <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-buttons2">Addition Info</a>
                        <ul id="collapse-buttons2" class="collapse">
                            <li><a href="/CreateTips">Create tips</a></li>
                            <li>
                                <a href="#">Manage tips</a>
                            </li>
                        </ul>
                    </li>
                    <li class="list-group-item list-toggle">
                        <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-buttons3">Employment History</a>
                        <ul id="collapse-buttons3" class="collapse">
                            <li><a href="/CreateEvent">Create Events</a></li>
                            <li>
                                <a href="#">Manage Events</a>
                            </li>
                        </ul>
                    </li>
                    <li class="list-group-item list-toggle">
                        <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-buttons3">Manage System Setting</a>
                        <ul id="collapse-buttons3" class="collapse">
                            <li><a href="shortcode_btn_general.html">Upload Package</a></li>
                            <li>
                                <a href="shortcode_btn_brands.html">Configure System</a>
                            </li>

                        </ul>
                    </li>
                </ul>-->
            </div>



            <!-- Begin Content -->
            <div class="col-md-9">
                <!-- Tabs -->
                <div class="tab-v1" >
                    <ul class="nav nav-tabs" >
                        <li class="active"><a href="#home-1" data-toggle="tab">Profile Details</a></li>
                    </ul>
                    <div class="tab-content">
                        <!-- Datepicker Forms -->
                        <footer class="tab-pane fade in active" id="home-1">
                            <form  method="POST" action="{{ route('user.editProfile' ) }}"  class="sky-form" enctype="multipart/form-data">

                                <header>Personal Details</header>
                                {{ csrf_field() }}

                                <fieldset>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label">First name</label>
                                            <label class="input">
                                                <i class="icon-append fa fa-asterisk"></i>
                                                <input type="text" name="firstName" id="firstName">
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label">Middle name</label>
                                            <label class="input">
                                                <i class="icon-append fa fa-asterisk"></i>
                                                <input type="text" name="middleName" id="middleName">
                                            </label>
                                        </section>
                                    </div>

                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label">Surname</label>
                                            <label class="input">
                                                <i class="icon-append "></i>
                                                <input type="text" name="Surname" id="Surname">
                                            </label>
                                        </section>

                                        <div class="row">
                                            <label class="label">Passport Picture</label>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label for="file" class="input input-file">
                                                        <div class="btn-u btn-u-dark-blue button" style="background: darkblue">
                                                            <input class="btn-u btn-u-dark-blue"  type="file" id="passprtPicture"  onchange="this.parentNode.nextSibling.value = this.value">Browse</div><input type="text" readonly name="passprtPicture">
                                                    </label>
                                                </section>
                                            </div>
                                        </div>

                                        <input type="hidden" name="id" id="id" value="{{ Auth::user()->id }}">

                                    </div>

                                    <fieldset>
                                        <section>
                                            <label class="label">Permissions</label>
                                            <div class="row">

                                                @if(count($parameters['permission']) > 0)

                                                <div class="col col-4">

                                                    @for($i = 0; $i < 3; $i++)

                                                        <label class="checkbox"><input type="checkbox" name="check[]" value="{{$parameters['permission'][$i]->name}}"><i></i>{{$parameters['permission'][$i]->name}}</label>

                                                    @endfor

                                                </div>

                                                @endif

                                                @if(count($parameters['permission']) > 3)

                                                        <div class="col col-4">
                                                    @for($i = 3; $i < count($parameters['permission']); $i++)

                                                        <label class="checkbox"><input type="checkbox" name="check[]" value="{{$parameters['permission'][$i]->name}}"><i></i>{{$parameters['permission'][$i]->name}}</label>

                                                    @endfor
                                                        </div>

                                                @endif

                                                @if(count($parameters['permission']) > 6)

                                                        <div class="col col-4">
                                                    @for($i = 6; $i < 9; $i++)

                                                        <label class="checkbox"><input type="checkbox" name="check[]" value="{{$parameters['permission'][$i]->name}}"><i></i>{{$parameters['permission'][$i]->name}}</label>

                                                    @endfor
                                                            </div>

                                                @endif

                                                @if(count($parameters['permission']) > 9)

                                                        <div class="col col-4">
                                                    @for($i = 9; $i < 12; $i++)

                                                        <label class="checkbox"><input type="checkbox" name="check[]" value="{{$parameters['permission'][$i]->name}}"><i></i>{{$parameters['permission'][$i]->name}}</label>

                                                    @endfor
                                                    </div>

                                                @endif

                                            </div>
                                        </section>

                                    </fieldset>




                                </fieldset>

                                <footer>
                                    <button type="submit" class="btn-u btn-u-dark-blue" >Submit</button>
                                    <button type="button" class="btn-u btn-u-default" onclick="window.history.back();">Back</button>
                                </footer>

                            </form>
                        </footer>
                        <!-- End Datepicker Forms -->


                    </div>
                </div>
                <!-- End Tabs-->
            </div>
            <!-- End Content -->
        </div>
    </div><!--/container-->
    <!--=== End Content Part ===-->

    <!--=== Footer Version 1 ===-->
@include('layouts.footer')
<!--=== End Footer Version 1 ===-->
</div><!--/End Wrapepr-->



<!-- JS Global Compulsory -->
<script type="text/javascript" src="{{URL::asset('assets/plugins/jquery/jquery.min.html')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/jquery/jquery-migrate.min.html')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/bootstrap/js/bootstrap.min.html')}}"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="{{URL::asset('assets/plugins/back-to-top.html')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/smoothScroll.html')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
<script src="{{URL::asset('assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.html')}}"></script>
<script src="{{URL::asset('assets/plugins/sky-forms-pro/skyforms/js/jquery.maskedinput.min.html')}}"></script>
<script src="{{URL::asset('assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.html')}}"></script>
<script src="{{URL::asset('assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.html')}}"></script>


<!-- JS Customization -->
<script type="text/javascript" src="assets/js/custom.html"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="{{URL::asset('assets/js/app.html')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/plugins/sweetalert.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/forms/order.html')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/forms/review.html')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/forms/checkout.html')}}"></script>
<script type="text/javascript" src={{URL::asset('assets/js/plugins/datepicker.html')}}></script>
<script type="text/javascript" src={{URL::asset('assets/js/plugins/validation.html')}}></script>
<script type="text/javascript" src="{{URL::asset('assets/js/plugins/style-switcher.html')}}"></script>
<script type="text/javascript">

    window.onload = function() {

            @if($parameters['errorNote'] == 'success'){


                swal({
                    title: "Ok!",
                    text: "We have successfully save your personal details, proceed next Tab!",
                    icon: "success",
                });


        }@elseif($parameters['errorNote'] == 'fail'){

                swal({
                    title: "Opps!",
                    text: "Something might have gone wrong, we fail to save your contact detail!",
                    icon: "error",
                    dangerMode: true,
                });



        }@endif
    }





    jQuery(document).ready(function() {
        App.init();
        OrderForm.initOrderForm();
        ReviewForm.initReviewForm();
        CheckoutForm.initCheckoutForm();
        StyleSwitcher.initStyleSwitcher();
    });
</script>
<!--[if lt IE 9]>
<script src="assets/plugins/respond.js"></script>
<script src="assets/plugins/html5shiv.js"></script>
<script src="assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->
</body>

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.5/shortcode_accordion_and_tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2016 06:13:01 GMT -->
</html>

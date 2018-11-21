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

            <div class="clearfix margin-bottom-100">

                <!--Blog Post-->
                <div class="blog margin-bottom-40">


                    <form action="{{ route('job.jobStore') }}" class="sky-form" enctype="multipart/form-data" >

                        <fieldset >

                            <div class="row">

                                <section class="col col-6">
                                    <label class="label">Job </label>
                                    <label class="input">
                                        <i class="icon-append fa fa-asterisk"></i>
                                        <input type="text" name="Job" id="Job">
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="label">Description</label>
                                    <label class="textarea" >
                                        <textarea rows="3" name="jobShortDesc" id="jobShortDesc"></textarea>
                                    </label>
                                    </label>
                                </section>
                            </div>


                                <div class="row">

                                    <section class="col col-6">
                                        <label class="input">
                                            <i class="icon-append fa fa-calendar"></i>
                                            <input type="text" name="finish" id="finish" placeholder="Expire date">
                                        </label>
                                    </section>


                                </div>

                            <div class="row">

                                <section class="col col-6">
                                    <label class="label">Aptitude test Name</label>
                                    <label class="input">
                                        <i class="icon-append fa fa-asterisk"></i>
                                        <input type="text" name="aptitudeName" id="aptitudeName">
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="label">Aptitude test Link</label>
                                    <label class="input">
                                        <i class="icon-append fa fa-asterisk"></i>
                                        <input type="text" name="aptitudeLink" id="aptitudeLink">
                                    </label>
                                </section>


                            </div>


                            <section>
                                <label for="file" class="input input-file">
                                    <div class="btn-u btn-u-dark-blue button" style="background: darkblue">
                                        <input class="btn-u btn-u-dark-blue"  type="file" id="jobDescriptionDoc"  onchange="this.parentNode.nextSibling.value = this.value">Browse</div><input type="text" readonly name="jobDescriptionDoc"  placeholder="Upload Job Description">
                                </label>
                            </section>


                        </fieldset>

                        <footer>
                            <button type="submit" class="btn-u btn-u-dark-blue">Submit</button>
                            <button type="button" class="btn-u btn-u-default" onclick="window.history.back();">Back</button>
                        </footer>

                    </form>


                </div>
                <!--End Blog Post-->


                <!-- Begin Content -->
                <div class="col-md-9 ">


                </div>
                <!-- End Content -->
            </div>
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
                    text: "We have successfully post the Job",
                    icon: "success",
                });



        }@elseif($parameters['errorNote'] == 'fail'){

                swal({
                    title: "Opps!",
                    text: "Something might have gone wrong, we fail to post the Job!",
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
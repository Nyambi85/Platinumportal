<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.5/shortcode_accordion_and_tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2016 06:13:01 GMT -->
<head>
    <title> Career | Admin Main </title>


    <!-- CSS Global Compulsory -->
    @include('layouts.HeaderLogin2')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">


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


                 <!--   <div class=" input-group margin-bottom-20 " >
                        <h3><a href="#" style="color:#00008B"> Kindly proceed for Aptitude test</a> </h3>
                    </div>-->


                    <form action="{{ route('user.applay' ) }}" method="POST" id="sky-form1" class="sky-form" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <fieldset>



                            <div class="row">
                                <section >
                                    <label for="file" class="input input-file">
                                        <div class="btn-u btn-u-dark-blue button" style="background: darkblue">
                                            <input type="file" name="FrontFile" id="file" onchange="this.parentNode.nextSibling.value = this.value">Browse</div><input type="text" name="FrontFile" placeholder="Pleas attach your cover letter" readonly>

                                    </label>
                                </section>
                            </div>

                            <input type="hidden" name="jobid" id="jobid" value="{{$parameters['jobID']}}">


                        </fieldset>



                        <footer>
                            <button type="submit" class="btn-u btn-u-dark-blue">Submit</button>
                            <button type="button" class="btn-u btn-u-default" onclick="window.history.back();">Back</button>
                        </footer>
                    </form>


                </div>
                <!--End Blog Post-->


                <!-- Begin Content -->
                <div class="col-md-9 margin-bottom-100">


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
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="{{URL::asset('assets/plugins/back-to-top.html')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/smoothScroll.html')}}"></script>
<!-- JS Customization -->
<script type="text/javascript" src="assets/js/custom.html"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="{{URL::asset('assets/js/app.html')}}"></script>
<script type="text/javascript" src="assets/js/plugins/style-switcher.html"></script>
<script type="text/javascript">

    window.onload = function() {


        @if($parameters['errorNote'] == 'success'){



                swal({
                    title: "Great!",
                    text: "We have sent aptitude test to your mail, your required to attempt to complete application!",
                    icon: "success",
                });


        }@elseif($parameters['errorNote'] == 'fail'){


                swal({
                    title: "Opps!",
                    text: "Something might have gone wrong, we fail to post your application. Kindly retry !",
                    icon: "error",
                    dangerMode: true,
                });


        }@endif
    }



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

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.5/shortcode_accordion_and_tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2016 06:13:01 GMT -->
</html>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.5/shortcode_accordion_and_tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2016 06:13:01 GMT -->
<head>
    <title> Career | Admin Main </title>


    <!-- CSS Global Compulsory -->
    @include('layouts.HeaderLogin2')


</head>

<body>
<div class="wrapper">
    <!--=== Header ===-->
@include('layouts.headerNav')
<!--=== End Header ===-->


    <!--=== Content Part ===-->
    <div class="container content profile">

        <div class="row">






            <div class="col-md-9">
                <div class="profile-body">
                    <!--=== Content Part ===-->
                    <div class="row margin-bottom-10">

                        <form action="{{ route('cvPage.personalDetails') }}" method="post"  class="sky-form" enctype="multipart/form-data">


                            <footer class="tab-pane fade in active" id="home-1">

                                <header>Details</header>
                                {{ csrf_field() }}

                                <fieldset>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label"><b>Job : </b></label>
                                            <label class="input">
                                                <i class="icon-append fa fa-asterisk"></i>
                                                <input type="text" name="jobTitle" id="jobTitle" placeholder="{{$parameters['job']->jobTitle}}">
                                            </label>
                                        </section>

                                    </div>
                                    <div class="row">

                                        <section class="col col-6">
                                            <label class="label"><b>Description : </b></label>
                                            <label class="textarea" >
                                                <textarea rows="3" name="jobDescription" id="jobDescription" placeholder="{{$parameters['job']->jobDescription}}"></textarea>
                                            </label>

                                        </section>

                                    </div>

                                    <div class="row">
                                        <iframe src="{{URL::asset('assets/img/VacancyAnnouncement.pdf')}}" style="width:100%; height:800px;" frameborder="0"></iframe>


                                    </div>

                                </fieldset>



                            </footer>

                            <footer>
                                <button type="submit" class="btn-u btn-u-dark-blue">Submit</button>
                                <button type="button" class="btn-u btn-u-default" onclick="window.history.back();">Back</button>
                            </footer>

                        </form >
                    </div>
                </div>
            </div>
        </div>
    </div>



</div><!--/container-->
<!--=== End Content Part ===-->
</div><!--/End Wrapepr-->



<!-- JS Global Compulsory -->
<script type="text/javascript" src="{{URL::asset('assets/plugins/jquery/jquery.min.html')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/jquery/jquery-migrate.min.html')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/bootstrap/js/bootstrap.min.html')}}"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="{{URL::asset('assets/plugins/back-to-top.html')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/smoothScroll.html')}}"></script>
<!-- JS Customization -->
<script type="text/javascript" src="assets/js/custom.html"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="{{URL::asset('assets/js/app.html')}}"></script>
<script type="text/javascript" src="assets/js/plugins/style-switcher.html"></script>
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

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.5/shortcode_accordion_and_tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2016 06:13:01 GMT -->
</html>
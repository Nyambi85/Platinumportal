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
    <div class="container content">
        <div class="row">

            <div class="clearfix margin-bottom-100">

                <!--Blog Post-->
                <div class="blog margin-bottom-100">


                    <!--Table Striped-->
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Job </th>
                            <th class="hidden-sm">Job Description</th>
                            <th>Uploder</th>
                            <th>Upload Date</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody {{$i = 0}}>

                        @foreach($jobs as $job)

                            <tr>
                                <td>{{$i = $i + 1 }}</td>
                                <td><a href="viewJob/{{$job->id}}">{{$job->jobTitle }}</a></td>
                                <td class="hidden-sm"><p>{{$job->jobDescription }}</p></td>
                                <td><a href="/users/1">{{$job->name }}</a></td>
                                <td>{{$job->created_at }}</td>


                                <td><span class="label label-success">Active</span></td>
                            </tr>

                        @endforeach


                        </tbody>
                    </table>


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
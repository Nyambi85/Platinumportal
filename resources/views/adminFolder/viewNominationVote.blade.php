<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.5/shortcode_accordion_and_tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2016 06:13:01 GMT -->
<head>
    <title> Career | View nomination </title>


    <!-- CSS Global Compulsory -->
    @include('layouts.HeaderLogin2')
    <link href="{{URL::asset('assets/Ela/css/helper.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/Ela/css/style.css')}}" rel="stylesheet">

</head>

<body>
<div class="wrapper">
    <!--=== Header ===-->
@include('layouts.headerNav')
<!--=== End Header ===-->


    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row">

            <!-- Begin Content -->
            <div class="col-md-9">
                <!-- Tabs -->
                <div class="tab-v1">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#home-1" data-toggle="tab">Nomination Vote</a></li>
                    </ul>
                    <div class="tab-content">
                        <!-- Success Forms -->
                        <div class="tab-pane fade in active" id="home-1">
                            <form action="postnominationForm" method="post"
                                  class="sky-form" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <header>Employee of Month </header>



                                @foreach($parameters['data'] as $nominee)

                                    <fieldset >
                                        <div class="row">
                                            <section class="col col-6">
                                                <label class="label">Nominee’s name  : <b>{{$nominee->nomineeName}}</b></label>

                                            </section>
                                            <section class="col col-6">
                                                <label class="label">Nominee’s Mail : <b>{{$nominee->nomineeEmail}} </b></label>
                                            </section>
                                        </div>

                                        <div class="row">
                                            <section class="col col-6">
                                                <label class="label">Job title : <b>{{$nominee->nomineeTitle}}</b></label>
                                            </section>
                                            <section class="col col-6">
                                                <label class="label">Department : <b> {{$nominee->departmentName}} </b></label>

                                            </section>

                                        </div>


                                        <fieldset>
                                            <header>Nomination Criteria</header>
                                            <br/>
                                            <div class="row">
                                                {{ csrf_field() }}
                                                <section>
                                                    <label class="label">Describe  how the nominee demonstrates excellence  in the area of
                                                        <strong> Teamwork </strong>,  give specific examples: <p style="color: #000000">{{$nominee->teamworkCriteria}}</p></label>
                                                    <label for="file" class="textarea">

                                                    </label>

                                                </section>

                                            </div>
                                            <div class="row">

                                                <section>
                                                    <label class="label">Describe  how the nominee demonstrates excellence  in the area of
                                                        <strong>  performance commitment and productivity, </strong>give specific examples: <p style="color: #000000">{{$nominee->perfomanceCriteria}}</p>  </label>
                                                </section>

                                            </div>
                                            <div class="row">

                                                <section>
                                                    <label class="label">Describe  how the nominee demonstrates excellence in the area of
                                                        <strong> general conduct/behavior at work, </strong>give specific examples: <p style="color: #000000">{{$nominee->generlaCoonductCriteria}}</p></label>

                                                </section>

                                            </div>

                                            <div class="row">

                                                <section>
                                                    <label class="label">Describe  how the nominee demonstrates excellence in the area of
                                                        <strong>  Customer Service, </strong>give specific examples:   <p style="color: #000000">{{$nominee->customerServiceCriteria}}</p></label>

                                                </section>

                                            </div>

                                            <div class="row">

                                                <section>
                                                    <label class="label">List <strong>outstanding accomplishments </strong> : <p style="color: #000000">{{$nominee->accomplishmentCriteria}}</p></label>

                                                </section>

                                            </div>

                                        </fieldset>


                                    </fieldset>

                                @endforeach





                            </form>
                            <!--/ Success states for elements -->
                        </div>
                        <!-- End Success Forms -->
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




<script src="{{URL::asset('assets/Ela/js/lib/datatables/datatables.min.js')}}"></script>
<script src="{{URL::asset('assets/Ela/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/Ela/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/Ela/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/Ela/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/Ela/js/lib/datatables/datatables-init.js')}}"></script>




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

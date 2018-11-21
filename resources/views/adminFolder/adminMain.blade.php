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


            <!-- Begin Content -->
            <div class="col-md-12 ">


                <!-- Tab v2 -->
                <div class="tab-v2">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#home-1" data-toggle="tab" style="color: #00008b;">Home</a></li>
                        <li><a href="#messages-1" data-toggle="tab" style="color: #00008b;">Manage System</a></li>
                        <!--<li><a href="#messages-1" data-toggle="tab">Messages</a></li>
                        <li><a href="#settings-1" data-toggle="tab">Settings</a></li>-->
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="home-1">


                            <!-- Accordion v1 -->
                            <div class="panel-group acc-v1" id="accordion-1">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-One" style="color: #00008b;" >
                                                Manage jobs
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-One" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img class="img-responsive" src="assets/img/main/img12.html" alt="">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                                                        <i class="icon-custom icon-sm rounded-x icon-bg-dark-blue fa fa-newspaper-o"></i>
                                                        <div class="content-boxes-in-v3">
                                                            <h3><a href="{{ route('job.viewJobs') }}" style="color: #00008b;">View Job</a></h3>
                                                            <p>View available jobs that have been uploaded on the platform</p>
                                                        </div>
                                                    </div>
                                                    <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                                                        <i class="icon-custom icon-sm rounded-x icon-bg-dark-blue fa fa-newspaper-o"></i>
                                                        <div class="content-boxes-in-v3">
                                                            <h3><a href="{{ route('job.jobCreate') }}" style="color: #00008b;"> Create Job</a> </h3>
                                                            <p>Create new jobs on the platform</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-Two" style="color: #00008b;">
                                                Manage User
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-Two" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                                                        <i class="icon-custom icon-sm rounded-x icon-bg-dark-blue fa fa-newspaper-o"></i>
                                                        <div class="content-boxes-in-v3">
                                                            <h3><a href="{{ route('user.listUser') }}" style="color: #00008b;">View User</a></h3>
                                                            <p>List all user that are currently registered on the system</p>
                                                        </div>
                                                    </div>
                                                    <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                                                        <i class="icon-custom icon-sm rounded-x icon-bg-dark-blue fa fa-newspaper-o"></i>
                                                        <div class="content-boxes-in-v3">
                                                            <h3><a href="#" style="color: #00008b;"> Edit User</a> </h3>
                                                            <p>Edit users details information</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <img class="img-responsive" src="assets/img/main/img9.html" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-three" style="color: #00008b;">
                                                Manage Applicants
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-three" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img class="img-responsive" src="assets/img/masonry/blog4.html" alt="">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                                                        <i class="icon-custom icon-sm rounded-x icon-bg-dark-blue fa fa-newspaper-o"></i>
                                                        <div class="content-boxes-in-v3">
                                                            <h3><a href="{{ route('users.applicants') }}"style="color: #00008b;">View Applicant</a></h3>
                                                            <p>View registered applicant on the Platinum Career portal</p>
                                                        </div>
                                                    </div>
                                                    <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                                                        <i class="icon-custom icon-sm rounded-x icon-bg-dark-blue fa fa-newspaper-o"></i>
                                                        <div class="content-boxes-in-v3">
                                                            <h3><a href="#" style="color: #00008b;"> Edit Applicant</a> </h3>
                                                            <p>View and edit applicant details from the system</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Accordion v1 -->


                        </div>
                        <div class="tab-pane fade in" id="profile-1">

                            <!--Table Striped-->
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th class="hidden-sm">Last Name</th>
                                    <th>Username</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td class="hidden-sm">Otto</td>
                                    <td>@mdo</td>
                                    <td><span class="label label-warning">Expiring</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td class="hidden-sm">Thornton</td>
                                    <td>@fat</td>
                                    <td><span class="label label-success">Success</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td class="hidden-sm">the Bird</td>
                                    <td>@twitter</td>
                                    <td><span class="label label-danger">Error!</span></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>htmlstream</td>
                                    <td class="hidden-sm">Web Design</td>
                                    <td>@htmlstream</td>
                                    <td><span class="label label-info">Pending..</span></td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="tab-pane fade in" id="messages-1">

                            <!-- Accordion v1 -->
                            <div class="panel-group acc-v1" id="accordion-1">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-One" style="color: #00008b;">
                                                Manage Permision
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-One" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img class="img-responsive" src="assets/img/main/img12.html" alt="">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                                                        <i class="icon-custom icon-sm rounded-x icon-bg-dark-blue fa fa-newspaper-o"></i>
                                                        <div class="content-boxes-in-v3">
                                                            <h3><a href="{{ route('permission.view') }}" style="color: #00008b;">View Permision</a></h3>
                                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                        </div>
                                                    </div>
                                                    <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                                                        <i class="icon-custom icon-sm rounded-x icon-bg-dark-blue fa fa-newspaper-o"></i>
                                                        <div class="content-boxes-in-v3">
                                                            <h3><a href="{{ route('permission.add') }}" style="color: #00008b;"> Create Permision</a> </h3>
                                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-five" style="color: #00008b;">
                                                Manage Employee nomination
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-five" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                                                        <div class="content-boxes-in-v3">
                                                         <!-- Accordion v1 -->
                            <div class="panel-group acc-v1" id="accordion-1">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-One" style="color: #00008b;" >
                                                The <strong>1st </strong> race for Employee of the month is now open
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-One" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                                                        <i class="icon-custom icon-sm rounded-x icon-bg-dark-blue fa fa-user"></i>
                                                        <div class="content-boxes-in-v3">
                                                            <h3><a  style="color: #00008b;">Leading Candidate</a></h3>
                                                            <p>Name : <b>{{$parameters['nominationData']['leadingCandidateName']}}</b></p>
                                                            <p>Email : <b>{{$parameters['nominationData']['leadingCandidateMail']}}</b></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                                                        <div class="content-boxes-in-v3">
                                                            <h3><a style="color: #00008b;">Vote :</a></h3>
                                                            <p>Leading Votes : <b>{{$parameters['nominationData']['numberOfVote']}}</b></p>
                                                            <p>Total Vote : <b>{{$parameters['nominationData']['totalVote']}}</b></p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                <div class="col-md-3">
                                                    <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                                                        <i class="icon-custom icon-sm rounded-x icon icon-layers icon-bg-dark-blue"></i>
                                                        <div class="content-boxes-in-v3">
                                                            <h3><a href="/viewNominatio" style="color: #00008b;"> list of nomination vote</a> </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                                                        <i class="icon-custom icon-sm rounded-x icon icon-layers icon-bg-dark-blue"></i>
                                                        <div class="content-boxes-in-v3">
                                                            <h3><a style="color: #00008b;">View all votes</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                                                        <i class="icon-custom icon-sm rounded-x icon-bg-dark-blue fa fa-close"></i>
                                                        <div class="content-boxes-in-v3">
                                                            <h3><a style="color: #00008b;">Close the race</a></h3>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--<div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-Two" style="color: #00008b;">
                                                Manage User
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-Two" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                                                        <i class="icon-custom icon-sm rounded-x icon-bg-dark-blue fa fa-newspaper-o"></i>
                                                        <div class="content-boxes-in-v3">
                                                            <h3><a href="{{ route('user.listUser') }}" style="color: #00008b;">View User</a></h3>
                                                            <p>List all user that are currently registered on the system</p>
                                                        </div>
                                                    </div>
                                                    <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                                                        <i class="icon-custom icon-sm rounded-x icon-bg-dark-blue fa fa-newspaper-o"></i>
                                                        <div class="content-boxes-in-v3">
                                                            <h3><a href="#" style="color: #00008b;"> Edit User</a> </h3>
                                                            <p>Edit users details information</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <img class="img-responsive" src="assets/img/main/img9.html" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->


                               <!-- <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-three" style="color: #00008b;">
                                                Manage Applicants
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-three" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img class="img-responsive" src="assets/img/masonry/blog4.html" alt="">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                                                        <i class="icon-custom icon-sm rounded-x icon-bg-dark-blue fa fa-newspaper-o"></i>
                                                        <div class="content-boxes-in-v3">
                                                            <h3><a href="{{ route('users.applicants') }}"style="color: #00008b;">View Applicant</a></h3>
                                                            <p>View registered applicant on the Platinum Career portal</p>
                                                        </div>
                                                    </div>
                                                    <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                                                        <i class="icon-custom icon-sm rounded-x icon-bg-dark-blue fa fa-newspaper-o"></i>
                                                        <div class="content-boxes-in-v3">
                                                            <h3><a href="#" style="color: #00008b;"> Edit Applicant</a> </h3>
                                                            <p>View and edit applicant details from the system</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                            <!-- End Accordion v1    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>-->
                               </div>
                                    </div>
                                         <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                                              <i class="icon-custom icon-sm rounded-x icon-bg-dark-blue fa fa-newspaper-o"></i>
                                                  <div class="content-boxes-in-v3">
                                                            <h3><a href="#"> Publish Nomination results</a> </h3>
                                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <img class="img-responsive" src="assets/img/main/img9.html" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Accordion v1 -->

                        </div>
                        <div class="tab-pane fade in" id="settings-1">
                            <h4>Heading Sample 4</h4>
                            <p><img alt="" class="pull-right rgt-img-margin img-width-200" src="assets/img/main/img23.html"> Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum ullamcorper. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, consectetur id. Donec eget orci metus, ac adipiscing nunc. <strong>Pellentesque fermentum</strong>, ante ac interdum ullamcorper. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum ullamcorper.</p>
                        </div>
                    </div>
                </div>
                <!-- End Tab v2 -->
                <div class="clearfix margin-bottom-60"></div>
                <div class="margin-bottom-60"></div>


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

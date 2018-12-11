<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Platinum | admin view</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">

    <link href="{{URL::asset('assets/css/lib/chartist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/lib/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/css/lib/owl.theme.default.min.css')}}" rel="stylesheet" />
    <!-- Bootstrap Core CSS -->
    <!-- Custom CSS -->
    <link href="{{URL::asset('assets/css/helper.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/style2.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->


</head>

<body class="fix-header fix-sidebar">



<!-- Preloader - style you can find in spinners.css -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- Main wrapper  -->
<div id="main-wrapper">
    <!-- header header  -->
    <div class="header">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <!-- Logo -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">
                    <!-- Logo icon -->
                    <b><img src="{{URL::asset('assets/img/logo3-default.png')}}" alt="homepage" class="dark-logo" /></b>
                    <!--End Logo icon -->
                    <!-- Logo text
                    <span><img src="images/logo-text.png" alt="homepage" class="dark-logo" /></span>-->
                </a>
            </div>
            <!-- End Logo -->
            <div class="navbar-collapse">
                <!-- toggle and nav items -->
                <ul class="navbar-nav mr-auto mt-md-0">
                    <!-- This is  -->
                    <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                    <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    <!-- Messages -->
                    <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th-large"></i></a>
                        <div class="dropdown-menu animated zoomIn">
                            <ul class="mega-dropdown-menu row">


                                <li class="col-lg-3  m-b-30">
                                    <h4 class="m-b-20">CONTACT US</h4>
                                    <!-- Contact -->
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Enter email"> </div>
                                        <div class="form-group">
                                            <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-info">Submit</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- End Messages -->
                </ul>
                <!-- User profile and search -->
                <ul class="navbar-nav my-lg-0">

                    <!-- Search -->
                    <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                        <form class="app-search">
                            <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                    </li>

                    <!-- Messages -->

                    <!-- End Messages -->
                    <!-- Profile -->
                    <li class="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/users/5.jpg" alt="user" class="profile-pic" /></a>
                        <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                            <ul class="dropdown-user">

                               <!-- <li><a href="#"><i class="ti-settings"></i> Setting</a></li>-->
                                <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End header header -->
    <!-- Left Sidebar  -->
    <div class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="nav-devider"></li>
                    <li class="nav-label"></li>
                    <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard <span class="label label-rouded label-primary pull-right">2</span></span></a>
                        <ul aria-expanded="false" class="collapse">
                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </div>
    <!-- End Left Sidebar  -->
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb --
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">Dashboard</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-md-3">
                    <div class="card bg-primary p-20">
                        <div class="media widget-ten">
                            <div class="media-left meida media-middle">
                                <span><i class="ti-bag f-s-40"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <h2 class="color-white">{{count($adminviewData['customerQuoterequest'])}}</h2>
                                <p class="m-b-0">Quote request</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-pink p-20">
                        <div class="media widget-ten">
                            <div class="media-left meida media-middle">
                                <span><i class="ti-comment f-s-40"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <h2 class="color-white">{{count($adminviewData['customerContactQuery'])}}</h2>
                                <p class="m-b-0">Contact request</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-success p-20">
                        <div class="media widget-ten">
                            <div class="media-left meida media-middle">
                                <span><i class="ti-vector f-s-40"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <h2 class="color-white">0</h2>
                                <p class="m-b-0">Page visit</p>
                            </div>
                        </div>
                    </div>
                </div>
               <!-- <div class="col-md-3">
                    <div class="card bg-danger p-20">
                        <div class="media widget-ten">
                            <div class="media-left meida media-middle">
                                <span><i class="ti-location-pin f-s-40"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <h2 class="color-white">278</h2>
                                <p class="m-b-0">Total Visitor</p>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-title">
                            <h4><a class="has-arrow  " href="/customerQuoteRequest" ><i class="fa fa-tachometer"></i>Quote request <span class="label label-rouded label-primary pull-right">{{count($adminviewData['customerQuoterequest'])}}</span></a></h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover ">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Customer Name</th>
                                        <th>Email</th>
                                        <th>Mobile number</th>
                                        <th>Requested product</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                        @for($i=0; $i< count($adminviewData['customerQuoterequest']); $i++)

                                            <tr  class="rowdata2" data-toggle="modal" data-toggle="modal" data-target="#exampleModalCenter2"  >
                                                <td>{{$adminviewData['customerQuoterequest'][$i]->id}}</td>
                                                <td>{{$adminviewData['customerQuoterequest'][$i]->requesterName}}</td>
                                                <td >{{$adminviewData['customerQuoterequest'][$i]->requesterEmail}}</td>
                                                <td >{{$adminviewData['customerQuoterequest'][$i]->requesterMobilenumber}}</td>
                                                <td>{{$adminviewData['customerQuoterequest'][$i]->requesterProduct}}</td>
                                                @if($adminviewData['customerQuoterequest'][$i]->quote_requests_status == 'pending')
                                                    <td><span class="badge badge-warning">Pending</span></td>
                                                @else
                                                    <td><span class="badge badge-success">Responded</span></td>
                                                @endif
                                            </tr>


                                        @endfor


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /# card -->
                </div>
                <!-- /# column -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-title">
                            <h4><a class="has-arrow  " href="/customerContactRequest" ><i class="fa fa-tachometer"></i>Customer Contact Requests <span class="label label-rouded label-primary pull-right">{{count($adminviewData['customerContactQuery'])}}</span></a></h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover ">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Customer Name</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Mobile number</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @for($i=0; $i< count($adminviewData['customerContactQuery']); $i++)

                                        <tr  class="rowdata" data-toggle="modal" data-toggle="modal" data-target="#exampleModalCenter" >
                                            <td>{{$i}}</td>
                                            <td>{{$adminviewData['customerContactQuery'][$i]->customerName}}</td>
                                            <td >{{$adminviewData['customerContactQuery'][$i]->subject}}</td>
                                            <td >{{$adminviewData['customerContactQuery'][$i]->message}}</td>
                                            <td>{{$adminviewData['customerContactQuery'][$i]->customerPhoneNumber}}</td>
                                            @if($adminviewData['customerContactQuery'][$i]->contact_requests_status == 'pending')
                                                <td><span class="badge badge-warning">Pending</span></td>
                                            @else
                                                <td><span class="badge badge-success">Responded</span></td>
                                            @endif

                                        </tr>


                                    @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

            </div>
            <!-- /# row -->




            <!-- End PAge Content -->
        </div>
        <!-- End Container fluid  -->




        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">

                            <label class="col-md-12"><strong>Customer Name : </strong><span class="modal-customer-name"></span></label>

                        </div>

                        <div class="row">

                            <label class="col-md-12"><strong>Product requested : </strong><span class="modalProductRequested"></span></label>

                        </div>

                        <div class="row">

                            <label class="col-md-12"><strong>Mobile number : </strong><span class="modalnumber"></span></label>

                        </div>


                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-Three">
                                        Respond
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-Three" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="row">

                                        <div class="basic-form">
                                            <form>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Phone number availability</label>
                                                        <select class="form-control Quote_Customer_phone_Aval">
                                                            <option value="reachable">Reachable</option>
                                                            <option value="unreachable">Unreachable</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Number of dials</label>
                                                        <select class="form-control Quote_Customer_numberOfDiles">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>contac_Customer_numberOfDiles
                                                            <option value="3">3<option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Customer type</label>
                                                        <select class="form-control Quote_CustomerType">
                                                            <option value="New Customer">New customer</option>
                                                            <option value="Existing Customer">Existing customer</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Customer location</label>
                                                        <input type="test" class="form-control Quote_Customer_location" value="" placeholder="location">
                                                    </div>


                                                    <div class="form-group">
                                                        <label>Product Choice</label>
                                                        <input type="test" class="form-control Quote_Customer_product"  value="" placeholder="product choice">
                                                    </div>



                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Gender</label>
                                                        <select class="form-control Quote_Customer_gender">
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                            <option value="Others">Others<option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Clear description on Customer query</label>
                                                        <textarea class="form-control Quote_Customer_QueryDsc" rows="7"></textarea>
                                                        </div>
                                                </div>
                                                <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Assigne To</label>
                                                    <input type="test" class="form-control Quote_Customer_AssgnTo" value="" placeholder="Query assigne to">
                                                </div>
                                                    </div>

                                                <span class="Quote_Customer_recordID"></span>
                                            </form>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary customerQuoteQuerySubmit" data-dismiss="modal">Save changes</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">

                                    <label class="col-md-12"><strong>Customer Name : </strong><span class="modal-customer-name"></span></label>

                        </div>

                        <div class="row">

                            <label class="col-md-12"><strong>Message : </strong><span class="modalDescription"></span></label>

                        </div>

                        <div class="row">

                            <label class="col-md-12"><strong>Mobile number : </strong><span class="modalnumber"></span></label>

                        </div>


                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-Two">
                                        Respond
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-Two" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="row">

                                        <div class="basic-form">
                                            <form>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Phone number availability</label>
                                                        <select class="form-control contact_Customer_phone_Aval">
                                                            <option value="reachable">Reachable</option>
                                                            <option value="unreachable">Unreachable</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Number of dials</label>
                                                        <select class="form-control contac_Customer_numberOfDiles">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3<option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Customer type</label>
                                                        <select class="form-control contac_CustomerType">
                                                            <option value="New customer">New customer</option>
                                                            <option value="Existing customer">Existing customer</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Customer location</label>
                                                        <input type="test" class="form-control contac_Customer_location" placeholder="location">
                                                    </div>


                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Gender</label>
                                                        <select class="form-control contac_Customer_gender">
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                            <option value="Others">Others<option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Clear description on Customer query</label>
                                                        <textarea class="form-control Quote_Customer_QueryDsc" rows="7"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Assigne To</label>
                                                        <input type="test" class="form-control Quote_Customer_AssgnTo" placeholder="Query assigne to">
                                                    </div>
                                                </div>

                                                <span class="responseform"></span>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary customerContactQuerySubmit" data-dismiss="modal">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- footer -->
        <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://platinumcredit.co.tz">Platinum Credit</a></footer>
        <!-- End footer -->
    </div>
    <!-- End Page wrapper  -->
</div>
<!-- End Wrapper -->
<!-- All Jquery -->
<script src="{{URL::asset('assets/js/lib/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="{{URL::asset('assets/js/lib/bootstrap/js/popper.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{URL::asset('assets/js/jquery.slimscroll.js')}}"></script>
<!--Menu sidebar -->
<script src="{{URL::asset('assets/js/sidebarmenu.js')}}"></script>
<!--stickey kit -->
<script src="{{URL::asset('assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.6/sweetalert2.all.js"></script>


<script src="{{URL::asset('assets/js/lib/datamap/d3.min.js')}}"></script>
<script src="{{URL::asset('assets/js/lib/datamap/topojson.js')}}"></script>
<script src="{{URL::asset('assets/js/lib/datamap/datamaps.world.min.js')}}"></script>
<script src="{{URL::asset('assets/js/lib/datamap/datamap-init.js')}}"></script>

<script src="{{URL::asset('assets/js/lib/weather/jquery.simpleWeather.min.js')}}"></script>
<script src="{{URL::asset('assets/js/lib/weather/weather-init.js')}}"></script>
<script src="{{URL::asset('assets/js/lib/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{URL::asset('assets/js/lib/owl-carousel/owl.carousel-init.js')}}"></script>


<script src="{{URL::asset('assets/js/lib/chartist/chartist.min.js')}}"></script>
<script src="{{URL::asset('assets/js/lib/chartist/chartist-plugin-tooltip.min.js')}}"></script>
<script src="{{URL::asset('assets/js/lib/chartist/chartist-init.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{URL::asset('assets/js/custom.min.js')}}"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>

    window.onload = function() {

        //alert("Hello! I am an alert box!!");
        var ID;

        $('.rowdata ').click(function () {

            var id = $(this).children().eq(0).text();
            var customerName = $(this).children().eq(1).text();
            var title = $(this).children().eq(2).text();
            var Msg = $(this).children().eq(3).text();
            var mobilenumber = $(this).children().eq(4).text()
           //alert(title);
            //$('.modal-title').replaceWith("<h5><span>"+title+"</span></h5>");
            $('.modal-title').text(title);
            $('.modal-customer-name').text(customerName)
            $('.modalDescription').text(Msg);
            $('.modalnumber').text(mobilenumber);
           // $('.responseform').remove();

          //  $('.modal-title').text(title);


        });

        $('.rowdata2 ').click(function () {

            ID = $(this).children().eq(0).text();

            var customerName = $(this).children().eq(1).text();
            var customerEmail = $(this).children().eq(2).text();
            var productRequested = $(this).children().eq(3).text();
            var mobilenumber = $(this).children().eq(4).text()
            //alert(title);
            //$('.modal-title').replaceWith("<h5><span>"+title+"</span></h5>");
            $('.customerEmail').text(customerEmail);
            $('.modal-customer-name').text(customerName)
            $('.modalProductRequested').text(productRequested);
            $('.modalnumber').text(mobilenumber);
            $('.Quote_Customer_recordID').text(id);

            //  $('.modal-title').text(title);


        });

        $('.customerContactQuerySubmit').click(function(){

            var numberAvailability = $('.contact_Customer_phone_Aval').val();
            var numberOfDials = $('.contac_Customer_numberOfDiles').val();
            var customerType = $('.contac_CustomerType').val();
            var customerLocation = $('.contac_Customer_location').val();
            var customerGender = $('.contac_Customer_gender').val();
            var customerQueryDsc = $('.contac_Customer_QueryDsc').val();
            var requestAssignedTo = $('.contac_Customer_AssgnTo').val();

            if(numberAvailability == null ||
                    numberAvailability == ""||
                    numberOfDials == null ||
                    numberOfDials == "" ||
                    customerType == null ||
                    customerType == "" ||
                    customerLocation == null ||
                    customerLocation == "" ||
                    customerGender == null ||
                    customerGender == "" ||
                    customerQueryDsc == null ||
                    customerQueryDsc == "" ||
                    requestAssignedTo == null ||
                    requestAssignedTo == ""){

                swal({
                    type: 'error',
                    title: 'Make sure you have fill all text box, before click send message',
                    showConfirmButton: false,
                    timer: 4000
                })

            }

            var urlIP = {!! json_encode( Config::get('app.url')) !!};


            //const ipAPI2 = 'http://localhost:8090/api/customerQuoteReuqest'
            const ipAPI2 = urlIP + ':8090/api/customerContactResponse'


            //const ipAPI2 = 'http://localhost:8090/api/customerContactRequest'

            fetch(ipAPI2,{
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json,text-plain,",
                    "X-CSRF-TOKEN":  '<?= csrf_token() ?>'
                },
                method: 'POST',
                body: JSON.stringify({
                    numberAvailability : numberAvailability,
                    numberOfDials : numberOfDials,
                    customerType: customerType,
                    customerLocation : customerLocation,
                    customerGender : customerGender,
                    customerQueryDsc : customerQueryDsc,
                    requestAssignedTo : requestAssignedTo
                })
            }).then(response => response.json())
            .then((data)=>{
                if(data.Status_code == "200") {


                swal({
                    type: 'success',
                    title: 'Thank you for choosing Platinum, our agent will give you a call with in 48 hrs \n Karibu',
                    showConfirmButton: false,
                    timer: 5000
                })

                location.reload();

            }else{

                swal({
                    type: 'error',
                    title: 'Something have gone wrong, we were unable to log your message, \n Please try again',
                    showConfirmButton: false,
                    timer: 2000
                })

                location.reload();
            }
        }).catch(()=>{

                swal({
                        type: 'error',
                        title: 'Error on sending request',
                        showConfirmButton: false,
                        timer: 2000
                })
            });


            location.reload();

        });


        $('.customerQuoteQuerySubmit').click(function (){



            var numberAvailability = $('.Quote_Customer_phone_Aval').val();
            var numberOfDials = $('.Quote_Customer_numberOfDiles').val();
            var customerType = $('.Quote_CustomerType').val();
            var customerLocation = $('.Quote_Customer_location').val();
            var customerProduct = $('.Quote_Customer_product').val();
            var customerGender = $('.Quote_Customer_gender').val();
            var customerQueryDsc = $('.Quote_Customer_QueryDsc').val();
            var requestAssignedTo = $('.Quote_Customer_AssgnTo').val();
            var requestID = ID;

            alert(requestID)

            if(numberAvailability == null ||
                    numberAvailability == ""||
                    numberOfDials == null ||
                    numberOfDials == "" ||
                    customerType == null ||
                    customerType == "" ||
                    customerLocation == null ||
                    customerLocation == "" ||
                    customerProduct == null ||
                    customerProduct == "" ||
                    customerGender == null ||
                    customerGender == "" ||
                    customerQueryDsc == null ||
                    customerQueryDsc == "" ||
                    requestAssignedTo == null ||
                    requestAssignedTo == ""){

                //alert("test");

                swal({
                    type: 'error',
                    title: 'Make sure you have fill all text box, before click send message',
                    showConfirmButton: false,
                    timer: 4000
                })

            }

            var urlIP = {!! json_encode( Config::get('app.url')) !!};


            //const ipAPI2 = 'http://localhost:8090/api/customerQuoteReuqest'
            const ipAPI2 = urlIP + ':8090/api/customerContactResponse'


            //const ipAPI2 = 'http://localhost:8090/api/customerContactRequest'

            fetch(ipAPI2,{
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json,text-plain,",
                    "X-CSRF-TOKEN":  '<?= csrf_token() ?>'
                },
                method: 'POST',
                body: JSON.stringify({
                    numberAvailability : numberAvailability,
                    numberOfDials : numberOfDials,
                    customerType: customerType,
                    customerLocation : customerLocation,
                    customerProduct : customerProduct,
                    customerGender : customerGender,
                    customerQueryDsc : customerQueryDsc,
                    requestAssignedTo : requestAssignedTo,
                    requestID : requestID
                })
            }).then(response => response.json())
            .then((data)=>{
                if(data.Status_code == "200") {


                swal({
                    type: 'success',
                    title: 'Thank you for choosing Platinum, our agent will give you a call with in 48 hrs \n Karibu',
                    showConfirmButton: false,
                    timer: 5000
                })

            }else{

                swal({
                    type: 'error',
                    title: 'Something have gone wrong, we were unable to log your message, \n Please try again',
                    showConfirmButton: false,
                    timer: 2000
                })
            }
        }).catch(()=>{

                swal({
                        type: 'error',
                        title: 'Error on sending request',
                        showConfirmButton: false,
                        timer: 2000
                })
            });


           // location.reload();

        });



    }



        window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}js/custom.min.js
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
</body>

</html>
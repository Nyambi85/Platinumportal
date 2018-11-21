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


            <div class="col-md-3 md-margin-bottom-40">
                <img class="img-responsive profile-img margin-bottom-20" src="{{URL::asset('assets/img/agrImg/img40-md.jpg')}}" alt="">

                <ul class="list-group sidebar-nav-v1 margin-bottom-40" id="sidebar-nav-1">
                    <li class="list-group-item">
                        <a href="/users/edit/{{$parameters['user']->id}}"><i class="fa fa-edit"></i> Update Profile</a>
                    </li>

                </ul>


                <hr>


            </div>



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
                                            <label class="label"><b>First name : </b>{{$parameters['user']->name}}</label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label"><b>Middle name : </b>{{$parameters['user']->middleName}}</label>
                                        </section>
                                    </div>

                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label"><b>Surname : </b>{{$parameters['user']->surName}}</label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label"><b> Email : </b>{{$parameters['user']->email}}</label>
                                        </section>


                                    </div>

                                </fieldset>
                                <fieldset>

                                    <header>Permission</header>

                                    <!--Table Striped-->
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Permission </th>
                                            <th>created at</th>
                                        </tr>
                                        </thead>
                                        <tbody {{$i = 0}}>



                                        @foreach($parameters['permission'] as $permission)


                                            <tr>
                                                <td>{{$i = $i + 1}}</td>
                                                <td>{{$permission->name}}</td>
                                                <td>{{$permission->created_at}}</td>
                                            </tr>


                                        @endforeach


                                        </tbody>
                                    </table>

                                </fieldset>



                        </footer>

                        </form >
                    </div>
                </div>
            </div>
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
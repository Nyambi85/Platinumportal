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


                <div class="panel panel-grey margin-bottom-40">
                    <div class="panel-body">
                        <form method="POST" action="{{ route('applicant.filter') }}" class="form-inline" role="form">
                            {{ csrf_field() }}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group col col-6">
                                <label class="select ">
                                    <select name="job" id="job" placeholder="Select Job">

                                        <option value="">Select Job</option>
                                        @foreach($parameters['job'] as $job)

                                            <option value="{{$job->id}}">{{$job->jobTitle}}</option>

                                        @endforeach




                                    </select>
                                    <i></i>
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="select ">
                                    <select name="gender" id="gender" placeholder="Gender">

                                        <option value="">Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>


                                    </select>
                                    <i></i>
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="select ">
                                    <select name="nationality" id="nationality" placeholder="Nationality">

                                        <option value="">Nationality</option>
                                        <option value="Tanzanian">Tanzanian</option>
                                        <option value="Ugandan">Ugandan</option>
                                        <option value="Kenyan">Kenyan</option>


                                    </select>
                                    <i></i>
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="select ">
                                    <select name="educationLevel" id="educationLevel" placeholder="Education Level">

                                        <option value="">Education Level</option>
                                        <option value="Degree">Degree</option>
                                        <option value="Deploma">Deploma</option>
                                        <option value="Certificate">Certificate</option>
                                        <option value="Secondary">Secondary</option>


                                    </select>
                                    <i></i>
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="select ">
                                    <select name="aptitudeResult" id="aptitudeResult" placeholder="Aptitude test result">

                                        <option value="">Aptitude result</option>
                                        <option value="pass">Pass</option>
                                        <option value="faile">Fail</option>


                                    </select>
                                    <i></i>
                                </label>
                            </div>
                            <button type="submit" class="btn-u btn-u-dark-blue">filter</button>
                        </form>
                    </div>
                </div>




                <!--Blog Post-->
                <div class="blog margin-bottom-40">


                    <!--Table Striped-->
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Users </th>
                            <th>Gender</th>
                            <th>Nationality</th>
                            <th>Region</th>
                            <th>Date of birth</th>
                            <th>Created at</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody {{$i = 0}}>



                        @foreach($parameters['users'] as $user)


                            <tr>
                                <td>{{$i = $i + 1}}</td>
                                <td><a href="/users/{{$user->id}}">{{$user->name}}</a></td>
                                <td ><p>{{$user->gender}}</p></td>
                                <td ><p>{{$user->nationality}}</p></td>
                                <td ><p>{{$user->region}}</p></td>
                                <td ><p>{{$user->dateOfBirth}}</p></td>
                                <td><p >{{$user->created_at}}</p></td>
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

            <div class="clearfix margin-bottom-100"></div>


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
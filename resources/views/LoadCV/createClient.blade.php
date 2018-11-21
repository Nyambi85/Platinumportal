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
                        <li class="active"><a href="#home-1" data-toggle="tab">Personal Information</a></li>
                        <li><a href="#profile-1" data-toggle="tab">Contact details</a></li>
                        <li><a href="#messages-1" data-toggle="tab">Education</a></li>
                        <li><a href="#messages-2" data-toggle="tab">Job history</a></li>
                    </ul>
                    <div class="tab-content">
                        <!-- Datepicker Forms -->
                        <footer class="tab-pane fade in active" id="home-1">
                            <form  method="POST" action="{{ route('cvPage.personalDetails') }}"  class="sky-form" enctype="multipart/form-data">

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
                                            <label class="label">Date of birth</label>

                                        <section class="col col-6">
                                            <label class="input">
                                                <i class="icon-append fa fa-calendar"></i>
                                                <input type="text" name="start" id="start" placeholder="Date">
                                            </label>
                                        </section>


                                            </div>


                                    </div>

                                    <div class="row">

\
                                        <div class="row">
                                            <section class="col col-6">
                                                <label class="label">Passport photo</label>
                                                <label for="file" class="input input-file">
                                                    <div class="btn-u btn-u-dark-blue button" style="background: darkblue">
                                                        <input type="file" name="passprtPicture" id="file" onchange="this.parentNode.nextSibling.value = this.value">Browse</div><input type="text" name="passprtPicture" readonly>
                                                </label>
                                            </section>
                                        </div>

                                    </div>




                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label">Nationality</label>
                                            <label class="input">
                                                <i class="icon-append "></i>
                                                <input type="text" name="nationality" id="nationality">
                                            </label>
                                        </section>

                                        <section class="col col-6">
                                            <label class="label">Gender</label>
                                            <label class="select ">
                                                <select name="gender" id="gender">

                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>


                                                </select>
                                                <i></i>
                                            </label>
                                        </section>
                                    </div>

                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label">Race</label>
                                            <label class="select ">
                                                <select name="applicatRace" id="applicatRace" >

                                                    <option value="0">Tanzanian</option>
                                                    <option value="1">Kenyan</option>
                                                    <option value="2">Ugandan</option>



                                                </select>
                                                <i></i>
                                            </label>
                                        </section>

                               <!--         <section >

                                            <label class="label">Birth cretificate/ Passport</label>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label for="file" class="input input-file">
                                                        <div class="btn-u btn-u-dark-blue button" style="background: darkblue">
                                                            <input type="file" name="birthPassport" id="file" onchange="this.parentNode.nextSibling.value = this.value">Browse</div><input type="text" name="birthPassport" readonly>
                                                    </label>
                                                </section>
                                            </div>

                                        </section>-->

                                        <section class="col col-6">
                                            <label class="label">Marital Status</label>
                                            <label class="select ">
                                                <select name="maritalStatus">

                                                    <option value="Married">Married</option>
                                                    <option value="Not Maried">Not Maried</option>


                                                </select>
                                                <i></i>
                                            </label>
                                        </section>


                                        </div>

                                        <div class="row">

                                     <!--   <section class="col col-6">
                                            <label class="label">Marital Status</label>
                                            <label class="select ">
                                                <select name="maritalStatus">

                                                    <option value="Married">Married</option>
                                                    <option value="Not Maried">Not Maried</option>


                                                </select>
                                                <i></i>
                                            </label>
                                        </section>-->
                                    </div>


                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label">Number of Dependencies</label>
                                            <label class="input">
                                                <i class="icon-append fa fa-asterisk"></i>
                                                <input type="text" name="numberOfDependency" id="numberOfDependency">
                                            </label>
                                        </section>
                                     <!--   <section class="col col-6">
                                            <label class="label">Driver lisence</label>
                                                    <label for="file" class="input input-file">
                                                        <div class="btn-u btn-u-dark-blue button" style="background: darkblue">
                                                            <input type="file" name="driverLisense" id="file" onchange="this.parentNode.nextSibling.value = this.value">Browse</div><input type="text" name="driverLisense" readonly>
                                                    </label>
                                        </section>-->
                                    </div>

                                    <input type="hidden" name="pageForm" id="pageForm" value="persanalDetails">

                                </fieldset>

                                <footer>
                                    <button type="submit" class="btn-u btn-u-dark-blue" >Submit</button>
                                    <button type="button" class="btn-u btn-u-default" onclick="window.history.back();">Back</button>
                                </footer>

                            </form>
                        </footer>
                        <!-- End Datepicker Forms -->

                        <!-- Validation Forms -->
                        <div class="tab-pane fade" id="profile-1">

                            <form method="POST" action="{{ route('cvPage.personalDetails') }}" class="sky-form" enctype="multipart/form-data">

                                <header>Contact details</header>
                                {{ csrf_field() }}
                                <fieldset>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label">Personal Mobile number</label>
                                            <label class="input">
                                                <i class="icon-append fa fa-asterisk"></i>
                                                <input type="text" name="mobileNumber" id="mobileNumber">
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label">Home number</label>
                                            <label class="input">
                                                <i class="icon-append fa "></i>
                                                <input type="text" name="homeNumber" id="homeNumber">
                                            </label>
                                        </section>
                                    </div>

                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label"> Email </label>
                                            <label class="input">
                                                <i class="icon-append fa fa-envelope"></i>
                                                <input type="email" name="email" id="email">
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label">Official Email</label>
                                            <label class="input">
                                                <i class="icon-append fa fa-envelope"></i>
                                                <input type="email" name="officalMail" id="officialMail">
                                            </label>
                                        </section>

                                    </div>

                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label">Country</label>
                                            <label class="select ">
                                                <select name="country" id="country">
                                                    <option value="Tanzania">Tanzania</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Rwanda" >Rwanda</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="South Sudan">South Sudan</option>
                                                </select>
                                                <i></i>
                                            </label>
                                        </section>
                                        </section>


                                        <section class="col col-6">
                                            <label class="label">Region</label>
                                            <label class="select ">
                                                <select name="region" id="region">
                                                    <option value="Tanzania">Dar es salaam</option>
                                                    <option value="Uganda">Zanzibar</option>
                                                    <option value="Rwanda" >Tanga</option>
                                                    <option value="Burundi">Bukoba</option>
                                                    <option value="South Sudan">Mwanza</option>
                                                </select>
                                                <i></i>
                                            </label>
                                        </section>

                                    </div>

                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label">District</label>
                                            <label class="input">
                                                <i class="icon-append fa fa-asterisk"></i>
                                                <input type="text" name="district" id="district">
                                            </label>
                                        </section>
                                    </div>

                                    <input type="hidden" name="id" id="id" value="{{$parameters['id']}}">
                                    <input type="hidden" name="pageForm" id="pageForm" value="contactDetails">

                                </fieldset>


                                <footer>
                                    <button type="submit" class="btn-u btn-u-dark-blue" style="background: #00008B">Submit</button>
                                    <button type="button" class="btn-u btn-u-default" onclick="window.history.back();">Back</button>
                                </footer>
                            </form>
                        </div>
                        <!-- End Validation Forms -->

                        <!-- Masking Forms -->
                        <div class="tab-pane fade" id="messages-1">
                            <footer>
                            <form action="{{ route('cvPage.personalDetails') }}" method="POST"  class="sky-form" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <fieldset>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label">Education Level</label>
                                            <label class="select ">
                                                <select name="eductionLevel" id="educationLevel">
                                                    <option value="Bachelor Degree">Bachelor Degree</option>
                                                    <option value="Diploma">Diploma</option>
                                                    <option value="Certficate">Certificate</option>

                                                </select>
                                                <i></i>
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label">College</label>
                                            <label class="input">
                                                <i class="icon-append fa fa-asterisk"></i>
                                                <input type="text" name="collegeName" id="collegeName">
                                            </label>
                                        </section>
                                    </div>



                                    <div class="row">
                                        <label class="label">Course duration</label>
                                        <div class="row">

                                            <section class="col col-6">
                                                <label class="input">
                                                    <i class="icon-append fa fa-calendar"></i>
                                                    <input type="text" name="start" id="start" placeholder="Start date">
                                                </label>
                                            </section>

                                            <section class="col col-6">
                                                <label class="input">
                                                    <i class="icon-append fa fa-calendar"></i>
                                                    <input type="text" name="finish" id="finish" placeholder="End date">
                                                </label>
                                            </section>


                                        </div>
                                    </div>

                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label">Course</label>
                                            <label class="input">
                                                <i class="icon-append"></i>
                                                <input type="text" name="courseName" id="courseName">
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label">Copy of Certificate</label>
                                            <label for="file" class="input input-file">
                                                <div class="row">
                                                    <label for="file" class="input input-file">
                                                        <div class="btn-u btn-u-dark-blue button" style="background: darkblue">
                                                            <input type="file" name="mainCourseCertificateCopy" id="file" onchange="this.parentNode.nextSibling.value = this.value">Browse</div><input type="text" name="mainCourseCertificateCopy" readonly>
                                                    </label>

                                                </div>
                                            </label>
                                            <div class="note note-error">File size must be less than 3Mb.</div>
                                        </section>


                                    </div>



                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label">Additional Education Level</label>
                                            <label class="select ">
                                                <select name="additioEductionLevel" id="educationLevel">
                                                    <option value="Bachelor Degree">Bachelor Degree</option>
                                                    <option value="Diploma">Diploma</option>
                                                    <option value="Certficate">Certificate</option>

                                                </select>
                                                <i></i>
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label">College/School</label>
                                            <label class="input">
                                                <i class="icon-append fa fa-asterisk"></i>
                                                <input type="text" name="addtionCollegeName" id="addtionCollegeName">
                                            </label>
                                        </section>
                                    </div>



                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label">Addition Course</label>
                                            <label class="input">
                                                <i class="icon-append"></i>
                                                <input type="text" name="additionCourse" id="addidtionCourse">
                                            </label>
                                        </section>

                                        <section class="col col-6">
                                            <label class="label">Copy of Certificate</label>
                                            <label for="file" class="input input-file">
                                                <div class="row">
                                                        <label for="file" class="input input-file">
                                                            <div class="btn-u btn-u-dark-blue button" style="background: darkblue">
                                                                <input type="file" name="additionCourseCertificateCopy" id="file" onchange="this.parentNode.nextSibling.value = this.value">Browse</div><input type="text" name="additionCourseCertificateCopy" readonly>
                                                        </label>

                                                </div>
                                            </label>
                                            <div class="note note-error">File size must be less than 3Mb.</div>
                                        </section>


                                    </div>


                                    <div class="row">

                                        <section class="col col-6">
                                            <label class="label">Skill </label>
                                            <label class="input">
                                                <i class="icon-append fa fa-asterisk"></i>
                                                <input type="text" name="skillOne" id="skillOne">
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label">Description</label>
                                            <label class="textarea" >
                                                <textarea rows="3" name="skillOneDesc" id="skillOneDesc"></textarea>
                                            </label>
                                            </label>
                                        </section>
                                    </div>

                                    <div class="row">

                                        <section class="col col-6">
                                            <label class="label">Skill </label>
                                            <label class="input">
                                                <i class="icon-append fa fa-asterisk"></i>
                                                <input type="text" name="skillTwo" id="skillTwo">
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label">Description</label>
                                            <label class="textarea" >
                                                <textarea rows="3" name="skillTwoDesc" id="skillTwoDesc"></textarea>
                                                </label>
                                                </label>
                                            </section>
                                        </div>
                                    <footer>
                                        <button type="submit" class="btn-u btn-u-dark-blue" >Submit</button>
                                        <button type="button" class="btn-u btn-u-default" onclick="window.history.back();">Back</button>
                                    </footer>
                                </fieldset>
                                <input type="hidden" name="id" id="id" value="{{$parameters['id']}}">
                                <input type="hidden" name="pageForm" id="pageForm" value="educationDetails">
                            </form>
                            </footer>
                        </div>


                                    <!-- Masking Forms -->
                <div class="tab-pane fade" id="messages-2">
                    <footer>
                                        <form action="{{ route('cvPage.personalDetails') }}" method="post"  class="sky-form" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <fieldset>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label">Company name</label>
                                            <label class="input">
                                                <i class="icon-append fa fa-asterisk"></i>
                                                <input type="text" name="companyName" id="companyName">
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label">Location</label>
                                            <label class="input">
                                                <i class="icon-append fa fa-asterisk"></i>
                                                <input type="text" name="companyLocation" id="companyLocation">
                                            </label>
                                        </section>
                                    </div>

                                    <div class="row">

                                        <section class="col col-6">
                                            <label class="input">
                                                <i class="icon-append fa fa-calendar"></i>
                                                <input type="text" name="start" id="start" placeholder="Start date">
                                            </label>
                                        </section>

                                        <section class="col col-6">
                                            <label class="input">
                                                <i class="icon-append fa fa-calendar"></i>
                                                <input type="text" name="finish" id="finish" placeholder="End date">
                                            </label>
                                        </section>

                                    </div>

                                    <div class="row">

                                        <section class="col col-6">
                                            <label class="label">Nature of business</label>
                                            <label class="textarea" >
                                                <textarea rows="3" name="natureOfBussiness" id="natureOfBussiness"></textarea>
                                            </label>
                                            </label>
                                        </section>

                                        <section class="col col-6">
                                            <label class="label">Job Title</label>
                                            <label class="input">
                                                <i class="icon-append"></i>
                                                <input type="text" name="jobTitle" id="jobTitle">
                                            </label>
                                        </section>

                                    </div>

                                    <div class="row">

                                        <section class="col col-6">
                                            <label class="label">Job type</label>
                                            <label class="select ">
                                                <select name="jobType" id="jobType">
                                                    <option value="Part time">Part time</option>
                                                    <option value="Full time">Full time</option>
                                                </select>
                                                <i></i>
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label">Salary </label>
                                            <label class="input">
                                                <i class="icon-append fa fa-asterisk"></i>
                                                <input type="text" name="jobSalary" id="jobSalary">
                                            </label>
                                        </section>

                                    </div>


                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label">Reason For Leaving</label>
                                            <label class="textarea" >
                                                <textarea rows="3" name="resonForLeaving" id="reasonForLeaving"></textarea>
                                            </label>
                                            </label>
                                        </section>

                                    </div>





                                </fieldset>


                                <fieldset>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label">Company name</label>
                                            <label class="input">
                                                <i class="icon-append fa fa-asterisk"></i>
                                                <input type="text" name="companyName2" id="companyName2">
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label">Location</label>
                                            <label class="input">
                                                <i class="icon-append fa fa-asterisk"></i>
                                                <input type="text" name="companyLocation2" id="companyLocation2">
                                            </label>
                                        </section>
                                    </div>

                                    <div class="row">

                                        <section class="col col-6">
                                            <label class="input">
                                                <i class="icon-append fa fa-calendar"></i>
                                                <input type="text" name="start2" id="start" placeholder="Start date">
                                            </label>
                                        </section>

                                        <section class="col col-6">
                                            <label class="input">
                                                <i class="icon-append fa fa-calendar"></i>
                                                <input type="text" name="finish2" id="finish" placeholder="End date">
                                            </label>
                                        </section>

                                    </div>

                                    <div class="row">

                                        <section class="col col-6">
                                            <label class="label">Nature of business</label>
                                            <label class="textarea" >
                                                <textarea rows="3" name="natureOfBussiness2" id="natureOfBussiness2"></textarea>
                                            </label>
                                            </label>
                                        </section>

                                        <section class="col col-6">
                                            <label class="label">Job Title</label>
                                            <label class="input">
                                                <i class="icon-append"></i>
                                                <input type="text" name="jobTitle2" id="jobTitle2">
                                            </label>
                                        </section>

                                    </div>

                                    <div class="row">

                                        <section class="col col-6">
                                            <label class="label">Job type</label>
                                            <label class="select ">
                                                <select name="jobType2" id="jobType2">
                                                    <option value="Part time">Part time</option>
                                                    <option value="Full time">Full time</option>
                                                </select>
                                                <i></i>
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label">Salary </label>
                                            <label class="input">
                                                <i class="icon-append fa fa-asterisk"></i>
                                                <input type="text" name="jobSalary2" id="jobSalary2">
                                            </label>
                                        </section>

                                    </div>


                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label">Reason For Leaving</label>
                                            <label class="textarea" >
                                                <textarea rows="3" name="resonForLeaving2" id="reasonForLeaving2"></textarea>
                                            </label>
                                        </section>

                                    </div>





                                </fieldset>
                                <input type="hidden" name="id" id="id" value="{{$parameters['id']}}">
                                <input type="hidden" name="pageForm" id="pageForm" value="jobHistoryDetails">

                                <footer>
                                    <button type="submit" class="btn-u btn-u-dark-blue">Submit</button>
                                    <button type="button" class="btn-u btn-u-default" onclick="window.history.back();">Back</button>
                                </footer>
                            </form>
                        </div>
                        <!-- End Masking Forms -->
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



            @if($parameters['tabData'] == 'persanalDetails'){

                swal({
                    title: "Ok!",
                    text: "We have successfully save your personal details, proceed next Tab!",
                    icon: "success",
                });

            }@elseif($parameters['tabData'] == 'contactDetails'){

                swal({
                    title: "Great!",
                    text: "We have successfully save your contact details, proceed next Tab!",
                    icon: "success",
                    confirmButtonColor: '#00008B'
                });

            }@endif


        }@elseif($parameters['errorNote'] == 'fail'){

                @if($parameters['tabData'] == 'persanalDetails'){

                swal({
                    title: "Opps!",
                    text: "Something might have gone wrong, we fail to save your contact detail!",
                    icon: "error",
                    dangerMode: true,
                });

            }@elseif($parameters['tabData'] == 'contactDetails'){

                swal({
                    title: "Opps!",
                    text: "Something might have gone wrong, we fail to save your contact detail!",
                    icon: "error",
                    dangerMode: true,
                });

            }@endif


        }@elseif($parameters['errorNote'] == 'notification'){

            swal({
                title: "Sorry!",
                text: "Please, fill in CV form before applay!",
                icon: "warning",
                dangerMode: true,
            });

        }@elseif($parameters['errorNote'] == 'uncomplete_notification'){

            swal({
                title: "Sorry!",
                text: "Looks like you have not Complete to fill your CV form, Please Complete it before applying!",
                icon: "warning",
                dangerMode: true,
            });

        }@elseif($parameters['errorNote'] == 'notification_NoCV'){

            swal({
                title: "Sorry!",
                text: "We cannot find any CV details on the system,\n     kindly proceed with filling the CV form",
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

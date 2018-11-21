<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.5/shortcode_accordion_and_tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2016 06:13:01 GMT -->
<head>
    <title> Career | Admin Main </title>


    <!-- CSS Global Compulsory -->
    @include('layouts.HeaderLogin2')

    <link rel="stylesheet" href="{{URL::asset('assets/css/CustomStyl.css')}}">




</head>




<body>
<div class="wrapper">
    <!--=== Header ===-->
@include('layouts.headerNav')
<!--=== End Header ===-->

    <!--=== Content Part ===-->
    <div class="container content profile">

        <div class="row">


            <div class="col-md-3 md-margin-bottom-40" {{  $date = $parameters['data'] }}>
                <img class="img-responsive profile-img margin-bottom-20" src="{{URL::asset('assets/passPortPicture/'.$date[0]->passprtPicture)}}" alt="{{$date[0]->passprtPicture}}">

                <ul class="list-group sidebar-nav-v1 margin-bottom-40" id="sidebar-nav-1">
                    <li class="list-group-item">
                        <a href="/editCV/1"><i class="fa fa-edit"></i> Update CV</a>
                    </li>

                </ul>


                <hr>


            </div>



            <div class="col-md-9">
                <div class="profile-body">

                    <!--=== Content Part ===-->
                    <div class="row margin-bottom-10">


                        <footer class="tab-pane fade in active" id="home-1">
                            <form  method="POST" action="{{ route('cvPage.personalDetails') }}"  class="sky-form">

                                <header>Personal details</header>
                                {{ csrf_field() }}

                                <fieldset>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label"><b>First name : </b>{{$date[0]->firstName}}</label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label"><b>Middle name : </b>{{$date[0]->middleName}}</label>
                                        </section>
                                    </div>

                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label"><b>Surname : </b>{{$date[0]->Surname}}</label>
                                        </section>

                                        <div class="row">
                                            <section class="col col-6">
                                                <label class="label"><b>Date of Birth : </b>{{$date[0]->dateOfBirth}}</label>
                                            </section>
                                        </div>


                                    </div>


                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label"><b>Nationality : </b>{{$date[0]->nationality}}</label>
                                        </section>

                                        <section class="col col-6">
                                            <label class="label"><b>Gender : </b>{{$date[0]->gender}}</label>
                                        </section>
                                    </div>

                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label"><b>Race : </b>{{$date[0]->race}}</label>
                                        </section>

                                        <section >

                                            <label class="label birth"><i class="fa fa-download"></i><a href="javascript:void(0);"><b>Birth cretificate/ Passport</b> </a></label>

                                        </section>


                                    </div>

                                    <div class="row">

                                        <section class="col col-6">
                                            <label class="label"><b>Marital Status : </b>{{$date[0]->martalStatus}}</label>
                                        </section>
                                    </div>


                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label"><b>Number of Dependences :</b>{{$date[0]->numberOfDependencies}}</label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label contact" values="{{json_encode($date[0]->passprtPicture)}}"><i class="fa fa-download"></i><a href="javascript:void(0); " ><b>Driver lisence</b></a> </label>
                                        </section>
                                    </div>


                                    <div class="row" >
                                        <section class="col col-6">
                                            <label class="label"><b>Personal Mobile number :</b>{{$parameters['moreData']["personalMobileNumber"]}}</label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label"><b>Home number : </b>{{$parameters['moreData']["homeNumber"]}}</label>
                                        </section>
                                    </div>

</fieldset>
                                <fieldset>

                                    <header>Contact details</header>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label"><b> Email : </b>{{$parameters['moreData']["mail"]}}</label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label"><b>Official Email :</b>{{$parameters['moreData']["officeMail"]}}</label>
                                        </section>

                                    </div>

                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label"><b>Country : </b>{{$parameters['moreData']["country"]}}</label>
                                        </section>
                                        </section>


                                        <section class="col col-6">
                                            <label class="label"><b>Region :</b> {{$parameters['moreData']["region"]}}</label>
                                            </label>
                                        </section>

                                    </div>

                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label"><b>District :</b> {{$parameters['moreData']["district"]}}</label>
                                        </section>
                                    </div>

                                    </fieldset>


                                <fieldset>

                                    <header>Education details</header>

                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label"><b>Education Level :</b>{{$parameters['moreData']["educationLevel"]}}</label>
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label"><b>College : </b>{{$parameters['moreData']["institutionName"]}}</label>
                                        </section>
                                    </div>


                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label"><b>Course : </b>{{$parameters['moreData']["course"]}}</label>
                                        </section>

                                        <section class="col col-6">
                                            <label class="label"><a href="#"><b>Copy of Certificate</b><a></label>
                                        </section>

                                    </div>

                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label"><b>Addition Course : </b>{{$parameters['moreData']["mail"]}}</label>
                                        </section>

                                        <section class="col col-6">
                                            <label class="label"><a href="#"><b>Copy of Certificate</b></a></label>
                                        </section>

                                    </div>
				</fieldset>
				<fieldset>
	
				     <header>Job History</header>


		                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label"><b>Company Name :</b>{{$parameters['moreData']["educationLevel"]}}</label>
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label"><b>Location : </b>{{$parameters['moreData']["institutionName"]}}</label>
                                        </section>
                                    </div>

					<div class="row">
                                        <section class="col col-6">
                                            <label class="label"><b>Start Date :</b>{{$parameters['moreData']["educationLevel"]}}</label>
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label"><b>End Date : </b>{{$parameters['moreData']["institutionName"]}}</label>
                                        </section>
                                    </div>

				   <div class="row">
                                        <section class="col col-6">
                                            <label class="label"><b>Job title :</b>{{$parameters['moreData']["educationLevel"]}}</label>
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label"><b>Nature of business : </b>{{$parameters['moreData']["institutionName"]}}</label>
                                        </section>
                                    </div>


   				  <div class="row">
                                        <section class="col col-6">
                                            <label class="label"><b>Company Name :</b>{{$parameters['moreData']["educationLevel"]}}</label>
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label"><b>Location : </b>{{$parameters['moreData']["institutionName"]}}</label>
                                        </section>
                                    </div>

                                        <div class="row">
                                        <section class="col col-6">
                                            <label class="label"><b>Start Date :</b>{{$parameters['moreData']["educationLevel"]}}</label>
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label"><b>End Date : </b>{{$parameters['moreData']["institutionName"]}}</label>
                                        </section>
                                    </div>

                                   <div class="row">
                                        <section class="col col-6">
                                            <label class="label"><b>Job title :</b>{{$parameters['moreData']["educationLevel"]}}</label>
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label"><b>Nature of business : </b>{{$parameters['moreData']["institutionName"]}}</label>
                                        </section>
                                    </div>


		         </fieldset>


			<fieldset>

				<header>Skills </header>
					<div class="row">
                                        <section class="col col-6">
                                            <label class="label"><b>Skill :</b>{{$parameters['moreData']["skillName"]}}</label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label"><b>Description : </b>{{$parameters['moreData']["SkillDescription"]}}</label>
                                        </section>
                                    </div>

                                    <div class="row">

                                        <section class="col col-6">
                                            <label class="label"><b>Skill : </b>{{$parameters['moreData']["skillName"]}}</label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label"><b>Description :</b>{{$parameters['moreData']["SkillDescription"]}} </label>
                                        </section>
                                    </div>


                                </fieldset>



			       <fieldset>

                                <header>Referees </header>

                                <div class="row">

                                        <section class="col col-6">
                                            <label class="label"><b>Skill :</b>{{$parameters['moreData']["skillName"]}}</label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label"><b>Description : </b>{{$parameters['moreData']["SkillDescription"]}}</label>
                                        </section>
                                    </div>

                                    <div class="row">

                                        <section class="col col-6">
                                            <label class="label"><b>Skill : </b>{{$parameters['moreData']["skillName"]}}</label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label"><b>Description :</b>{{$parameters['moreData']["SkillDescription"]}} </label>
                                        </section>
                                    </div>


                                </fieldset>






                            </form>
                        </footer>


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
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="assets/js/custom.html"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="{{URL::asset('assets/js/app.html')}}"></script>
<script type="text/javascript" src="assets/js/plugins/style-switcher.html"></script>

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

        }@endif
    }



    jQuery(document).ready(function() {
        App.init();
        OrderForm.initOrderForm();
        ReviewForm.initReviewForm();
        CheckoutForm.initCheckoutForm();
        StyleSwitcher.initStyleSwitcher();
    });




    $('.birth').click(function(){

        swal({

            //imageUrl: 'https://unsplash.it/600/400'
            imageUrl:"{{URL::asset('assets/birthCertificatOrPassport/'.$date[0]->birthPassport)}}",
            imageClass: "contact-form-image",
            customClass: 'sweetalert-lg',
            imageWidth: 800,
            imageHeight: 500,
            width:1000,
            height : 800,
            html:
            '<button type="button" role="button" tabindex="0" class="SwalBtn1 customSwalBtn">' + 'Download' + '</button>' +
            '<button type="button" role="button" tabindex="0" class="SwalBtn2 customSwalBtn">' + 'Cancel' + '</button>',
            showCancelButton: false,
            showConfirmButton: false
        });

    });


    $('.contact').click(function(){

        swal({

            //imageUrl: 'https://unsplash.it/600/400'
            imageUrl:"{{URL::asset('assets/passPortPicture/'.$date[0]->driverLissence)}}"
            //imageUrl: "../../../public/assets/passPortPicture/text.jpeg"

        });

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


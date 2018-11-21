<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.5/shortcode_form_states.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2016 06:13:01 GMT -->
<head>
    <title>Form States | Unify - Responsive Website Template</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel="stylesheet" href="../../../fonts.googleapis.com/css0bd2.css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="assets/css/headers/header-default.css">
    <link rel="stylesheet" href="assets/css/footers/footer-v1.css">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="{{URL::asset('assets/css/jquery.sweet-modal.min.css')}}" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/plugins/animate.css">
    <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
    <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
    <!--[if lt IE 9]><link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css"><![endif]-->

    <!-- CSS Theme -->
    <link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">
    <link rel="stylesheet" href="assets/css/theme-skins/dark.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
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
                        <li class="active"><a href="#home-1" data-toggle="tab">Nomination form</a></li>
                    </ul>
                    <div class="tab-content">
                        <!-- Success Forms -->
                        <div class="tab-pane fade in active" id="home-1">
                            <form action="postnominationForm" method="post"
                                  class="sky-form" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <header>Employee of Month </header>

                                <fieldset>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label">Nominee’s name</label>
                                            <label class="input">
                                                <i class="icon-append fa fa-asterisk"></i>
                                                <input type="text" name="nomineeName" id="nomineeName">
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label">Nominee’s Mail</label>
                                            <label class="input">
                                                <i class="icon-append fa fa-asterisk"></i>
                                                <input type="text" name="nomineeEmail" id="nomineeEmail">
                                            </label>
                                        </section>
                                    </div>

                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label">Job title</label>
                                            <label class="input">
                                                <i class="icon-append fa fa-asterisk"></i>
                                                <input type="text" name="nomineeTitle" id="nomineeTitle">
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label">Department</label>
                                            <label class="select ">
                                                <select name="departmentID" id="departmentID">
                                                        <option value="6">HR dept</option>
                                                    <option value="1">IT dept</option>
                                                    <option value="5">Collection dept</option>
                                                    <option value="4">Credit dept</option>


                                                </select>
                                                <i></i>
                                            </label>
                                        </section>

                                    </div>


                                    <fieldset>
                                        <header>Nomination Criteria</header>
                                        <br/>
                                        <div class="row">
                                            {{ csrf_field() }}
                                            <section>
                                                <label class="label">Describe  how the nominee demonstrates excellence  in the area of <strong> Teamwork </strong>,  give specific examples:</label>
                                                <label for="file" class="textarea">
                                                    <textarea rows="5" name="teamworkCriteria" id="teamworkCriteria"></textarea>
                                                </label>

                                            </section>

                                        </div>
                                        <div class="row">

                                            <section>
                                                <label class="label">Describe  how the nominee demonstrates excellence  in the area of <strong>  performance commitment and productivity, </strong>give specific examples:  </label>
                                                <label for="file" class="textarea">
                                                    <textarea rows="5" name="perfomanceCriteria" id="perfomanceCriteria"></textarea>
                                                </label>
                                            </section>

                                        </div>
                                        <div class="row">

                                            <section>
                                                <label class="label">Describe  how the nominee demonstrates excellence in the area of <strong> general conduct/behavior at work, </strong>give specific examples: </label>
                                                <label for="file" class="textarea">
                                                    <textarea rows="5" name="generlaCoonductCriteria" id="generlaCoonductCriteria"></textarea>
                                                </label>
                                            </section>

                                        </div>

                                        <div class="row">

                                            <section>
                                                <label class="label">Describe  how the nominee demonstrates excellence in the area of <strong>  Customer Service, </strong>give specific examples:   </label>
                                                <label for="file" class="textarea">
                                                    <textarea rows="5" name="customerServiceCriteria" id="customerServiceCriteria"></textarea>
                                                </label>
                                            </section>

                                        </div>

                                        <div class="row">

                                            <section>
                                                <label class="label">List <strong>outstanding accomplishments</strong></label>
                                                <label for="file" class="textarea">
                                                    <textarea rows="5" name="accomplishmentCriteria" id="accomplishmentCriteria"></textarea>
                                                </label>
                                            </section>

                                        </div>

                                    </fieldset>
                                    

                                </fieldset>


                                <footer>
                                    <button type="submit" class="btn-u">Submit</button>
                                    <button type="button" class="btn-u btn-u-default" onclick="window.history.back();">Back</button>
                                </footer>
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
<script type="text/javascript" src="assets/plugins/jquery/jquery.min.html"></script>
<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.html"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.html"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="assets/plugins/back-to-top.html"></script>
<script type="text/javascript" src="assets/plugins/smoothScroll.html"></script>
<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.html"></script>
<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.maskedinput.min.html"></script>
<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.html"></script>
<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.html"></script>
<!-- JS Customization -->
<script type="text/javascript" src="assets/js/custom.html"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="assets/js/app.html"></script>
<script type="text/javascript" src="assets/js/plugins/style-switcher.html"></script>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    jQuery(document).ready(function() {
        App.init();

    });

    window.onload = function() {



        var test = {!! json_encode($parameters['data']) !!};

            @if($parameters['errorNote'] == 'success'){


            swal({
                title: "Ok!",
                text: "Your vote has been casted, Thanks for taking part on this exercise!",
                icon: "success",
            });




        }@elseif($parameters['errorNote'] == 'notification'){

                @if($parameters['tabData'] == 'NotPCLStaff'){


                swal({
                    title: "Sorry!",
                    text: "Sorry!  We do not have "+ test +" as staff on platinumcredit platform",
                    dangerMode: true,
                    icon: "warning",

                });


            }@elseif($parameters['tabData'] == 'Notchallenge'){

                swal({
                    title: "Sorry!",
                    text: "This exercise is no longer open for voting! .",
                    dangerMode: true,
                    icon: "warning",

                });

            }@elseif($parameters['tabData'] == 'repeater'){


                swal({
                    title: "Sorry!",
                    text: "You can only vote once on a given challenge",
                    dangerMode: true,
                    icon: "warning",
                });



            }@endif


        }@endif


            @if(count($errors) > 0){

                    @foreach ($errors->all() as $error)

            var test = {!! json_encode($error) !!};

            swal({
                title: "Sorry!",
                text: "There is an error on the form : " + test + " Make sure to correct it so that you can proceed.",
                dangerMode: true,
                icon: "warning",

            });

            @endforeach



        }@endif





    }

</script>



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
<script src="assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js"></script>
<![endif]-->

<!--[if lt IE 10]>
<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
<![endif]-->
</body>

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.5/shortcode_form_states.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2016 06:13:01 GMT -->
</html>
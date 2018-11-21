<div class="header">
    <div class="container">
        <!-- Logo -->
        <a class="logo" href="/home">
            <img src="{{URL::asset('assets/img/logo3-default.png')}}" alt="Logo" >
        </a>
        <!-- End Logo -->

        <!-- Topbar -->
        <div class="topbar">
            <ul class="loginbar pull-right">
                <li class="topbar-devider"></li>
                <li><a href="">Account reset</a></li>
                <li class="topbar-devider"></li>
                <li><a href="{{ url('/logout') }}">Log Out</a></li>
            </ul>
        </div>
        <!-- End Topbar -->


    </div><!--/end container-->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
        <div class="container">
            <ul class="nav navbar-nav" >
                <!-- Home -->
                <li class="active" >
                    <a href="/"  style="color: #00008B">
                        Home
                    </a>


                </li>
                <!-- End Home -->


                <!-- Portfolio -->
                <li >
                    <a href="javascript:void(0);" style="color: #00008B">
                        Portfolio
                    </a>

                </li>
                <!-- End Portfolio -->

                <!-- Features -->
                <li >
                    <a href="javascript:void(0);" style="color: #00008B" >
                        Our Products
                    </a>

                </li>
                <!-- End Features -->

                <!-- Features -->
                <li >
                    <a href="blog" style="color: #00008B" >
                        blog
                    </a>

                </li>
                <!-- End Features -->


                <!-- Demo Pages -->
                <li >
                    <a href="javascript:void(0);" style="color: #00008B">
                        about us
                    </a>
                </li>
                <!-- End Demo Pages -->

                <!-- Search Block -->
                <li>
                    <i class="search fa fa-search search-btn"></i>
                    <div class="search-open">
                        <div class="input-group animated fadeInDown">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
										<button class="btn-u" type="button">Go</button>
									</span>
                        </div>
                    </div>
                </li>
                <!-- End Search Block -->
            </ul>
        </div><!--/end container-->
    </div><!--/navbar-collapse-->
</div>
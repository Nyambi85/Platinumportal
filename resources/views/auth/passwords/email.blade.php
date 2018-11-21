@extends('layouts.app2')

@section('content')
<form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
    {{ csrf_field() }}

    <div class="login-block">

        <div class="input-group margin-bottom-20 ">

            <span class="input-group-addon rounded-left"><i class="icon-user color-dark-blue"></i></span>
            <input id="email" type="email" class="form-control rounded-right" placeholder="your registered email to send the link" name="email" value="{{ old('email') }}" required autofocus>

        </div>

        <div class="input-group margin-bottom-20 ">

            @if ($errors->has('email'))
                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                            </span>
            @endif

        </div>




        <div class="row margin-bottom-70">
            <div class="col-md-12">
                <button type="submit" class="btn-u btn-u-dark-blue btn-block rounded">Submit</button>
            </div>
        </div>

        <div class="social-login text-center">
          <!--  <div class="or rounded-x">Or</div>
            <ul class="list-inline margin-bottom-20">
                <li>
                    <a href="{{url('/redirect')}}">
                        <button  class="btn rounded btn-lg btn-facebook color-dark-blue">
                            <i class="fa fa-facebook"></i> Facebook Sign in
                        </button>
                    </a>
                </li>
                <li>

                    <button class="btn rounded btn-lg btn-google color-dark-blue">
                        <i class="fa fa-google"></i> Google Sign in
                    </button>
                </li>
            </ul>-->
            <p>Don't have an account? <a href="{{ url('register') }}" style="color:#00008B">Sign up</a></p>

        </div>

    </div>
</form>
@endsection

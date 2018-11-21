@extends('layouts.app3')

@section('content')
    <form class="form-horizontal" method="POST" action="{{ route('password.request1') }}">
        {{ csrf_field() }}

        <input type="hidden" name="token" value="{{ $token }}">
        <div class="login-block">

          <div class="input-group margin-bottom-20 "> 

                <span class="input-group-addon rounded-left"><i class="icon-user color-dark-blue"></i></span>
                <input id="email" type="email" class="form-control rounded-right" placeholder="email" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
	</div>
           

	
	
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon rounded-left"><i class="icon-lock color-dark-blue"></i></span>
                    <input type="password" class="form-control rounded-right" placeholder="Password" name="password" id="password"  required>
                </div>

                @if ($errors->has('password'))
                    <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                        </span>
                @endif

            </div>
	

	
            <div class="form-group{{ $errors->has('password-confirm') ? ' has-error' : '' }}">
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon rounded-left"><i class="icon-lock color-dark-blue"></i></span>
                    <input type="password" class="form-control rounded-right" placeholder="Confirm Password" name="password_confirmation" id="password-confirm"  required>
                </div>


            </div>
	



            <div class="row margin-bottom-70">
                <div class="col-md-12">
                    <button type="submit" class="btn-u btn-u-dark-blue btn-block rounded">Reset Password</button>
                </div>
            </div>



        </div>
    </form>
@endsection

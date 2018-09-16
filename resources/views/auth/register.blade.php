@extends('layouts.login_master')

@section('content')
<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33" style="margin: auto;">
    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}" class="login100-form validate-form flex-sb flex-w">
        @csrf
        <span class="login100-form-title p-b-53">
            Đăng ký
        </span>

        <div class="p-t-31 p-b-9">
            <label class="txt1"  for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
        </div>
        <div class="wrap-input100 validate-input" data-validate = "Username is required">
            <input  class="input100"  id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
        </div>

        <div class="p-t-31 p-b-9">
            <label class="txt1" for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
        </div>
        <div class="wrap-input100 validate-input" data-validate = "Username is required">
            <input class="input100" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
            <span class="focus-input100"></span>
        </div>

        <div class="p-t-13 p-b-9">
            <label class="txt1" for="username" class="col-md-4 col-form-label text-md-right">{{ __('username') }}</label>
        </div>
        <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required>

            @if ($errors->has('username'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('username') }}</strong>
            </span>
            @endif
            <span class="focus-input100"></span>
        </div>

        <div class="p-t-13 p-b-9">
            <label class="txt1" for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
        </div>
        <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

            @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
            <span class="focus-input100"></span>
        </div>


        <div class="p-t-13 p-b-9">
            <label class="txt1"  for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
        </div>
        <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input  class="input100"  id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            <span class="focus-input100"></span>
        </div>




        <div class="container-login100-form-btn m-t-17">

            <button type="submit" class="login100-form-btn">
                {{ __('Register') }}
            </button>
        </div>
    </form>
</div>
</div>
</div>

@endsection

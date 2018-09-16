@extends('layouts.login_master')

@section('content')
<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33" style="margin: auto;">
    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" class="login100-form validate-form flex-sb flex-w">
        @csrf
        <span class="login100-form-title p-b-53">
            Đăng nhập
        </span>


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



        <div class="container-login100-form-btn m-t-17">
            <button type="submit" class="login100-form-btn">
                {{ __('Login') }}
            </button>

            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        </div>

        <div class="w-full text-center p-t-55">
            <span class="txt2">
                Not a member?
            </span>

            <a href="#" class="txt2 bo1">
                Sign up now
            </a>
        </div>
    </form>
</div>
</div>
</div>

@endsection


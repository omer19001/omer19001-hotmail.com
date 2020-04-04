@extends('layouts.app')

@section('content')
 
          
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">تسجيل الدخول </h3>
                    </div>
                    <div class="panel-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control @error('email') is-invalid @enderror" placeholder="البريد الإلكتروني" name="email" type="email" value="{{ old('email') }}" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <input class="form-control @error('password') is-invalid @enderror" placeholder="كلمة المرور" name="password" type="password" value="">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">تذكرني
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                 
                                <button type='submit' class="btn btn-success btn-lg btn-block">تسجيل</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

 
@endsection

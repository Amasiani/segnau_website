@extends('template')
@section('title', 'Login')
@section('content')
<div class="card login-card" max-width="780px">
    <div class="col">
        <img src="assets/images/seg-nau2.jpg" width="900" height="450" class="card-img" alt="hello"/>
        <div class="card-img-overlay">
            <div class="card-body">
                <p class="login-card-description" class="text-white">Sign into your account</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="sr-only text-white">Email</label>
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"" placeholder=" Email address" autofocus>
                        @error('email')
                        <span class="invalid-feedback is-invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="password" class="sr-only text-white">Password</label>
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror"" placeholder=" ***********" autofocus>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <input name="login" id="login" class="btn btn-primary login-btn mb-4" type="submit" value="Login">
                </form>
                <a href="{{ url('forgot-password') }}" class="text-white" class="forgot-password-link">Forgot password?</a>
                <nav class="login-card-footer-nav">
                    <a href="#!" class="text-danger">Terms of use.</a>
                    <a href="{{ url('/privacy') }}" class="text-danger">Privacy policy</a>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
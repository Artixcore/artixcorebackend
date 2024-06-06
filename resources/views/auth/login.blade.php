@extends('layouts.app')

@section('content')
    <div class="container py-4 mb-3">
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <div class="card">

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">

                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="mb-3">

                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                                    name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="mb-3">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-outline-primary" style="float: right;">
                                    {{ __('Login') }}
                                </button>

                            </div>
                        </form>
                    </div>

                </div>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>






        </div>
    </div>
@endsection

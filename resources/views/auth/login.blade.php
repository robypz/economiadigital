@extends('layouts.blank')

@section('content')
    <div class="container">
        <div class="row flex-row justify-content-center align-items-center vh-100">
            <div class="col-12 col-xxl-5">
                <div class="card border rounded-5">

                    <div class="card-body p-3">
                        <div class="text-center mb-3">
                            <img src="{{ asset('logos/Logo_V.1.0.png') }}" alt="" srcset="" class="card-logo">
                        </div>

                        <div class="card-title fs-2 text-center text-gray Roboto-Bold">
                            {{__('Login')}}
                        </div>

                        <form method="POST" action="{{ route('login') }}" class="d-flex justify-content-center">
                            @csrf
                            <div>


                                <label for="email" class="">{{ __('Email Address') }}</label>

                                <div class="mb-3">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>



                                <label for="password" class="text-md-end">{{ __('Password') }}</label>

                                <div class="mb-3">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

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
                                </div>



                                <div class="text-center mt-3 mt-4">
                                    <button type="submit" class="btn btn-primary w-100">
                                        {{ __('Login') }}
                                    </button>
                                </div>



                                <div class="row my-2">
                                    <div class="col-8 p-0">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                    <div class="col text-end p-0">
                                        <a href="{{ route('register') }}" class="btn btn-link">Registrate</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="text-center my-3">
                            <img src="{{ asset('logos/Logo_AIS_V.1.1.png') }}" alt="" srcset="" class="card-logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

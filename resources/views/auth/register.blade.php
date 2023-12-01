@extends('layouts.blank')

@section('content')
    <div class="container">
        <div class="row flex-row justify-content-center align-items-center vh-100">
            <div class="col-xxl-5">
                <div class="card rounded-5 p-3">
                    <div class="text-center mb-3">
                        <img src="{{ asset('logos/Logo_V.1.0.png') }}" alt="" srcset="" class="card-logo">
                    </div>

                    <div class="card-title fs-2 text-center text-gray Roboto-Bold">
                        {{ __('Register') }}
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <label for="name" class="">{{ __('Name') }}</label>

                            <div class="mb-3">
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="last_name" class="">{{ __('Apellido') }}</label>

                            <div class="mb-3">
                                <input id="last_name" type="text"
                                    class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                    value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="dni" class="">{{ __('Cedula') }}</label>

                            <div class="mb-3">
                                <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror"
                                    name="dni" value="{{ old('dni') }}" required autocomplete="dni" autofocus>

                                @error('dni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="row mb-3">
                                <label for="email" class="">{{ __('Email Address') }}</label>

                                <div class="">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="">{{ __('Password') }}</label>

                                <div class="">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>

                                <div class="">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mt-4 mb-3">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary w-75">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="text-center my-3">
                            <img src="{{ asset('logos/Logo_AIS_V.1.1.png') }}" alt="" srcset=""
                                class="card-logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

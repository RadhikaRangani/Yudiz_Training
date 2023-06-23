@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                <h2 style="text-align:center">
                    Register
                </h2>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                @if($errors->has('name'))
                                <span class="text-danger">{{$errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control " name="email" value="{{ old('email') }}" >
                                @if($errors->has('email'))
                                <span class="text-danger">{{$errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" autocomplete="new-password">

                                @if($errors->has('password'))
                                <span class="text-danger">{{$errors->first('password') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-warning">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4">
                        Have an account already?
                        <a href="{{ route('login') }}" class="btn btn-link">
                            {{ __('Login') }}
                        </a>
                    </div>
                </div>
                    {{-- <div class="col-md-6">
                      <div class="map_container ">
                        <div id="googleMap"></div>
                      </div> --}}
                    </div>
                  </div>
                </div>
            </div>
@endsection

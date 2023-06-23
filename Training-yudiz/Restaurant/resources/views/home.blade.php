@extends('layouts.app')
@push('title')
    <title>Home</title>
@endpush

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="antialiased">
                <div class="bg-box">
                    <img src="{{ asset ('images/hero-bg.jpg') }}" alt="">
                  </div>
            </div>
            {{-- <img src="{{asset('images/hero-bg.jpg')}" alt="loading-bg" --}}
            {{-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection
{{-- <body class="antialiased">
        <div class="bg-box">
            <img src="images/hero-bg.jpg" alt="">
          </div>
</body> --}}

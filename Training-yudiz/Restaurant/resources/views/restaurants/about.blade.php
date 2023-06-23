@extends('layouts.app')
@push('title')
    <title>About</title>
@endpush

@section('content')
<section class="about_section layout_padding">
        <div class="container  ">
          <div class="row">
            <div class="col-md-6 ">
              <div class="img-box">
                <img src="{{asset('images/about-img.png')}}" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="detail-box">
                <div class="heading_container">
                  <h2>
                    We Are Feane
                  </h2>
                </div>
                <p>
                  This is an online  platform that aims to provide valuable market insights to restaurants for their business ...
                  user can add their restaurants, edit, delete, and view others restaurants also there's a feature of follow and unfollow.
                </p>
              </div>
            </div>
          </div>
        </div>
  </section>
@endsection


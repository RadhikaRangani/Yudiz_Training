@extends('layouts.app')
@push('title')
    <title>Registering Restaurant</title>
@endpush

@section('content')


<div class="container">
<!-- book section -->
<section class="book_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
            Add new restaurant
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form method="post" action="{{route('restaurants.store')}}" enctype="multipart/form-data" >
                @csrf
              <div  class="input-group mb-3">
                {{-- <div class="input-group mb-6"> --}}
                    <strong><label for="name" class="col-md-6 col-form-label">{{ __('Name') }}</label></strong>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Restaurant Name" />
                    @if($errors->has('name'))
                    <span class="text-danger">{{$errors->first('name') }}</span>
                    @endif
                {{-- </div> --}}
            </div>
              <div class="input-group mb-3">
                <strong><label for="description" class="col-md-6 col-form-label">{{ __('Description') }}</label></strong>
                <textarea class="form-control" style="height:100px; resize:vertical;" placeholder="Restaurant description" name="description">{{ old('description') }}</textarea>
                @if($errors->has('description'))
                <span class="text-danger">{{$errors->first('description') }}</span>
                @endif
            </div>
            <div class="input-group mb-3">
                <strong><label for="address" class="col-md-6 col-form-label ">{{ __('Address') }}</label></strong>
                <input type="text" name="address" value="{{old('address')}}" class="form-control" placeholder="Restaurant Address" />
                @if($errors->has('address'))
                <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif
            </div>
              <div class="input-group mb-3">
                <strong><label for="number" class="col-md-6 col-form-label">{{ __('Number') }}</label></strong>
                <input type="text" name="number" value="{{old('number')}}" maxlength="10" class="form-control" placeholder="Restaurant Number" />
                @if($errors->has('number'))
                <span class="text-danger">{{ $errors->first('number') }}</span>
                @endif
            </div>
              <div class="input-group mb-3">
                <strong><label for="image" class="col-md-6 col-form-label">{{ __('Image') }}</label></strong>
                <input type="file" name="image" class="form-control" placeholder="Restaurant Image" />
                @if($errors->has('image'))
                <span class="text-danger">{{$errors->first('image') }}</span>
                @endif
            </div>

              <div class="btn_box">
                <button type="submit">
                  Add Now
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="image_container pl-3">
            <img src="{{asset('images/restaurant2.jpg')}}" height="40%" width="80%">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end book section -->
</div>


@endsection

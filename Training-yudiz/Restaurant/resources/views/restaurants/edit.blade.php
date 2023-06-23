@extends('layouts.app')
@push('title')
    <title>Update Restaurant</title>
@endpush

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="container">
<!-- book section -->
<section class="book_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
            Edit your restaurant
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            {{-- @dd($user_id = Auth::id()); --}}
            <form method="post" action="{{ route('restaurants.update', $restaurant->id ) }}" enctype="multipart/form-data" >
                @csrf
                @method('PUT')
              <div>
                <strong><label class="col-md-6 col-form-label">{{ __('Restaurant Name') }}</label></strong>
                <input type="text" name="name" value="{{$restaurant->name}}" class="form-control" placeholder="Restaurant Name" />
                @if($errors->has('name'))
                <span class="text-danger">{{$errors->first('name') }}</span>
                @endif
            </div>
              <div>
                <strong><label class="col-md-6 col-form-label">{{ __('Restaurant description') }}</label></strong>
                <textarea class="form-control" placeholder="Restaurant description" style="height:100px; resize:vertical;" name="description">{{$restaurant->description }}</textarea>
                @if($errors->has('description'))
                <span class="text-danger">{{$errors->first('description') }}</span>
                @endif
            </div>
            <div>
                <strong><label class="col-md-6 col-form-label ">{{ __('Restaurant Address') }}</label></strong>
                <input type="text" name="address"  value="{{$restaurant->address}}" class="form-control" placeholder="Restaurant Address" />
                @if($errors->has('address'))
                <span class="text-danger">{{$errors->first('address') }}</span>
                @endif
            </div>
            <div>
                <strong><label class="col-md-6 col-form-label">{{ __('Restaurant Number') }}</label></strong>
                <input type="text" name="number"  maxlength="10" value="{{$restaurant->contact}}" class="form-control"  placeholder="Restaurant Number" />
                @if($errors->has('number'))
                <span class="text-danger">{{$errors->first('number') }}</span>
                @endif
            </div>
            {{-- <div>
                <input type="text" name="contact" class="form-control" placeholder="Restaurant contact Number" />
                @if($errors->has('contact'))
                <span class="text-danger">{{$errors->first('contact') }}</span>
                @endif
            </div> --}}
            <div>
                <strong><label class="col-md-6 col-form-label">{{ __('Restaurant Image') }}</label></strong>
                <input type="file" name="image" class="form-control" placeholder="Restaurant Image" />
                @if($errors->has('image'))
                <span class="text-danger">{{$errors->first('image') }}</span>
                @endif
            </div>

              <div class="btn_box">
                <button type="submit" class = "add-confirm">
                  Update Now
                </button>
              </div>

            </form>
          </div>
        </div>
        <div class="col-md-6 " style=" display: block;
        margin-left: auto;
        margin-right: auto;
        object-fit:contain">
          <div class="image_container pl-4 pt-5">
            <img src="{{ Storage::url($restaurant->image) }}" class="center" height="40%" width="80%" style=" display: block;">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end book section -->
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
        <script>

             $('.add-confirm').click(function(event) {
                //   event.preventDefault();
                  swal({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Your work has been saved',
                    showConfirmButton: true,
                    timer: 1500
                    })
              });

        </script>
@endsection

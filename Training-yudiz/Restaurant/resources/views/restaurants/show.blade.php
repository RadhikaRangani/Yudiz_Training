@extends('layouts.app')
@push('title')
    <title>{{ $restaurant->name }}</title>
@endpush
@section('contentas')
<div class="container">
<!-- Show section -->
<section class="book_section layout_padding"style="justify-content-center">
    <h1>{{ $restaurant->name }}</h1>
    {{-- <div class="col-md-4 mb-4">
        <div class="box">
            <div>
            <div class="img-box">
                <img src="{{ Storage::url($restaurant->image) }}" alt="restaurant-image">
            </div>
            <div class="detail-box">
                <h5>
                {{ $restaurant->name }}
                </h5>
                <p>
                {{ $restaurant->description }}
                </p>
                <div class="options">
                <h6>
                    {{$restaurant->contact}}
                </h6>
                <a href="{{route('login')}}">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                    <g>
                        <g>
                        <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                    c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />view more
                        </g>
                    </g>
                    <g>
                        <g>
                        <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                    C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                    c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                    C457.728,97.71,450.56,86.958,439.296,84.91z" />
                        </g>
                    </g>
                    <g>
                        <g>
                        <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                    c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                        </g>
                    </g>
                    </svg>
                </a>
                </div>
            </div>
            </div>
        </div>
        </div> --}}
            <div class="container d-flex justify-content-center">
                <div class="row">
                    {{-- @foreach ($restaurants as $restaurant) --}}
                    <div class="col-md-4 mb-4">
                        <div class="card card h-200 card d-flex align-items border border-4" style="width:20rem; background:black;">
                        <img src="{{ Storage::url($restaurant->image) }}" class="card-img-top background: #f1f2f3 ;"
                        style="
                        background: #f1f2f3;
                        display: -webkit-box;
                        display: -ms-flexbox;
                        display: flex;
                        -webkit-box-pack: center;
                        -ms-flex-pack: center;
                        justify-content: center;
                        -webkit-box-align: center;
                        -ms-flex-align: center;
                        align-items: center;
                        height: 250px;
                        border-radius: 0 0 0 45px;
                        margin: 0px;
                        padding: 25px;" alt="restaurant-image">
                        <div class="card-body text-white" style="width: 20rem">
                            <div class="content text-white"  style=" background:black;padding:25px">
                                <strong> <h3 class="card-title">{{ $restaurant->name }}</h3></strong>
                                <p class="card-text description">{{$restaurant->description }}</p>
                                <p class="card-text">{{$restaurant->address}}</p>
                                <p class="card-text">{{$restaurant->contact}}</p>
                            @if ((auth()->id()) == $restaurant->user_id)
                                <form action="{{ route('restaurants.destroy', $restaurant) }}"  method="Post">
                                    {{-- @dd($restaurant) --}}
                                    <a class="btn btn-warning" href="{{ route('restaurants.edit',$restaurant->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            @endif
                            </div>
                        </div>
                    </div>

                    {{-- @endforeach --}}

                </div>
            </div>
</section>
<!-- end show section -->
</div>
@endsection

<div class="container">
@section('content')
<section class="book_section layout_padding"style="justify-content-center">
    <h1 style="text-align:center;margin-bottom:5px">
        Restaurant Details
    </h1>
    <div class="container">
        <div class="row">
            <div class="card col-6">
                <div class="card-header" style="text-align: center; width:100%">
                    <h2>
                        {{ $restaurant->name }}
                      </h2>
                </div>
            <div class="card-body">
              <cite class="blockquote mb-0">
                <p><strong>Description :</strong> {{$restaurant->description }}</p></p>
                <cite  class="blockquote"><strong>Address :</strong>{{$restaurant->address}}
                    <p><cite><strong>Contact No. :</strong>{{$restaurant->contact}}</cite></p></cite>
              </cite>
            </div>
          </div>
          <div class="col-md-6 " style="">
            <div class="image_container pl-3 ">
              <img src="{{ Storage::url($restaurant->image) }}" class="center"
              style=" display: block;
              margin-left: auto;
              margin-right: auto;
              width: 80%;
              height:80%">
            </div>
          </div>
        </div>
    </div>
</section>
@endsection
</div>

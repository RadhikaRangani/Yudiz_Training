@extends('layouts.app')
{{-- @include('sweetalert::alert') --}}

@push('title')
    <title>Show Restaurants</title>
@endpush
@section('content')
<div class="container">
<!-- book section -->
<section class="book_section layout_padding">
    <div class="container" >

            <div class="container">
                <h1>All Restaurants</h1>
                <div class="row">
                    {{-- @dd($restaurants); --}}
                    @foreach ($restaurants as $restaurant)
                    <div class="col-md-4 mb-4 d-flex">
                        <div class="card card d-flex align-items border border-4" style="width:18rem;background:black">
                        {{-- <img src="{{ asset("images/f1.png") }}" class="card-img-top" --}}
                        <img src="{{ Storage::url($restaurant->image) }}" class="card-img-top background: #f1f2f3;"
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
                        height: 215px;
                        border-radius: 0 0 0 45px;
                        margin: 0px;
                        padding: 25px;" alt="restaurant-image"
                        <div class="card-body text-white">
                            <div class="content text-white "  style=" background:black;padding:25px">
                                <a href="{{ route('restaurants.show',$restaurant->id) }}" class=" text-light warning:hover"><strong> <h3 class="card-title">{{ $restaurant->name }}</h3></strong></a>
                                <p class="card-text font-italic"style="display: -webkit-box;
                                -webkit-line-clamp: 3;
                                -webkit-box-orient: vertical;
                                overflow: hidden;
                                text-overflow: ellipsis;"><strong>Description: </strong>
                               {{$restaurant->description}}</p>
                                <p class="card-text font-italic"><strong> Contact: </strong>{{$restaurant->contact}}</p>

                            {{-- Edit Button --}}
                            @if ((auth()->id()) == $restaurant->user_id)
                                <form action="{{ route('restaurants.destroy', $restaurant) }}"  method="Post">
                                    {{-- @dd($restaurant) --}}
                                    {{-- <link rel="shortcut icon" href="{{asset('images/edit.png')}}" type=""> --}}
                                    {{-- <a  href="{{ route('restaurants.edit',$restaurant->id) }}"> <i class="fa-solid fa-pen-to-square fa-2xl" style="color: #ffffff;"></i></a> --}}
                                    <a class="btn btn-warning " href="{{ route('restaurants.edit',$restaurant->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    {{-- <i class="fa-solid fa-trash fa-2xl"></i> --}}
                                    <button type="submit" class="btn btn-danger show-confirm">Delete</button>
                                    <a class="btn btn-light"  href="{{ route('restaurants.show',$restaurant->id) }}">Show</a>

                                </form>
                            @endif
                            @auth
                            @if(!(Auth::id() == $restaurant->user_id))
                                        @if ($restaurant->users->isNotEmpty())
                                    {{-- @if ($restaurant->follow) --}}
                                    <form action="{{ route('restaurants.unfollow', $restaurant) }}" method="POST">
                                        <form action="{{ route('restaurants.unfollow', $restaurant) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">Unfollow</button>
                                            {{-- <a href="{{ route('restaurants.show',$restaurant->id) }}"> <i class="fa-solid fa-eye fa-2xl" style="color: #ffffff;"></i></a> --}}
                                            <a class="btn btn-light" href="{{ route('restaurants.show',$restaurant->id) }}">Show</a>
                                        </form>
                                    @else
                                        <form action="{{ route('restaurants.follow', $restaurant) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">Follow</button>
                                            {{-- <a href="{{ route('restaurants.show',$restaurant->id) }}"> <i class="fa-solid fa-eye fa-2xl" style="color: #ffffff;"></i></a> --}}
                                            <a class="btn btn-light" href="{{ route('restaurants.show',$restaurant->id) }}">Show</a>
                                        </form>
                                        @endif
                                    @endif
                                @endauth
                                {{-- </form> --}}

                            </div>
                        </div>

                    </div>

                    @endforeach

                </div>
            </div>
          </div>

    </div>

</section>
  <!-- end book section -->
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">

     $('.show-confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });

</script>
@endsection

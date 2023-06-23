@extends('Users.main')
@push('title')
<title>form User</title>

@endpush
@section('form-section')
<h1 style="text-align:center">Form page</h1>
<div style="overflow-x: auto; " >
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
            {{-- dd(@error) --}}
            @if ($errors->has('name'))
            <span class="help-block">
              <strong class="form-text">{{ $errors->first('name') }}</strong>
            </span>
            @endif

          </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            @if ($errors->has('email'))
            <span class="help-block">
              <strong class="form-text">{{ $errors->first('email') }}</strong>
            </span>
            @endif
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number">
            @if ($errors->has('phone'))
            <span class="help-block">
              <strong class="form-text">{{ $errors->first('phone') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          @if ($errors->has('password'))
          <span class="help-block">
            <strong class="form-text">{{ $errors->first('password') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confrom Password</label>
            <input type="password" class="form-control" id="cpassword" placeholder="Confrom Password">
          </div>
        <div class="form-group">
            <label for="profile">Profile Picture</label>
            <input type="file" class="form-control-file" id="profile">
            @if ($errors->has('profile'))
            <span class="help-block">
              <strong class="form-text">{{ $errors->first('profile') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="checkbox" name="checkbox">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
            @if ($errors->has('checkbox'))
            <span class="help-block">
              <strong class="form-text">{{ $errors->first('checkbox') }}</strong>
            </span>
            @endif
        </div>
        <button type="submit" class="btn btn-outline-success">Submit</button>
      </form>
</div>
@endsection

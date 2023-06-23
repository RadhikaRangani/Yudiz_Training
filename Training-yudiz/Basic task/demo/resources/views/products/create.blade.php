<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>CRUD</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-info">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-dark" href="/">Products</a>
            </li>
        </ul>
  </nav>

    <div class="container">
       <div class="row justify-content-center pt-5">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                    <form method="post" action="/products/store" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" name="name" value = "{{old ('name')}}" class="form-control"/>
                            @if($errors->has('name'))
                                <span class="text-danger">{{$errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Description:</label>
                            <textarea class="form-control" name="description" row="4">{{old ('description')}}</textarea>
                            @if($errors->has('description'))
                                <span class="text-danger">{{$errors->first('description') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Image:</label>
                            <input type="file" name="image" class="form-control"/>
                            @if($errors->has('image'))
                                <span class="text-danger">{{$errors->first('image') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-outline-success">Submit</button>
                    </form>
                </div>
            </div>
       </div>
    </div>
</body>
</html>

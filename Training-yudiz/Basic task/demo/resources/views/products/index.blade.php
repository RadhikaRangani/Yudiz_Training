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
    <style>

        table{
            margin: 10px;
            border: 1px solid black;
            border-collapse: collapse;
            width: 100%;
        }
        th,td{
            padding: 3px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        tr:nth-child(even) {background-color: #f2f2f2;}
    </style>

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
        <div class="text-right">
            <a href="products/create" class ="btn btn-outline-info mt-2">New Products</a>
        </div>
        @if(session()->has('message'))
            <div class="mx-auto w-4/5 pb-10">
                <div class="bg-red-500 text-white font-italic rounded-t px-4 py-2" >
                    Warning
                </div>
                <div class="border border-t border-red-400 text-red-700 bg-red-100 rounded-b">
                    {{session()->get()}}
                </div>

            </div>

        @endif
        <div>
            <table>
                <tr class="p-4">
                    <th>Sr.No</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th colspan="2">Action</th>
                </tr>
                @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td><img src="{{$product->image}}" class="rounded-circle" width="50" height="50"/></td>
                    <td><a href="products/{{$product->id}}/edit" class="btn btn-success btn-sm">Edit</a></td>
                    {{-- <td>
                        <form method="POST" action="{{ route('products.destroy', $product->id) }}">
                        @method('DELETE')
                        @csrf
                        <button type="submit"  class="btn btn-danger">Delete</button>
                        {{-- <a href="{{ route('products.destroy', $product->id) }}" class="btn btn-danger btn-sm">Delete</a></td> --}}
                        </form>
                    </td> --}}
                    {{-- <td><a href="{{ route('products.destroy', $product->id) }}" class="btn btn-danger btn-sm">Delete</a></td> --}}
                        {{-- <input type="submit" value="view"{{$product->id}}></td> --}}
                </tr>
                @endforeach

            </table>
        </div>
    </div>
</body>
</html>

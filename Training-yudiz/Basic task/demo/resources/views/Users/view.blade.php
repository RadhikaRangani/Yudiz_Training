{{-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Views</title>
    </head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>

        table{
            border: 1px solid black;
            border-collapse: collapse;
            width: 100%;
        }
        th,td{
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        tr:nth-child(even) {background-color: #f2f2f2;}
    </style>

<body> --}}
    @extends('Users.main')
    @push('title')
    <title>View User</title>

    @endpush
    @section('view-section')

        <h1 style="text-align:center">View page</h1>
        <div style="overflow-x: auto;">
        <table>
            <tr>
                <th>User ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>DOB</th>
                <th>Is Active</th>
                <th>Action</th>
            </tr>
            @foreach($user_data as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->DOB}}</td>
                <td>{{$user->is_active}}</td>
                <td><a href="{{ route( 'user_detail',[$user->id,$user->is_active]) }}" class="btn btn-sm btn-info ">View</a></td>
                <!-- <td><td><a href = "{!!Route('user_detail',['user_id' => $user->id ,'is_active' => $user->is_active ])!!}"><button>View Status</button></a></td>  -->
            </tr>
            @endforeach


        </table>

        
        </div>
@endsection
{{-- </body>
</html> --}}

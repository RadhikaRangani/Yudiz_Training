<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Show User</title>
    </head>
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

<body>
    <h1 style="text-align:center">Show  page</h1>
    <div style="overflow-x: auto;">
    <table>
        <tr>
            <th>User ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>DOB</th>
            <th>Is Active</th>
        </tr>
        @foreach($user_data as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->DOB}}</td>
            <td>{{$user->is_active}}</td>
            <td><input type="submit" value="view"{{$user->id}}></td>
        </tr>
        @endforeach

    </table>
    </div>
    
</body>
</html>
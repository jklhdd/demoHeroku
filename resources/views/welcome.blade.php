<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List student</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container">
        <h3>Student list</h3>

        <div class="py-4">
            <a href="{{url('/add')}}" class="btn btn-outline-success">Add Student</a>
        </div>
        <table class="table tables-striped">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>telephone</th>
            </thead>
            <tbody>
                @foreach($list as $s)
                <tr>
                    <td>{{$s->id}}</td>
                    <td>{{$s->name}}</td>
                    <td>{{$s->age}}</td>
                    <td>{{$s->address}}</td>
                    <td>{{$s->telephone}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
</body>
</html>
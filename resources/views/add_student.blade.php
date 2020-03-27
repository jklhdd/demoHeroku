<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add student</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container">
        <h3 class="py-4">Student Form</h3>

        <form action="{{url('/add-student')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" required>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="text" class="form-control" id="age" name="age" value="{{old('age')}}" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" value="{{old('address')}}" required>
            </div>
            <div class="form-group">
                <label for="tel">Telephone:</label>
                <input type="text" class="form-control" id="tel" name="tel" value="{{old('tel')}}" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
    </div>
</body>
</html>
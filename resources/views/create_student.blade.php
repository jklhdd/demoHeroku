<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add student</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container container-color">
        <div class="row">
        <div class="col-md-6 offset-md-3 form-block">
            <form action="{{url('/danh-sach-lop-hoc')}}" method="POST" class="shadow p-5 m-5 bg-white">
                @csrf
                <div class="form-group">
                    <label for="input-name">Your name</label>
                    <input type="text" class="form-control" id="name" name="input-name" required>
                </div>
                <div class="form-group">
                    <label for="input-address">Your address</label>
                    <input type="text" class="form-control" id="address" name="input-address" required>
                </div>
                <div class="form-group">
                    <label for="input-email">Your Email</label>
                    <input type="email" class="form-control" id="email" name="input-email" required>
                </div>
                <div class="form-group">
                    <label for="input-phone">Your Phone</label>
                    <input type="tel" class="form-control" id="phone" name="input-phone" required>
                </div>
                <div class="form-group">
                    <button type= "submit" class = "btn btn-primary block" > Add student </button>
                </div>
            </form>
        </div>
        </div>
    </div>
</body>
</html>  
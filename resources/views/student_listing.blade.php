<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Listing</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container bg-light">
        <h1 class="text-center">Danh sách sinh viên</h1>
        <table class="table table-striped table-bordered text-center">
            <thead class="text-info font-weight-bold">
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone</th>
                <th></th>
            </thead>
            <tbody>
                <?php 
                    if($student != null):
                        foreach ($student as $s): ?>                
                            <tr>
                                <td><?php echo $s["name"]; ?></td>
                                <td><?php echo $s["address"]; ?></td>
                                <td><?php echo $s["email"]; ?></td>
                                <td><?php echo $s["phone"]; ?></td>
                                <td>
                                    <button type= "get" class = "btn btn-primary" >Edit</button>
                                </td>     
                            </tr>
                <?php   endforeach; 
                    endif;?>
            </tbody>
        </table>
        <div class="row py-5 ">
            <div class="col d-flex justify-content-center">
                <a href="{{url('/add-student')}}" class="btn btn-primary">Add</a>
            </div>
            <div class="col d-flex justify-content-center">
                <button type= "get" class = "btn btn-primary " >Delete</button>
            </div>
        </div>
    </div>
</body>
</html>
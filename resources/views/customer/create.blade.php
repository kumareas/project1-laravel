<!DOCTYPE html>
<html>
    <head>
        <title>Customer create </title>
        <link rel="stylesheet" type="text/CSS" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
  
    <div class="container mt-5">
        <form action="{{url('customer save')}}" method = "POST">
            @csrf
        <div class="form-group">
            <lable> name </lable>
            <input type = "text" name="name" class="form-control">
        </div>
    </div>
    <button type="submit" class="btn btn-primary form-controll">save</button>
 </div>
</body>
</html>
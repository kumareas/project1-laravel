<!DOCTYPE html>
<html>
    <head>
        <title>Customer create </title>
        <link rel="stylesheet" type="text/CSS" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



    <div class="container mt-5">
        <form action="{{url('customer-save')}}" method = "POST">
            @csrf
        <div class="form-group">
            <lable> name </lable>
            <input type = "text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <lable> Email </lable>
            <input type = "email" name="email" class="form-control">

        </div>
        <br>
        <button type="submit" class="btn btn-primary form-controll">save</button>
        </form>
        
   </div>
  </body>
</html>
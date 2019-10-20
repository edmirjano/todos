<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">

</head>
<body>
        <nav class="navbar navbar-light bg-light">
                <form class="form-inline">
                  <button href="/todos" class="btn btn-outline-success" type="button" onclick="home()">Home</button>
                  <button class="btn btn-sm btn-outline-secondary" type="button"  onclick="create()">Create New</button>
                </form>
              </nav>
    <div class="card bg-light mb-3 mx-auto" style="max-width: 18rem;">
            <div class="card-header"> {{$todo->id}}</div>
            <div class="card-body">
            <h5 class="card-title">{{$todo->name}}</h5>
              <p class="card-text">{{$todo->description}}</p>
            </div>
        <a href="/todos/{{$todo->id}}/edit" class="btn btn-info">Edit</a>
        
        <a href="/todos/{{$todo->id}}/delete" class="btn btn-danger">Delete</a>
            <script>
                    function home()
                    {
                         location.href = "/todos";
                    } 
                    function create()
                    {
                         location.href = "/create";
                    } 
                    </script>
</body>
</html>
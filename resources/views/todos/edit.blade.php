<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Krijo tudu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
</head>
<body>
    
        <nav class="navbar navbar-light bg-light">
                <form class="form-inline">
                  <button href="/todos" class="btn btn-outline-success" type="button" onclick="home()">Home</button>
                  <button class="btn btn-sm btn-outline-secondary" type="button"  onclick="create()">Create New</button>
                </form>
              </nav>
    <form  action="/update-todo/{{$todo->id}}" method="POST">
            @csrf
            @if($errors->any())
            @foreach ($errors->all() as $item)
            <h1>{{$item}}</h1><br>
            @endforeach
            @endif
        <div class="form-group">
            <input type="hidden" value="{{$todo->id}} ">
          <label for="exampleFormControlInput1">Emri</label>
        <input type="text" class="form-control" name="title" id="exampleFormControlInput1" value="{{$todo->name}}">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">tuduja</label>
          <textarea class="form-control " id="exampleFormControlTextarea1" rows="3"  name='description' >{{$todo->description}}</textarea>

        </div>
        <input type="submit" value="po e shtype vdes">
      </form>
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
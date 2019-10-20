<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
</head>
<body>
        <nav class="navbar navbar-light bg-light">
                <form class="form-inline">
                  <button href="/todos" class="btn btn-outline-success" type="button" onclick="home()">Home</button>
                  <button class="btn btn-sm btn-outline-secondary" type="button"  onclick="create()">Create New</button>
                </form>
              </nav>
              <div class="card-header">
                    Todos
                  </div>
    <table>
        <tr>
            @foreach ($todos as $t)
                <ul class="list-group list-group-horizontal-sm">
                    <li class="list-group-item">
                        {{$t->id}}
                    </li>
                    <li class="list-group-item">
                            {{$t->name}}
                    </li>
                    <li class="list-group-item">
                    <a href="/todos/ {{$t->id}}">view</a>
                    </li>
                </ul>
            @endforeach
        </tr>
    </table>
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
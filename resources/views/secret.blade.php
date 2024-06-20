<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link active" href="{{route('logout')}}"><button type="button" class="btn btn-primary">salir</button></a>
        </li>    
    </ul>
    <h1>hola desde secret</h1>

    <div>
        <ul>
            <li><a href="{{route('create')}}" >Agregar categoria</a></li>
            <a href="{{route('categoria.index')}}">Lista Categoria</a>
            <li>ejemplo</li>
            <li>ejemplo</li>
        </ul>
    </div>

</body>
</html>
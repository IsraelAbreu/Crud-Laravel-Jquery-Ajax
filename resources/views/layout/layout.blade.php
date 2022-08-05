<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Controle de Objetos</title>
    <style>
      .container-cadastro{
        width: 300px;
      }
    </style>
</head>
<body>
    <ul class="nav justify-content-center mt-5">
        <li class="nav-item">
          <a class="btn btn-primary" href="{{route('index.view')}}">Inicio</a>
        </li>
    </ul>
    
    <div id="conteudo">
        <div class="container">
          <hr>
            @yield('content')
        </div>
    </div>
    <script type="text/javascript" src="{{asset('js/index.js')}}"></script>
</body>
</html>
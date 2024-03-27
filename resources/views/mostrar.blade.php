<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

    body {
        font-family: "Roboto", sans-serif;
        font-weight: 100;
        font-style: normal;
    }
    label { 
        font-weight: bold;
    }
    
    </style>
    <title>Mostrar</title>
</head>
<body>
    <header>
        <h2>
            Conteúdo:
        </h2>
    </header>
    <div>
        <form action="{{route('logins.destroy',['candidato' => $candidato->id])}}" method="POST">
            @csrf
            @method('DELETE')
            <label for=""> Nome :</label>
        <li>{{$candidato ->name}}</li>
        <br> 
        <label for="">Telefone :</label>
        <li>{{$candidato ->telefone}}</li>
        <br>
        <button type="submit">Deletar</button>
        </form>
    </div>
    <a href="{{route('logins.index')}}">Voltar</a>
</body>
</html>
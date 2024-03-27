<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/lista.css') }}" rel="stylesheet">
    <style>
   @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

    body {
    font-family: "Roboto", sans-serif;
    font-weight: 100;
    font-style: normal;
    }

    ul {
    list-style: none;
    padding: 0;
    margin: 0;
    }
    </style>

    <title>Lista</title>
</head>
<header>
    <h2>Lista</h2>
</header>
<body>
    <div>
        <a href="{{route('logins.create')}}">Criar</a>
        <ul>
            @foreach ($candidatos as $candidato)
                <li> {{$candidato -> name}}</li>
                <li> {{$candidato -> telefone}}</li>
                <a href="{{route('logins.edit', ['candidato' => $candidato->id])
                }}">Editar</a> | <a href="{{route('logins.show', ['candidato' => $candidato->id])}}">Deletar</a> | <a href="{{route('logins.show', ['candidato' => $candidato->id])}}">Mostrar</a>
            @endforeach
        </ul>
    </div>
</body>
</html>
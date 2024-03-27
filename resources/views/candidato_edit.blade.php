<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/edit.css') }}" rel="stylesheet">
 <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

    body{
    font-family: "Roboto", sans-serif;
  font-weight: 100;
  font-style: normal;
    }
 </style>
    <title>Editar</title>
</head>
<body>
    <h2>Editar</h2>
    <div>
        @if(session()->has('message'))
        {{session() -> get('message')}}
        @endif
        <form action="{{route('logins.update',['candidato' => $candidato->id])}}" method="POST">
            @csrf()
            @method('PUT')
            <input type="hidden" name="_method" value="PUT" >
            <input type="text" name="name" value="{{$candidato->name}}">
            <input type="text" name="telefone" value="{{$candidato ->telefone}}">
            <button type="submit"> Enviar</button>
        </form>
    </div>
    <a href="{{route('logins.index')}}">Voltar</a>
</body>
</html>
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
            background-color: #343a40; /* Cor de fundo escura */
            color: #fff; /* Cor do texto branca */
    }
    .container{
        margin-top: -200px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
    }
    .card {

            background-color: #212529; /* Cor de fundo escura para o card */
            border-color: #343a40; /* Cor da borda do card */
            width: 400px; /* Largura do card */
        }

        .card-header {
            background-color: #343a40; /* Cor de fundo escura para o cabeçalho do card */
            color: #fff; /* Cor do texto branco para o cabeçalho do card */
        }

        label {
            font-weight: bold;
            color: #fff; /* Cor do texto branco para os rótulos */
        }

        li {
            color: #fff; /* Cor do texto branco para as informações */
        }

        .btn-edit {
            margin-top: 20px; /* Espaçamento superior para o botão de editar */
        }

 </style>
    <title>Editar</title>
</head>
<body>
    <div class="text-center">
        <h2>Editar</h2>
    </div>
    
    <div class="container">
        @if(session()->has('message'))
        {{session() -> get('message')}}
        @endif
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Editar Contato</h2>
            </div>
            <form action="{{route('logins.update',['candidato' => $candidato->id])}}" method="POST">
            @csrf()
            @method('PUT')
           
            <input type="hidden" name="_method" value="PUT" >
            <br>
            <div class="form-group">
                <label for="nome">Nome :</label>
                <input type="text" name="name" value="{{$candidato->name}}">
            
            </div>
            <br>
             <div class="form-group">
                <label for="nome">Telefone :</label>
                <input type="text" name="telefone" value="{{$candidato ->telefone}}">
             </div>

            <br>
            <div class="text-center">
                <button type="submit" class="btn btn-primary"> Enviar</button>
                <a href="{{route('logins.index')}}" class="btn btn-danger">Voltar</a>
            </div>
        </form>
        </div>
    </div>
    
</body>
</html>
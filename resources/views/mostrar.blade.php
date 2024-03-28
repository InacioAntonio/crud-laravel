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
            background-color: #343a40; /* Cor de fundo escura */
            color: #fff; /* Cor do texto branca */
        }

        .container {
            margin-top: -100px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background-color: #212529; /* Cor de fundo escura para o card */
            border-color: #343a40; /* Cor da borda do card */
            width: 400px;
            color: white;
        }

        .card-header {
            background-color: #343a40; /* Cor de fundo escura para o cabeçalho do card */
            color: #ffff; /* Cor do texto branco para o cabeçalho do card */
        }

        label {
            font-weight: bold;
            color: #fff; /* Cor do texto branco para os rótulos */
        }

        li {
            color: #fff; /* Cor do texto branco para as informações */
        }
        .action-links .btn {
        margin-right: 5px;
    }
    </style>
    <title>Mostrar</title>
</head>
<body>
    <header class="text-center">
        <h2>
            Conteúdo:
        </h2>
    </header>
    <div class="container">
        <div class="card">
            <form action="{{route('logins.destroy',['candidato' => $candidato->id])}}" method="POST">
            @csrf
            @method('DELETE')

            <div class="card-hearder">
                <h2 class="text-center">Detalhes do Contato :</h2>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label for=""> Nome :</label>
                    <li>{{$candidato ->name}}</li>
                </div>
            <br> 
            <div class="form-group">
            <label for="">Telefone :</label>
            <li>{{$candidato ->telefone}}</li>
            </div>
        <br>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger">Deletar</button>
        </div>
        </form>
        </div>
    </div>
    <div class="text-center">
        <a href="{{route('logins.index')}}" class="btn btn-primary">Voltar</a>
    </div>
    
</body>
</html>
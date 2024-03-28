<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Exemplo de Crud</title>
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
            margin-top: 50px;
        }

        .form-group {
             display: flex;
            justify-content: center;
            align-items: center;
           
            margin-bottom: 20px;
        }
        .form-control {
            width: 300px; /* Largura dos campos de entrada */
            
        }
        .center-form {
           
        }

    </style>
</head>

<body>
    <div class="container ">

        <div class="text-center">
            <h2>Cadastro de Contato</h2>
        </div>
        <br>
    <form action="{{route('logins.store')}}" method="POST" >
        <div class="text-center">
            @if(session()->has('message'))
        {{session() -> get('message')}}
        @endif
        </div>
        <br>
        @csrf()
        <br>
        <div class="form-group">
        <label for="Nick"  >Nome: </label>
        <input type="text" class="form-control" placeholder="Digite o seu Nome" name="name" required>
        </div>
        <br>
        <div class="form-group">
            <label for="Telefone " >Telefone: </label>
        <input type="tel" class="form-control" placeholder="Digite o seu Telefone" name="telefone" required>
        
        </div>
        <br>
        <div class="text-center">
            <button type="submit" class="btn btn-primary " > Enviar o Cadastro </button>
            <a href="{{ route('logins.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
        
    </form>
</body>
</html>

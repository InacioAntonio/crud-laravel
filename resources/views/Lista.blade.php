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
    background-color: #343a40; /* Cor de fundo escura */
      color: #fff; /* Cor do texto branca */
    }
    .contact-item {
      margin-bottom: 10px;
    }
   
    /* Estilo para os links */
    .action-links {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 5px; /* Espaçamento superior */
    }

    /* Estilo para separador */
    .separator {
      border-right: 1px solid #ccc;
      height: 100%;
      margin: 0 10px;
    }

    ul {
    list-style: none;
    padding: 0;
    margin: 0;
    }
    
    .action-links .btn {
      margin-right: 5px;
    }
    </style>

    <title>Lista</title>
</head>

<body>
    <div class="container">
        <div class="text-center">
            <h2>Lista de Contatos :</h2>
        <a href="{{route('logins.create')}}" class="btn btn-primary">Criar</a>
        </div>
        <ul class="list-group ">
            @foreach ($candidatos as $candidato)
                <li class="list-group-item contact-item d-flex justify-content-between align-items-center">
                    <div>
                        <div><strong>Nome : </strong><span class="contact-name"> {{$candidato -> name}}</span></div> 
                        <div class="separator"></div> 
                        <div> <strong> Telefone:</strong><span class="contact-telefone"> {{$candidato -> telefone}}</span></div> 
                    </div>
                    <div class="action-links">
                        <a href="{{route('logins.edit', ['candidato' => $candidato->id])
                        }}" class="btn btn-primary">Editar</a>
                        <div class="separator"></div>
                        <a href="{{route('logins.show', ['candidato' => $candidato->id])}}" class="btn btn-danger">Deletar</a> 
                        <div class="separator"></div>
                        <a href="{{route('logins.show', ['candidato' => $candidato->id])}}"class="btn btn-secondary">Mostrar</a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <script>
        
      </script>
</body>
</html>
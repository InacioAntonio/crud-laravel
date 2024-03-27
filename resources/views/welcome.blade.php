<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Exemplo de Crud</title>
    <style>
        
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

    .body{
    font-family: "Roboto", sans-serif;
    font-weight: 100;
    font-style: normal;
    }
    </style>
</head>

<body>
    <h2>Criar</h2>
    
    <form action="{{route('logins.store')}}" method="POST" >
        @if(session()->has('message'))
        {{session() -> get('message')}}
        @endif
        @csrf()
        <label for="Nick" >Nome: </label>
        <input type="text" placeholder="Digite o seu Nome" name="name" >
        <br/> <br/>

        <label for=" ">Telefone: </label>
        <input type="text" placeholder="Digite o seu Telefone" name="telefone" >
        <br/> <br/>

        <button type="submit"> Enviar o Cadastro </button>
    </form>
</body>
</html>

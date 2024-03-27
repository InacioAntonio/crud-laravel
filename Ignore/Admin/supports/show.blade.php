<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
</head>
<body>
    <h1>
        Detalhes da duvida {{$support->id}}
    </h1>
    <ul>
        <li>
           Assunto: {{$support->subject }}
           
        </li>
        <li>
            Status:  {{$support->Status}}
           
        </li>
        <li>
             Descrição: {{$support->body}}
        </li>
    </ul>
    <form action="{{route('support,destroy', $support->id)}}" method="POST">
        @csrf()
        @method('DELETE')
        <button type="submit">Deletar</button>
    </form>
</body>
</html>
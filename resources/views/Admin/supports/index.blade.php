<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fórum</title>
</head>
<body>
    <a href="{{route('support.create')}}">Criar Duvida</a>
    <div>
        <h1>Listagem do Suporte</h1>
        <table>
            <thead>
                <th>Assunto</th>
                <th>Status</th>
                <th>Descricao</th>
                <th></th>

            </thead>
            <tbody>
                @foreach( $supports as $support)
                <tr>
                    <td>
                        {{$support->subject}}
                    </td>
                    <td>
                        {{$support->status}}
                    </td>
                    <td>
                        {{$support->body}}
                    </td>
                    <td>
                        <a href="{{route('support.show',$support->id)}}">ir</a>
                        <a href="{{route('support.edit',$support->id)}}">Editar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
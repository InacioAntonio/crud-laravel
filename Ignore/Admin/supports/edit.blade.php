<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Dúvida </title>
</head>
<body>
    <h1>Duvida {{$support->id}}</h1>
    @if($errors->any())
        @foreach ($errors->all() as $error)
            {{$error}}
        @endforeach
    @endif
    <form action="{{route('support.update',$support->id)}}" method="POST">
        @csrf()
        @method('PUT')
        <input type="text" placeholder="Assunto" name="subject" value="{{$support->subject}}" />
        <input type="hidden"/>
        <textarea name="body"  cols="30" rows="10" placeholder="Descrição">{{$support->body}}</textarea>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
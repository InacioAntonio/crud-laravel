<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nova Duvida </title>
</head>
<body>
    @if($errors->any())
        @foreach ($errors->all() as $error)
            {{$error}}
        @endforeach
    @endif
    <form action="{{route('support.store')}}" method="POST">
        @csrf()
        <input type="text" placeholder="Assunto" name="subject" value="{{old('subject')}}" />
        <input type="hidden"/>
        <textarea name="body"  cols="30" rows="10" placeholder="Descrição">{{old('body')}}</textarea>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
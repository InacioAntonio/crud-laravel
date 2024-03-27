<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Crud</title>
</head>
<body>
    <form action="/cadastrar-candidato" >
        @csrf()
        <label for="Nick" >Nome: </label>
        <input type="text" placeholder="Digite o seu Nome" name="nome_candidato" >
        <br/> <br/>

        <label for=" ">Telefone: </label>
        <input type="text" placeholder="Digite o seu Telefone" name="telefone_candidato" >
        <br/> <br/>

        <button> Enviar o Cadastro </button>
    </form>
</body>
</html>
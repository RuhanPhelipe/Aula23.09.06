<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar de Clientes</title>
</head>
<body>
    <a href="{{route('clientes.index')}}">Voltar</a>
    <br>
    <label>ID: </label>{{$data['id']}}
    <br>
    <label>Nome: </label>{{$data['nome']}}
    <br>
    <label>E-mail: </label>{{$data['email']}}
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar de Clientes</title>
</head>
<body>
    <a href="{{route('veterinarios.index')}}">Voltar</a>
    <br>
    <label>CRMV: </label>{{$data['CRMV']}}
    <br>
    <label>Nome: </label>{{$data['nome']}}
    <br>
    <label>Especialidade: </label>{{$data['especialidade']}}
</body>
</html>
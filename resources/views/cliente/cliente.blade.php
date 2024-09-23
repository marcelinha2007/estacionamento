<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Arquivo CSS -->
</head>
<body>
    <h1>Cadastrar Cliente</h1>

    <form action="{{ route('cliente.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="Nome_Pessoa" required><br><br>

        <label for="celular">Número de Celular:</label>
        <input type="text" id="celular" name="Numero_Celular" required><br><br>

        <input type="submit" value="Cadastrar Cliente">
    </form>
</body>
</html>
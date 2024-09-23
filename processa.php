<?php
// Conectando ao banco de dados
$host = "localhost";
$user = "root"; // Usuário padrão do MySQL no XAMPP
$password = ""; // Senha em branco, padrão no XAMPP
$dbname = "estacionamento_db"; // Nome do banco de dados

// Criando a conexão
$conn = new mysqli($host, $user, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Consulta para buscar dados das tabelas Cliente, Carro e Estacionamento
$sql = "SELECT Cliente.Nome_Pessoa, Carro.Nome_Carro, Estacionamento.Hora_Entrada, Estacionamento.Hora_Saida, Estacionamento.Valor 
        FROM Estacionamento
        INNER JOIN Cliente ON Estacionamento.ClienteID = Cliente.ClienteID
        INNER JOIN Carro ON Estacionamento.CarroID = Carro.CarroID";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estacionamento</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

<h1>Relatório de Estacionamento</h1>

<table>
    <tr>
        <th>Nome do Cliente</th>
        <th>Nome do Carro</th>
        <th>Hora de Entrada</th>
        <th>Hora de Saída</th>
        <th>Valor</th>
    </tr>

    <?php
    // Verificando se há resultados
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['Nome_Pessoa'] . "</td>";
            echo "<td>" . $row['Nome_Carro'] . "</td>";
            echo "<td>" . $row['Hora_Entrada'] . "</td>";
            echo "<td>" . $row['Hora_Saida'] . "</td>";
            echo "<td>" . $row['Valor'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>Nenhum registro encontrado</td></tr>";
    }
    ?>

</table>

</body>
</html>

<?php
$conn->close();
?>

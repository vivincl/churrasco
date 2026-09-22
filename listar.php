<?php
require_once("conexao.php");

$sqlLista = "SELECT * FROM participantes";
$resultadoLista = $mysqli->query($sqlLista);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
</head>
<body>
    <table border='1px'>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Turma</th>
                <th>Tipo</th>
                <th>Presença</th>
                <th>Pagamento</th>
                <th colpsan="2">Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
<?php
while ($participante = $resultadoLista->fetch_assoc()) {
    echo "<td>" . $participante['nome'] . "</td>
    <td>" . $participante['turma'] . "</td>
    <td>" . $participante['tipo'] . "</td>
    <td>" . $participante['presenca'] . "</td>
    <td>" . $participante['pagamento'] . "</td>
    <td><a href='editar.php?id=". $participante['id'] . "'>Editar</a></td>
    <td><a href='excluir.php?id=". $participante['id'] . "'>Excluir</a></td>
    </tr>";
}
?>
            </tr>
        </tbody>
    </table>
    
    <form action="" method="get">
        <label for="nomePesquisa">Pesquisar participante</label>
        <input type="text" name="nomePesquisa" id="nomePesquisa">
        <button>Pesquisar</button>
    </form>

<?php
if (isset($_GET['nomePesquisa'])) {
    $pesquisa = $_GET['pesquisa'];

    $sql = "SELECT nome FROM participantes WHERE nome LIKE '%$pesquisa%'";
    $resultadoPesquisa = $mysqli->query($sql);

    while ($participante = $resultadoPesquisa->fetch_assoc()) {
        echo "<p>" . $participante['nome'] . "</p>";
    }
}
?>

    <form action="" method="get">
        Pagamento
        <select name="pagamento">
            <option value="todos">Todos</option>
            <option value="pagos">Pagos</option>
            <option value="pendentes">Pendentes</option>
        </select>

        Presença
        <select name="presenca">
            <option value="todos">Todos</option>
            <option value="confirmados">Confirmados</option>
            <option value="naoConfirmados">Não confirmados</option>
        </select>

        <button>Filtrar</button>
    </form>

<?php
if (isset($_GET['pagamento'])) {
    $pesquisa = $_GET['pesquisa'];

    $sql = "SELECT nome FROM participantes WHERE nome LIKE '%$pesquisa%'";
    $resultadoPesquisa = $mysqli->query($sql);

    while ($participante = $resultadoPesquisa->fetch_assoc()) {
        echo "<p>" . $participante['nome'] . "</p>";
    }
}
?>
</body>
</html>
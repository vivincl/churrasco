<?php
require_once("conexao.php");

if (isset($_GET['pagamento'])) {
    $pagamento = $_GET['pagamento'];
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <form action="" method="get">
        <label for="nomePesquisa">Pesquisar participante</label>
        <input type="text" name="nomePesquisa" id="nomePesquisa">
        <button>Pesquisar</button>
    </form>

    <br>
    <form action="" method="get">
        Pagamento: 
        <select name="pagamento">
            <option value='-1'>Selecione</option>
            <option value="todos">Todos</option>
            <option value="pagos">Pagos</option>
            <option value="pendentes">Pendentes</option>
        </select>
        <br>

        Presença: 
        <select name="presenca">
            <option value='-1'>Selecione</option>
            <option value="todos">Todos</option>
            <option value="confirmados">Confirmados</option>
            <option value="naoConfirmados">Não confirmados</option>
        </select>
        <br>
        <button>Filtrar</button>
    </form>

    <br>

    <table border='1px'>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Turma</th>
                <th>Telefone</th>
                <th>Tipo de churrasco</th>
                <th>Acompanhamento</th>
                <th>Confirmado</th>
                <th>Pago</th>
                <th colspan="2">Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
<?php
    if ($pagamento === "-1") {
        echo "";
    }

    if ($pagamento === "todos") {
        $sqlLista = "SELECT * FROM participantes";
        $resultadoLista = $mysqli->query($sqlLista);
    
        // while ($participante = $resultadoPagamento->fetch_assoc()) {
        //     echo "<p>" . $participante['nome'] . "</p>";
        // }
        while ($participante = $resultadoLista->fetch_assoc()) {
            echo "<td>" . $participante['nome'] . "</td>
            <td>" . $participante['turma'] . "</td>
            <td>" . $participante['telefone'] . "</td>
            <td>" . $participante['tipo_churrasco'] . "</td>
            <td>" . $participante['acompanhamento'] . "</td>
            <td>" . $participante['confirmado'] . "</td>
            <td>" . $participante['pago'] . "</td>
            <td><a href='editar.php?id=". $participante['id'] . "'>Editar</a></td>
            <td><a href='excluir.php?id=". $participante['id'] . "'>Excluir</a></td>
            </tr>";
        }
    }

    else if ($pagamento === "pagos") {
        $sqlListaPagos = "SELECT * FROM participantes where pago = 1";
        $resultadoListaPagos = $mysqli->query($sqlListaPagos);
    
        // while ($participante = $resultadoPagamento->fetch_assoc()) {
        //     echo "<p>" . $participante['nome'] . "</p>";
        // }
        while ($participante = $resultadoListaPagos->fetch_assoc()) {
            echo "<td>" . $participante['nome'] . "</td>
            <td>" . $participante['turma'] . "</td>
            <td>" . $participante['telefone'] . "</td>
            <td>" . $participante['tipo_churrasco'] . "</td>
            <td>" . $participante['acompanhamento'] . "</td>
            <td>" . $participante['confirmado'] . "</td>
            <td>" . $participante['pago'] . "</td>
            <td><a href='editar.php?id=". $participante['id'] . "'>Editar</a></td>
            <td><a href='excluir.php?id=". $participante['id'] . "'>Excluir</a></td>
            </tr>";
        }
    }
}
?>
            </tr>
        </tbody>
    </table>

    <br>

<?php
if (isset($_GET['nomePesquisa'])) {
    $pesquisa = $_GET['nomePesquisa'];

    $sql = "SELECT nome FROM participantes WHERE nome LIKE '%$pesquisa%'";
    $resultadoPesquisa = $mysqli->query($sql);

    while ($participante = $resultadoPesquisa->fetch_assoc()) {
        echo "<p>Nome: " . $participante['nome'] . "</p>";
    }
}
?>
</body>
</html>
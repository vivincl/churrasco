<?php
require_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
</head>
<body>
    <form action="" method="get">
        <label for="nomePesquisa">Pesquisar participante:</label>
        <input type="text" name="nomePesquisa" id="nomePesquisa">
        <button>Pesquisar</button>
    </form>

<?php
if (isset($_GET['nomePesquisa'])) {
    $pesquisa = $_GET['nomePesquisa'];

    if ($pesquisa === "") echo "";

    else {
        $sql = "SELECT nome FROM participantes WHERE nome LIKE '%$pesquisa%'";
        $resultadoPesquisa = $mysqli->query($sql);

        while ($participante = $resultadoPesquisa->fetch_assoc()) {
            echo "<p>Nome: " . $participante['nome'] . "</p>";
        }
    }
}
?>
    
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
if (isset($_GET['pagamento'])) {
    $pagamento = $_GET['pagamento'];
    
    if ($pagamento === "-1") {
        echo "";
    }

    else if ($pagamento === "todos") {
        $sqlLista = "SELECT * FROM participantes";
        $resultadoLista = $mysqli->query($sqlLista);

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

    else if ($pagamento === "pendentes") {
        $sqlListaPendentes = "SELECT * FROM participantes where pago = 0";
        $resultadoListaPendentes = $mysqli->query($sqlListaPendentes);
    
        while ($participante = $resultadoListaPendentes->fetch_assoc()) {
            echo "<td>" . $participante['nome'] . "</td>
            <td>" . $participante['turma'] . "</td>
            <td>" . $participante['telefone'] . "</td>
            <td>" . $participante['tipo_churrasco'] . "</td>
            <td>" . $participante['acompanhamento'] . "</td>
            <td>" . $participante['confirmado'] . "</td>
            <td>" . $participante['pago'] . "</td>
            <td><a href='editar.php?id=". $participante['id'] . "'>Editar</a></td>
            <td><a href='excluir.php?id=". $participante['id'] . "'>Excluir</a></td>
            </tr> 
        </tbody>
    </table><br>";
        }
    }
}
?>

</body>
</html>
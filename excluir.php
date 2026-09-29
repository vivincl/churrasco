<?php
require_once("conexao.php");

$id = $_GET['id'];

$sql = "DELETE FROM participantes WHERE id = $id";

if ($mysqli->query($sql)) {
    echo "Participante deletado com sucesso!
    <p><a href='listar.php'>Voltar para a <b>lista de séries</b></a></p>";
} else {
    echo "Erro ao deletar o participante " . $mysqli->error;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
</body>
</html>
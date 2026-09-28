<?php
require_once('conexao.php');

if(
    isset($_POST['nome']) &&
    isset($_POST['turma']) &&
    isset($_POST['telefone']) &&
    isset($_POST['tipo']) &&
    isset($_POST['acompanhamento'])&& 
    isset($_POST['confirmado'])&&
    isset($_POST['pago'])
){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $turma = $_POST['turma'];
    $telefone = $_POST['telefone'];
    $tipo = $_POST['tipo'];
    $acompanhamento = $_POST['acompanhamento'];
    $confirmado = $_POST['confirmado'];
    $pago = $_POST['pago'];

    $sql = "UPDATE participantes SET nome = '" . $nome . "',
        turma = '" . $turma . "', 
        telefone = '" . $telefone . "',
        tipo_churrasco = '" . $tipo . "', 
        acompanhamento = '$acompanhamento', 
        confirmado = $confirmado, 
        pago = $pago WHERE id = $id";

    $resultado = $mysqli->query($sql);
    echo "Atualizado com sucesso";
    echo "<a href='listar.php'>Voltar para a lista de participantes</a>";
} else {
    echo "Não foi possível atualizar." . $mysqli->error;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
</body>
</html>
<?php
require_once("conexao.php");

$id = $_GET['id'];

$sql = "SELECT * FROM participantes WHERE id = $id";
$resultado = $mysqli->query($sql);

$participante = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <form action="atualizar.php" method="post">
        <h2>Edite o participante</h2>
<?php
    echo "<input type='text' value='" . $_GET['id'] . "' name='id' hidden>";
?>
        <label for="">Nome: <input type="text" name="nome"></label>
        <br><br>

        <label for="">Turma: <input type="text" name="turma"></label>
        <br><br>

        <label for="">Telefone: <input type="text" name="telefone"></label>
        <br><br>

        <label for="">Tipo de churrasco: <input type="radio" name="tipo" value="vegetariano"> Vegetariano
        <input type="radio" name="tipo" value="normal">Normal</label>
        <br><br>

        <label for="">Acompanhamento: <input type="text" name="acompanhamento"><br>
        <br>

        <label for="">Presença confirmada:<input type="radio" name="presenca" value="1">Sim</label>
        <label for=""><input type="radio" name="presenca" value="0">Não</label>
        <br>

        <label for="">Pagamento: <input type="radio" name="pago" value="1">Sim</label>
        <label for=""><input type="radio" name="pago" value="0">Não</label>

        <br><br>
        <button type="submit" name="botao">Editar</button>
    </form>
</body>
</html>
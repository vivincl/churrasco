<?php

require_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de novos jogos</title>
</head>
<body style="display: flex; flex-direction:column;">
    <form action="salvar.php" method="post">
        <h2>Cadastre o participante</h2>
        <p>Insira as informações</p>
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
        <label for="">Presença confirmada:<input type="radio" name="presença" value="sim">Sim</label>
        <label for=""><input type="radio" name="presença" value="nao">Não</label>

        <button type="submit" name="botao">Salvar</button>
    </form>
    
</body>
</html>
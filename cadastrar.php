<?php

require_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de novos participantes</title>
    
</head>
    
<body style="display: flex; flex-direction:column;">
    <form action="salvar.php" method="post" id="form_cadastrar">
        <h2>Cadastre o participante</h2>
        <p>Insira as informações</p>
        <label for="">Nome: <input type="text" name="nome" required></label>
        <br><br>
        <label for="">Turma: <input type="text" name="turma" required></label>
        <br><br>
        <label for="">Telefone: <input type="text" name="telefone"></label>
        <br><br>
        <label for="">Tipo de churrasco: <input type="radio" name="tipo" value="vegetariano" required> Vegetariano
                <input type="radio" name="tipo" value="normal">Normal</label>
        <br><br>
        <label for="">Acompanhamento: <input type="text" id="acompanhamento" name="acompanhamento"><br>
        <br>
        <label for="">Presença confirmada:<input type="radio" name="presenca" value="1">Sim</label>
        <label for=""><input type="radio" name="presenca" value="0">Não</label>
        <br>
        <label for="">Pagamento <input type="radio" name="pago" value="1">Sim</label>
        <label for=""><input type="radio" name="pago" value="0">Não</label>
        
        <button type="submit" name="botao">Salvar</button>
    </form>
    
    
    <script src="script2.js"></script>
</body>
</html>

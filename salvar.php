<?php

require_once('conexao.php');
require_once('cadastrar.php');
if(
    isset($_POST['nome']) &&
    isset($_POST['turma']) &&
    isset($_POST['telefone']) &&
    isset($_POST['tipo']) &&
    isset($_POST['acompanhamento'])&& 
    isset($_POST['presença'])
){

    $nome = $_POST['nome'];
    $categoria = $_POST['turma'];
    $patrimonio = $_POST['telefone'];
    $estado = $_POST['tipo'];
    $disponivel = $_POST['acompanhamento'];


    $sql = "INSERT INTO equipamentos (nome, categoria, patrimonio, estado, disponivel) values('".$nome."','".$categoria."','". $patrimonio."','".$estado."','".$disponivel."')";
    $resultado = $mysqli->query($sql);
    echo "Salvo com sucesso";
    echo " <a href='listar.php'>Voltar para a lista de jogos</a> <?php";
}
else {
    echo "Não foi possível salvar";
}
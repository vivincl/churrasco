<?php

require_once('conexao.php');
require_once('cadastrar.php');
if(
    isset($_POST['nome']) &&
    isset($_POST['turma']) &&
    isset($_POST['telefone']) &&
    isset($_POST['tipo']) &&
    isset($_POST['acompanhamento'])&& 
    isset($_POST['presenca'])&&
    isset($_POST['pago'])){ ?>

<?php


    $nome = $_POST['nome'];
    $turma = $_POST['turma'];
    $telefone = $_POST['telefone'];
    $tipo = $_POST['tipo'];
    $acompanhamento = $_POST['acompanhamento'];
    $presenca = $_POST['presenca'];
    $pago = $_POST['pago'];


    $sql = "INSERT INTO participantes (nome, turma, telefone, tipo_churrasco, acompanhamento, confirmado,pago) values('".$nome."','".$turma."','". $telefone."','".$tipo."','".$acompanhamento."',".$presenca.",".$pago.")";
    $resultado = $mysqli->query($sql);
    echo "Salvo com sucesso";
    echo " <a href='listar.php'>Voltar para a lista de participantes</a> <?php";

}
else {
    echo "Não foi possível salvar";
}?>


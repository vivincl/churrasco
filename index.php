<?php
require_once('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumo do Churrasco</title>
</head>
<body>
    <h1>CHURRASCO DA SEMANA FARROUPILHA</h1>

    <?php
    
    $totalInscritos = "SELECT COUNT(*) as total FROM PARTICIPANTES";
    $rti = ($mysqli->query($totalInscritos))->fetch_assoc()['total'];
    echo "Total de inscritos: " . $rti;
    $confirmados = "SELECT COUNT(*) FROM PARTICIPANTES WHERE CONFIRMADO = 1";
    $rti = ($mysqli->query($totalInscritos))->fetch_assoc()['total'];
    echo "Total de inscritos: " . $rti;
    $naoConfrimar = "SELECT COUNT(*) FROM PARTICIPANTES WHERE CONFIRMADO = 0";
    $rti = ($mysqli->query($totalInscritos))->fetch_assoc()['total'];
    echo "Total de inscritos: " . $rti;
    $pagamentosRealizados = "SELECT COUNT(*) FROM PARTICIPANTES WHERE PAGO = 1";
    $rti = ($mysqli->query($totalInscritos))->fetch_assoc()['total'];
    echo "Total de inscritos: " . $rti;
    $pagamentosPendentes = "SELECT COUNT(*) FROM PARTICIPANTES WHERE PAGO = 0";
    $rti = ($mysqli->query($totalInscritos))->fetch_assoc()['total'];
    echo "Total de inscritos: " . $rti;
    $churrascoTradicional = "SELECT COUNT(*) FROM PARTICIPANTES WHERE TIPO_CHURRASCO = 'Normal";
    $rti = ($mysqli->query($totalInscritos))->fetch_assoc()['total'];
    echo "Total de inscritos: " . $rti;
    $vegetariano = "SELECT COUNT(*) FROM PARTICIPANTES WHERE TIPO_CHURRASCO = 'Vegetariano";
    $rti = ($mysqli->query($totalInscritos))->fetch_assoc()['total'];
    echo "Total de inscritos: " . $rti;
    
    
    
    
    
    
    
    ?>


    <!-- sql pra mostrar o total -->

    Confirmados:
    <!-- código pra mostrar quantidade de confirmados -->
    Não confirmados:
    <!-- código pra mostrar quantidade de não confirmados -->

    Pagamentos realizados:
    <!--  código pra mostrar quantidade de pagamentos realizados-->
    Pagamentos pendentes:
    <!--  código pra mostrar quantidade de pagamentos realizados-->

    Churrasco tradicional:
    <!--  código pra mostrar quantidade de pagamentos realizados-->
    Vegetariano:
    <!--  código pra mostrar quantidade de pagamentos realizados-->
</body>
</html>
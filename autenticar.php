
<?php
require_once('conexao.php');
if(isset($_GET['email']) && isset($_GET['senha'])){
    $email = $_GET['email'];
    $senha1 = $_GET['senha'];

    $sql = "SELECT senha from usuarios where email = '$email'";
    $resultado = $mysqli->query($sql);
    while($senhas = $resultado->fetch_assoc()){
        if($senhas['senha'] == $senha1){
            echo 'Login realizado!';?>
            <script src="script.js"><?php

        }
        else{echo 'Login falhou';}
    }


}?>
</script>
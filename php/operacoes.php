<?php
    
    $valor = $_POST['valor'];
    $operacao = $_POST['operacao'];
    switch($operacao) {
case "saque":echo "Saldo parcial ".$saldo -= $valor;
    break;
case "deposito":echo "Saldo parcial ".$saldo += $valor;
    break;
    
    }
    
    ?>
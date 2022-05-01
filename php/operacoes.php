<?php

session_start();

$BR = "<br>";
$HR = "<hr>";
$valor = $_POST['valor'];
$operacao = $_POST['operacao'];



   

switch ($operacao) {
case "saque":

        $_SESSION['saldo'] -= $valor;
        $msg = "Saque no valor de ".$valor;
    
      
           
           
    
        
        
    
    break;
case "deposito": 

        $_SESSION['saldo'] += $valor;
        $msg = "Depósito no valor de ".$valor;
    
        
        
    
    
    break;
case "extrato": 
  header('Location: extrato.php');
                
    break;    
}

array_push($_SESSION['historicoDeOperacoes'], $msg);

echo ("Nome: " . $_SESSION['nome'] . $BR);

echo ("Conta: " . $_SESSION['conta'] . $BR);

echo ("Saldo: " . $_SESSION['saldo'] . $BR);
echo("<input type='button' value='sair' onclick=window.location.href='./Index.php'>");

echo ($HR);
echo ($BR);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta</title>
</head>

<body>
    <h1>Bem-vindo a sua conta <?php echo $_SESSION['nome']; ?> !</h1>
    <form name="operacoes" action="operacoes.php" method="POST" 
    enctype="multipart/form-data">
        <label for="valor">Digite o valor que deseja operar:</label><br>
        <input type="number" id="valor" name="valor" required>
        <label for="operacao">Escolha sua operação:</label>
        <select name="operacao" id="operacao">
            <option value="saque" name="saque" id="saque">Saque</option>
            <option value="deposito" name="deposito" id="deposito">Depósito</option>
        </select>
        <input type="submit" value="Ecolher" id="btnEscolher">
         <input type="button" value="Extrato" onclick="window.location.href='./extrato.php'">

    </form>

</body>

</html>
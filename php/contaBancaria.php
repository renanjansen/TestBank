<?php

session_start();



$BR = "<br>";
$HR = "<hr>";
$SENHA = "12345";
$senhaDigitada = $_POST['senha'];


//array que recebe historico de saques e depósitos
$_SESSION['historicoDeOperacoes'] = [];



$cliente = ["Renan Jansen", "0000123-0", 10000.00];
$nome = $cliente[0];
$_SESSION['nome'] = $nome;
$conta = $cliente[1];
$_SESSION['conta'] = $conta;
$saldo = $cliente[2];
$_SESSION['saldo'] = $saldo;

if ($senhaDigitada == $SENHA) {

    echo ("Nome: " . $nome . $BR);

    echo ("Conta: " . $conta . $BR);

    echo ("Saldo: " . $saldo . $BR);
    echo("<input type='button' value='sair' onclick=window.location.href='./index.html'>");
    echo ($HR);
    echo ($BR);
    
    
} else if (empty($senhaDigitada) || $senhaDigitada != $SENHA) {
    $_SESSION['senhaInvalida'] = '<script>
    alert("Senha inválida!");
  </script>';
    echo $_SESSION['senhaInvalida'];
    require 'index.html';
    return;
    
    
  
    
}
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
    <option  value="deposito" name="deposito" id="deposito">Depósito</option>
  </select>
  <input type="submit" value="Ecolher" id="btnEscolher">
  <input type="button" value="Extrato" onclick="window.location.href='./extrato.php'">

  </form>
  

</body>

</html>
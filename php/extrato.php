<?php
    session_start();


$BR = "<br>";
$HR = "<hr>";

echo ("Nome: " . $_SESSION['nome'] . $BR);

echo ("Conta: " . $_SESSION['conta'] . $BR);

echo ("Saldo: " . $_SESSION['saldo'] . $BR);
echo("<input type='button' value='sair' onclick=window.location.href='./Index.php'>");
echo ($HR);
echo ($BR);



foreach ($_SESSION['historicoDeOperacoes'] as $op) {
    print_r($op.$BR.$HR);
}
?>
<body>
  <input type="button" value="voltar" onclick="window.location.href='./operacoes.php'">
</body>
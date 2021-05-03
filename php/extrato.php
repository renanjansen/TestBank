<?php
    session_start();


$BR = "<br>";
$HR = "<hr>";

echo ("Nome: " . $_SESSION['nome'] . $BR);

echo ("Conta: " . $_SESSION['conta'] . $BR);

echo ("Saldo: " . $_SESSION['saldo'] . $BR);
echo ($HR);
echo ($BR);



foreach ($_SESSION['historicoDeOperacoes'] as $op) {
    print_r($op.$BR.$HR);
}



    


?>
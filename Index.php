<?php
session_start();
?>

<!DOCTYPE html>
<html lang="Pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>
    <?php
    $senhaInvalidada = isset($_SESSION['senhaInvalida'])
        ?: $_SESSION['senhaInvalida'];
    ?>
    <form name="senhaLogin" action="php/contaBancaria.php" 
    method="POST" enctype="multipart/form-data">
        <h1>Bem-vindo ao Seu Banco</h1>

        <label for="senha">Digite a sua senha:</label><br>
        <input type="number" id="senha" name="senha">
        <input type="submit" value="Enviar" id="btnEnviar">

    </form>

</body>

</html>
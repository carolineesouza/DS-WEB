<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class = "formulario">
            <form action="update.php" method="POST">
                <label for="">Nome:</label>
                <input for="text" name="nome">
                <br>
                <label for="">E-mail:</label>
                <input for="text" name="email">
                <br>
                <input type="submit">
            </form>
        </div>

<?php
    $novoNome = "Carol Souza";
    $email = "Carol@gmail.com";
    $stmt = $db->prepare('UPDATE cliente SET nome = :nome WHERE email
    = :email');
    $stmt->execute(array(
    ':nome' => $novoNome,
    ':email' => $email
    ));
    if( $stmt->rowCount() > 0 ) {
    echo "Ocorreram ".$stmt->rowCount()." alterações na tabela.";
    } else {
    echo 'Nada foi alterado.';
    }
?>
</div>
</body>
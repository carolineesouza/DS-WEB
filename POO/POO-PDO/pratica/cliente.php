<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <div class="menu">
    <ul>
        <li><a href="index.php" class="meumenu" title="Home">Home</a></li>
        <li><a href="cliente.php" class="meumenu" title="Clients">Clients</a></li>
        <li><a href="#" class="meumenu" title="Products">Products</a></li>
        <li><a href="#" class="meumenu" title="Sales">Sales</a></li>
    </ul>
    </div>

    <div class="container">
        <div class = "formulario">
            <form action="insertion.php" method="POST" name="formulario" onsubmit="return ValidarDaosdosCliente()">
                <label for="">Nome:</label>
                <input for="text" name="nome">
                <br>
                <label for="">E-mail:</label>
                <input for="text" name="email">
                <br>
                <label>Observação do cliente</label>
                <textarea name="observacao" cols="30" rows="4"></textarea>
                <input type="submit">
            </form>
        </div>
    

    <?php
        include "conexao.php";


        echo "<h2>Consulta com muitas linhas</h2>";
        $dados = $db->query("SELECT * FROM cliente");
        $todos = $dados->fetchAll(PDO::FETCH_ASSOC); //todos os registros retornados
        foreach ($todos as $linha) {
            $idCliente = $linha['id'];
            echo "<br>";
            $nomeCliente = $linha['nome'];
            echo "<br>";
            $emailCliente = $linha['email'];

            echo "linha: ".$idCliente;
            echo "<br>";
            echo "Nome :".$nomeCliente;
            echo "<br>";
            echo "Email: ".$emailCliente;
            echo "<br>";
            echo "<a href='update.php?id=$idCliente'>Editar Cliente</a>";
            echo "<br>";
            echo "<a href='delete.php?id=$idCliente'>Deletar Cliente</a>";
        }
    ?>
    </div>
</body>
    <script src="script.js"></script>
</html>
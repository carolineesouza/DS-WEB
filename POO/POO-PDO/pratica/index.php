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
        <li><a href="#" class="meumenu" title="Home">Home</a></li>
        <li><a href="cliente.php" class="meumenu" title="Clients">Clients</a></li>
        <li><a href="#" class="meumenu" title="Products">Products</a></li>
        <li><a href="#" class="meumenu" title="Sales">Sales</a></li>
    </ul>
    </div>

    <div class="container">
        <hr>
        <h1>Dashboard</h1>
        <p>A dashboard encontra-se em desenvolvimento, os dados processados  até o momento são:</p>

       

    <?php
        include "conexao.php";


        
        $dados = $db->query("SELECT * FROM cliente");
        echo "Quantidade de clientes cadastrados: ", $dados->rowCount();
       
    ?>
    </div>
</body>
    <script src="script.js"></script>
</html>
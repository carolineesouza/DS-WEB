<?php
    //Array de frutas
    $frutas = ["Maçã", "Banana", "Laranja", "Goiaba", "Abacaxi"];
    
    foreach ($frutas as $fruta) {
        echo $fruta . "<br>";
    }
    
    echo "<br>" . "<br>";
    
    //Array atualizado
    echo '<h1>Array atualizado</h1>';
    array_push($frutas, "Melancia");
    foreach ($frutas as $fruta) {
        echo $frutas . "<br>";
    }
    
    echo "<br>" . "<br>";
    
    //Ordenando alfabeticamente 
    echo '<h1>Array alfabético</h1>';
    sort($frutas);
    foreach ($frutas as $fruta) {
        echo $fruta . "<br>";
    }
    
    echo "<br>" . "<br>";
    
    //Criar um array associativo
    echo '<h1>Informações do produto</h1>';
    $produto = [
        "nome" => "Banana",
        "preco" => 7.50,
        "estoque" => 25
    ];
    
    foreach ($produto as $chave => $valor) {
        echo ucfirst($chave) . ": " . $valor . "<br>";
    }
    
    echo "<br>" . "<br>";
    
    //Calculando a venda 
    echo '<h1>Venda </h1>';
    $quantidade_venda = 5;
    $valor_total = $produto["preco"] * $quantidade_venda;
    
    echo "Produto: " . $produto["nome"] . "<br>";
    echo "Quantidade vendida: " . $quantidade_venda . "<br>";
    echo "Valor total: R$ " . $valor_total  . "<br>";
    
    //array associativo
    echo '<h1>Combinação de array </h1>';
    
    $produtos = ["Perfume", "Acessórios", "Roupas"];
    $precos = [600.00, 230.00, 1400.00];
    
    $combinado = array_combine($produtos, $precos);
    
    
    echo '<h1>Array Associativo de Produtos</h1>';
    foreach ($combinado as $produto => $preco) {
        echo "Produto: " . $produto . " - Preço: R$ " . $preco . "<br>";
    }

    //Verificação de cor 
    echo '<h1>verificação de cor</h1>';
    
    $cor = ["Rosa", "Roxo", "Turquesa", "Azul", "preto"];
    
    if (in_array("Rosa", $cor)) {
        echo "Rosa existe";
    }
    
    // Calculando a soma 
    echo '<h1>Soma de valores</h1>';
    $numeros = [100, 200, 300, 400, 500];
    
    $soma = array_sum($numeros);
    
    echo "A soma de todos os números é: " . $soma . "<br>";
?>
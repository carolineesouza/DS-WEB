<?php

// MySql
$db=new PDO("mysql:host=localhost;dbname=pdo", "root", "");

var_dump($db);
echo "<br><br>";
print_r($db);

echo "<h2>Exemplo de consultacom uma linha</h2>";
$dados = $db->query("SELECT * FROM cliente");
$todos = $dados->fetch(PDO::FETCH_ASSOC); //todos os registros retornados
print_r($todos);
echo "<br>";
echo $todos['email'];

echo "<br><br><br>";

echo "<h2>Exemplo de consulta com muitas linhas</h2>";
$dados = $db->query("SELECT * FROM cliente");
$todos = $dados->fetchAll(PDO::FETCH_ASSOC); //todos os registros retornados
foreach ($todos as $linha) {
    echo "Linha :". $linha['id'];
    echo "Nome: ". $linha['nome'];
    echo "E-mail". $linha['email'];
}

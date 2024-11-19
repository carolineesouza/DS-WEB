<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($usuario == 'carol' && $senha == '276403'){
    echo "Autenticado com Sucesso!!";
}
else{
    echo "ERRO"
}


?>
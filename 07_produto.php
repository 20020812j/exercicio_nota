<?php

// Simular parâmetros da URL: exemplo.php?id=15&categoria=eletronicos
$_GET['id'] = '15';
$_GET['categoria'] = 'eletronicos';

echo "Produto recebido:\n\n";

if (isset($_GET['id']) && isset($_GET['categoria'])) {
    $id = $_GET['id'];
    $categoria = $_GET['categoria'];
    
    echo "ID: " . $id . "\n";
    echo "Categoria: " . $categoria . "\n";
} else {
    echo "ID ou categoria não fornecido!\n";
}

echo "\n---\n";
echo "URL seria: produto.php?id=15&categoria=eletronicos\n";
echo "$_GET é um array com os parâmetros da URL!\n";

?>

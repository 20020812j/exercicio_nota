<?php

$quantidade = 0;

echo "Múltiplos de 3: ";

for ($i = 3; $i <= 30; $i += 3) {
    echo $i;
    if ($i != 30) {
        echo ", ";
    }
    $quantidade++;
}

echo "\n\n";
echo "Total: " . $quantidade . "\n";

// for começa em 3 e vai de 3 em 3
// cada volta incrementa a quantidade

?>

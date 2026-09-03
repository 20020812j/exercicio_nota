<?php

$a = "10";
$b = 10;
$c = 10;

echo "Comparações:\n\n";

echo "1. \$a == \$b: ";
if ($a == $b) {
    echo "true\n";
} else {
    echo "false\n";  
}

echo "2. \$a === \$b: ";
if ($a === $b) {
    echo "true\n";
} else {
    echo "false\n";
}

echo "3. \$b == \$c: ";
echo ($b == $c) ? "true" : "false";
echo "\n";

echo "4. \$b === \$c: ";
echo ($b === $c) ? "true\n" : "false\n";

echo "\n";
echo "== compara só o valor, === compara valor e tipo\n";
echo "String '10' é igual ao número 10 com ==, mas diferente com ===";

?>

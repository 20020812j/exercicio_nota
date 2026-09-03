<?php

function areaRetangulo($base, $altura) {
    if ($base < 0 || $altura < 0) {
        return "Valores inválidos";
    }
    return $base * $altura;
}

$res1 = areaRetangulo(5, 10);
$res2 = areaRetangulo(3.5, 4.2);
$res3 = areaRetangulo(15, 8);

echo "Area 1: $res1\n";
echo "Area 2: $res2\n";
echo "Area 3: $res3\n";

echo "\nTeste com valores negativos:\n";
$res4 = areaRetangulo(-5, 10);
$res5 = areaRetangulo(10, -3);

echo "Com -5 e 10: $res4\n";
echo "Com 10 e -3: $res5\n";

// função retorna a area ou mensagem se tiver valor negativo

?>

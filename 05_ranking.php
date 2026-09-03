<?php

$participantes = [
    ["nome" => "Ana", "pontos" => 850],
    ["nome" => "João", "pontos" => 920],
    ["nome" => "Maria", "pontos" => 780]
];

echo "Ranking antes de ordenar:\n";
foreach ($participantes as $p) {
    echo $p['nome'] . ": " . $p['pontos'] . "\n";
}

echo "\n";

// Ordenar por pontos (maior para menor)
usort($participantes, function($a, $b) {
    return $b["pontos"] - $a["pontos"];
});

echo "Ranking depois de ordenar:\n\n";

$pos = 1;
foreach ($participantes as $p) {
    echo $pos . "º - " . $p['nome'] . " (" . $p['pontos'] . ")\n";
    $pos++;
}

?>"

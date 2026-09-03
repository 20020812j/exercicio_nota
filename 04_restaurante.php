<?php

function obterPratoDoDia($dia) {
    switch ($dia) {
        case 1:
            return "Frango grelhado";
        case 2:
            return "Fricassé";
        case 3:
            return "Feijoada";
        case 4:
            return "Carne de panela";
        case 5:
            return "Strogonoff";
        case 6:
        case 7:
            return "Restaurante fechado";
        default:
            return "Dia inválido";
    }
}

echo "Cardápio da semana:\n\n";

$dias = ["", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado", "Domingo"];

for ($dia = 1; $dia <= 7; $dia++) {
    $prato = obterPratoDoDia($dia);
    echo $dias[$dia] . ": " . $prato . "\n";
}

echo "\n";

// Testando alguns dias individuais
echo "Teste individual:\n";
echo "Dia 3: " . obterPratoDoDia(3) . "\n";
echo "Dia 6: " . obterPratoDoDia(6) . "\n";

// importante: sem o break a execução continua no próximo case
// é chamado de fall-through

?>

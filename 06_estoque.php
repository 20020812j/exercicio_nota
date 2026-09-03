<?php

$itens = ["Teclado", "Mouse", "Monitor", "Cabo HDMI", "Headset"];

echo "Estoque:\n\n";

foreach ($itens as $item) {
    if ($item === "Cabo HDMI") {
        continue; // Pula este item
    }
    echo "✓ " . $item . "\n";
}

echo "\n---\n";
echo "O continue pulou o Cabo HDMI mas ele ainda está no array!\n";

?>

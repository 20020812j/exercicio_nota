<?php

class Veiculo {
    private $quilometragem = 0;
    
    public function rodar($km) {
        $this->quilometragem += $km;
    }
    
    public function exibirQuilometragem() {
        return $this->quilometragem;
    }
}

echo "Veículos:\n\n";

$carro = new Veiculo();
$moto = new Veiculo();

// Carro rodando
$carro->rodar(150);
echo "Carro: " . $carro->exibirQuilometragem() . " km\n";

$carro->rodar(250);
echo "Carro: " . $carro->exibirQuilometragem() . " km\n";

// Moto rodando
$moto->rodar(500);
echo "Moto: " . $moto->exibirQuilometragem() . " km\n";

echo "\n---\n";
echo "Cada objeto tem sua própria quilometragem!\n";

?>

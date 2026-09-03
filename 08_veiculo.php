<?php

class Veiculo {
    private $quilometragem = 0;
    
    public function rodar($quilometros) {
        $this->quilometragem += $quilometros;
    }
    
    public function exibirQuilometragem() {
        return $this->quilometragem;
    }
}

echo "Teste do veículo:\n\n";

$carro = new Veiculo();
$moto = new Veiculo();

echo "Carro antes de rodar: " . $carro->exibirQuilometragem() . " km\n";

$carro->rodar(150);
echo "Carro depois de rodar 150 km: " . $carro->exibirQuilometragem() . " km\n";

$carro->rodar(250);
echo "Carro depois de rodar mais 250 km: " . $carro->exibirQuilometragem() . " km\n";

$moto->rodar(500);
echo "Moto depois de rodar 500 km: " . $moto->exibirQuilometragem() . " km\n";

echo "\n---\n";
echo "Cada objeto tem sua própria quilometragem!\n";

?>

class Funcionario {
	public $nome;
	protected $salario;
	private $senha;

	public function __construct($nome, $salario) {
		$this->nome = $nome;
		$this->salario = $salario;
		$this->senha = "sec123";
	}
}

class Gerente extends Funcionario {
	public function info() {
		echo "Nome: " . $this->nome . "\n";
		echo "Salário: " . $this->salario . "\n";
	}
}

echo "Gerente:\n\n";

$g = new Gerente("Carlos", 5000);
$g->info();

echo "\n---\n\n";

echo "1. $nome é public? SIM (acessível em toda parte)\n";
echo "   $g->nome = " . $g->nome . "\n\n";

echo "2. $salario é protected? SIM (acessível só na classe e subclasses)\n";
echo "   Gerente acessa: OK\n";
echo "   De fora: NÃO\n\n";

echo "3. \$senha é private? SIM (acessível só em Funcionario)\n";
echo "   Gerente acessa: NÃO\n";
<?php\n\nclass Funcionario {\n    public \$nome;\n    protected \$salario;\n    private \$senhaAcesso;\n\n    public function __construct(\$nome, \$salario) {\n        \$this->nome = \$nome;\n        \$this->salario = \$salario;\n        \$this->senhaAcesso = \"senha123\";\n    }\n}\n\nclass Gerente extends Funcionario {\n    public function exibirResumo() {\n        return \"Nome: \" . \$this->nome . \", Salário: \" . \$this->salario;\n    }\n}\n\necho \"=== Teste ===\\n\\n\";\n\n\$gerente = new Gerente(\"Carlos\", 5000);\necho \$gerente->exibirResumo() . \"\\n\";\necho \"Nome: \" . \$gerente->nome . \"\\n\";\n\necho \"\\n=== Respostas ===\\n\\n\";\n\necho \"1. O método exibirResumo() vai funcionar?\\n\";\necho \"Sim, porque \\$nome é public e \\$salario é protected (acessível em subclass)\\n\\n\";\n\necho \"2. Seria possível acessar \\$senhaAcesso na class Gerente?\\n\";\necho \"Não, porque é private (só na class Funcionario)\\n\\n\";\n\necho \"3. Uma class Diretor sem extends teria acesso a \\$salario?\\n\";\necho \"Não, protected só funciona com herança\\n\";\n\n?>"

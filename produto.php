<?php
class Produto {
    private $descricao;
    private $unidadeMedida;
    private $quantidade;
    private $valorUnitario;

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;
        return $this;
    }

    public function getUnidadeMedida()
    {
        return $this->unidadeMedida;
    }

    public function setUnidadeMedida($unidadeMedida): self
    {
        $this->unidadeMedida = $unidadeMedida;
        return $this;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade): self
    {
        $this->quantidade = $quantidade;
        return $this;
    }

    public function getValorUnitario()
    {
        return $this->valorUnitario;
    }

    public function setValorUnitario($valorUnitario): self
    {
        $this->valorUnitario = $valorUnitario;
        return $this;
    }

    public function getValorTotal()
    {
        return $this->quantidade * $this->valorUnitario;
    }
}

$produto1 = new Produto();
$produto1->setDescricao(readline("Digite a descrição do produto 1: "))
         ->setUnidadeMedida(readline("Digite a unidade de medida do produto 1: "))
         ->setQuantidade(readline("Digite a quantidade comprada do produto 1: "))
         ->setValorUnitario(readline("Digite o valor da unidade do produto 1: "));

$produto2 = new Produto();
$produto2->setDescricao(readline("Digite a descrição do produto 2: "))
         ->setUnidadeMedida(readline("Digite a unidade de medida do produto 2: "))
         ->setQuantidade(readline("Digite a quantidade comprada do produto 2: "))
         ->setValorUnitario(readline("Digite o valor da unidade do produto 2: "));

$produto3 = new Produto();
$produto3->setDescricao(readline("Digite a descrição do produto 3: "))
         ->setUnidadeMedida(readline("Digite a unidade de medida do produto 3: "))
         ->setQuantidade(readline("Digite a quantidade comprada do produto 3: "))
         ->setValorUnitario(readline("Digite o valor da unidade do produto 3: "));

$produtos = [$produto1, $produto2, $produto3];

$compraMaisCara = $produtos[0];

foreach ($produtos as $produto) {
    echo "Produto: " . $produto->getDescricao() . " (" . $produto->getUnidadeMedida() . ") " . $produto->getQuantidade() . " X " . $produto->getValorUnitario() . " = " . $produto->getValorTotal() . "\n";
    if ($produto->getValorTotal() > $compraMaisCara->getValorTotal()) {
        $compraMaisCara = $produto;
    }
}

echo "Venda com o maior valor total do produto: " . $compraMaisCara->getDescricao() . " (" . $compraMaisCara->getUnidadeMedida() . ")\n";
?>

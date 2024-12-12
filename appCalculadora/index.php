<?php

require_once("model/Calculadora.php");
require_once("model/Divisao.php");
require_once("model/Multiplicacao.php");
require_once("model/Resto.php");
require_once("model/Soma.php");
require_once("model/Subtracao.php");

$numA = 1;
$numB = 2;

while ($numA != 0 && $numB != 0) {
    $numA = readline("Digite o primeiro número: ");
    $numB = readline("Digite o segundo número: ");

    if ($numA == 0 && $numB == 0) {
        echo "Encerrando calculadora...\n";
        break;
    }

    $operacao = readline("Escolha a operação (soma, subtracao, multiplicacao, divisao, resto): ");

    switch ($operacao) {
        case "soma":
            $soma = new Soma($numA, $numB);
            echo "Resultado da soma: " . $soma->calcular() . "\n";
            break;
        case "subtracao":
            $subtracao = new Subtracao($numA, $numB);
            echo "Resultado da subtração: " . $subtracao->calcular() . "\n";
            break;
        case "multiplicacao":
            $multiplicacao = new Multiplicacao($numA, $numB);
            echo "Resultado da multiplicação: " . $multiplicacao->calcular() . "\n";
            break;
        case "divisao":
            $divisao = new Divisao($numA, $numB);
            if ($numB != 0) {
                echo "Resultado da divisão: " . $divisao->calcular() . "\n";
            } else {
                echo "Erro: divisão por zero!\n";
            }
            break;
        case "resto":
            $resto = new Resto($numA, $numB);
            if ($numB != 0) {
                echo "Resto da divisão: " . $resto->calcular() . "\n";
            } else {
                echo "Erro: divisão por zero!\n";
            }
            break;
        default:
            echo "Operação não existe. Tente novamente.\n";
            break;
    }
}

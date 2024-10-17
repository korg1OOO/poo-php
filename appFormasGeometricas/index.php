<?php 

require_once("model/Circulo.php");
require_once("model/Quadrado.php");
require_once("model/Retangulo.php");

$tipo = readline("Escolha uma das formas geométricas: ");

$forma = null;

if($tipo == "Circulo"){
    $forma = new Circulo();
    $forma->setRaio(readline("Digite o raio do círculo: "));
} else if ($tipo == "Retangulo"){
    $forma = new Retangulo();
    $forma->setBase(readline("Digite a base do retângulo: "));
    $forma->setAltura(readline("Digite a altura do retângulo: "));
} else if ($tipo == "Quadrado"){
    $forma = new Quadrado();
    $forma->setLado(readline("Digite o lado do quadrado: "));
}

$forma->getArea();
$forma->getDesenho();
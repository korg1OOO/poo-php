<?php

require_once("model/Comercial.php");
require_once("model/Industrial.php");
require_once("model/Residencial.php");

$tipo = readline("Escolha o tipo de consumidor: ");

$consumidor = null;

if($tipo == "Residencial"){
    $consumidor = new Residencial();
} else if ($tipo == "Comercial") {
    $consumidor = new Comercial();
} else if ($tipo == "Industrial") {
    $consumidor = new Industrial();
}

$consumidor->setConsumo(readline("Digite a energia consumida esse mês: "));
$consumidor->getValorFatura();
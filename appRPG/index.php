<?php
    require_once("models/Curandeiro.php");
    require_once("models/Combatente.php");
    require_once("models/Poder.php");

    $poderDeAtaque1 = new Poder();
    $poderDeAtaque1->setDescricao("Golpe Normal");
    $poderDeAtaque1->setForca(0);

    $poderDeAtaque2 = new Poder();
    $poderDeAtaque2->setDescricao("Golpe Especial");
    $poderDeAtaque2->setForca(20);

    $poderDeCura1 = new Poder();
    $poderDeCura1->setDescricao("Recupera Energia");
    $poderDeCura1->setForca(0);

    $poderDeCura2 = new Poder();
    $poderDeCura2->setDescricao("Recupera Energia Super");
    $poderDeCura2->setForca(15);

    $curandeiro = new Curandeiro();
    $curandeiro->setNome(readline("Escolha o nome do seu curandeiro: "))->setPoder($poderDeCura2);
    $curandeiro->setForcaDeCura(readline("Digite a força de cura do seu curandeiro: "));

    $combatente = new Combatente();
    $combatente->setNome(readline("Escolha o nome do seu combatente: "))->setPoder($poderDeAtaque1);
    $combatente->setForcaDeAtaque(readline("Digite a força de cura do seu combatente: "));
    
    echo "\n\n";
    echo $combatente->lancarPoder();
    echo "\n\n";
    echo $curandeiro->lancarPoder();
    echo "\n\n";
<?php

    require_once("modelo/Cidade.php");
    require_once("modelo/Estado.php");

    $cidades = [];

    $sc = new Estado;
    $sc->setNome("Santa Catarina");
    $sc->setSigla("SC");

    $pr = new Estado;
    $pr->setNome("Paraná");
    $pr->setSigla("PR");

    $florianopolis = new Cidade;
    $florianopolis->setNome("Florianópolis");
    $florianopolis->setEstado($sc);
    $florianopolis->setQtdHabitantes(573211);
    $florianopolis->setAltitude(3);

    $blumenau = new Cidade;
    $blumenau->setNome("Blumenau");
    $blumenau->setEstado($sc);
    $blumenau->setQtdHabitantes(361855);
    $blumenau->setAltitude(21);

    $foz = new Cidade;
    $foz->setNome("Foz do Iguaçu");
    $foz->setEstado($pr);
    $foz->setQtdHabitantes(258248);
    $foz->setAltitude(192);

    $cascavel = new Cidade;
    $cascavel->setNome("Cascavel");
    $cascavel->setEstado($pr);
    $cascavel->setQtdHabitantes(348051);
    $cascavel->setAltitude(781);

    $cidades = [$florianopolis, $blumenau, $foz, $cascavel];
    
    foreach($cidades as $cidade){
        echo $cidade;
    }
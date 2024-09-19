<?php

    require_once("modelo/Time.php");
    require_once("modelo/Jogador.php");

    $time = new Time();
    $time->setNome("Grêmio");
    $time->setCidade("Porto Alegre");
    
    $suarez = new Jogador();
    $suarez->setNome("Luis Suarez");
    $suarez->setNumero(9);
    $suarez->setTime($time);

    $geromel = new Jogador();
    $geromel->setNome("Pedro Geromel");
    $geromel->setNumero(4);
    $geromel->setTime($time);

    $jogadores = array();
    array_push($jogadores, $suarez);
    array_push($jogadores, $geromel);
    $time->setJogadores($jogadores);
    print_r($time->getJogadores());
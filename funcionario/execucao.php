<?php

    require_once("modelo/Departamento.php");
    require_once("modelo/Funcionario.php");
    
    for($i = 1; $i<=5; $i++){
        $funcionario = new Funcionario();
        $funcionario->setNome(readline("Diga o nome do funcionario $i: "));
        $funcionario->setCargo(readline("Diga o cargo do funcionario $i: "));
        $funcionario->setSalario(readline("Diga o salário do funcionario $i: "));

        $depto = new Departamento();
        $depto->setNome(readline("Diga o nome do departamento: "));
        $depto->setNumeroSala(readline("Digite o numero da sala do departamento: "));
        
        $funcionario->setDepto($depto);
        $funcionarios[] = $funcionario;
    }

    foreach($funcionarios as $funcionario){
        echo $funcionario;
    }
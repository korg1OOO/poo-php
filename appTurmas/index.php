<?php

    require_once("modelo/Alunos.php");
    require_once("modelo/Turma.php");

    $turma = new Turma();
    $turma->setNome(2);
    $turma->setCurso("Técnico em Desenvolvimento de Sistemas");

    for($i = 1; $i<=5; $i++){
        $aluno = new Alunos();
        $aluno->setNome(readline("Diga o nome do aluno $i: "));
        $aluno->setIdade(readline("Diga a idade do aluno $i: "));
        $alunos[] = $aluno;

    }

    foreach($alunos as $aluno){
        echo $aluno;
    }
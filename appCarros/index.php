<?php

    require_once("model/Carro.php");
    require_once("model/Fabricante.php");

    $fabricante1 = new Fabricante();
    $fabricante2 = new Fabricante();
    $fabricante3 = new Fabricante();
    $fabricante4 = new Fabricante();

    $fabricante1->setNome("Volkswagem")
                ->setSigla("VW");
    
    $fabricante2->setNome("Chevrolet")
                ->setSigla("GM");
    
    $fabricante3->setNome("Fiat")
                ->setSigla("F");

    $fabricante4->setNome("Renault")
                ->setSigla("RN");
    
    $fabricantes = [$fabricante1, $fabricante2, $fabricante3, $fabricante4];
    $carros = [];

    do {
        echo "-----------MENU-----------\n";
        echo "1- Cadastrar carro\n";
        echo "2- Excluir carro\n";
        echo "3- Listar carros\n";
        echo "0- SAIR\n";
        $opcao = readline("Escolha a opção: \n");

        switch($opcao) {
            case 0:
                echo "Programa encerrado!\n";
            break;

            case 1:
                $carro = new Carro();
                $carro->setModelo(readline("Insira o modelo do carro: "))
                      ->setAnoFabricacao(readline("Insira o ano de fabricação do carro: "));
                $sigla = readline("Digite a sigla do fabricante: ");

                $fabricanteEncontrado = null;
                foreach($fabricantes as $fabricante){
                    if($fabricante->getSigla() == $sigla){
                        $fabricanteEncontrado = $fabricante;
                        break;
                    }
                }
                
                if($fabricanteEncontrado){
                    $carro->setFabricante($fabricanteEncontrado);
                    $carros[] = $carro;
                    echo "Carro cadastrado com sucesso!\n";
                } else {
                    echo "Selecione um fabricante existente!\n";
                }

            break;

            case 2:
                foreach ($carros as $i => $carro){
                    echo $i + 1 . "° " . $carro;
                }

                $carroApagar = readline("Qual carro você deseja apagar: ");
                array_splice($carros, $carroApagar -1, 1);
            break;

            case 3:
                if($carros == null){
                    echo "Nenhum carro cadastrado.\n";
                } else {
                    foreach($carros as $carro){
                    echo "Modelo: " . $carro->getModelo() . " - Ano Fabricação: " . $carro->getAnoFabricacao() . " - Fabricante: " . $carro->getFabricante()->getNome() . "\n";
                }
            }
            break;

            default:
                echo "ERRO. Insira um número da lista!!\n";
        }
    }

    while($opcao != 0);
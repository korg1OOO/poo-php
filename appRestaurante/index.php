<?php
    require_once("model/Pedido.php");
    require_once("model/Prato.php");

    $prato1 = new Prato;
    $prato2 = new Prato;
    $prato3 = new Prato;
    $prato4 = new Prato;
    $prato5 = new Prato;

    $prato1->setNumero(1)
           ->setNome("Camarão à Milanesa")
           ->setValor(110.00);

    $prato2->setNumero(2)
           ->setNome("Pizza Margherita")
           ->setValor(80.00);
        
    $prato3->setNumero(3)
           ->setNome("Macarrão à Carbonara")
           ->setValor(60.00);
    
    $prato4->setNumero(4)
           ->setNome("Bife à Parmegiana")
           ->setValor(75.00);

    $prato5->setNumero(5)
           ->setNome("Risoto ao Funghi")
           ->setValor(70.00);

    $pratos = [$prato1, $prato2, $prato3, $prato4, $prato5];
    $pedidos = [];

    do {
        echo "--------Bona Comida--------\n";
        echo "(1) Cadastrar\n";
        echo "(2) Cancelar\n";
        echo "(3) Listar\n";
        echo "(4) Total de vendas\n";
        echo "(0) Sair\n";
        $opcao = readline("Escolha a opção: \n");

        switch($opcao) {
            case 0:
                echo "Programa encerrado!\n";
            break;

            case 1:
                $pedido = new Pedido();
                $pedido->setNomeCliente(readline("Digite o nome do cliente: "))
                       ->setNomeGarcom(readline("Digite o nome do garçom: "));
                $numPrato = readline("Digite o número do prato: ");

                $pratoEncontrado = null;
                foreach($pratos as $prato){
                    if($prato->getNumero() == $numPrato){
                        $pratoEncontrado = $prato;
                        break;
                    }
                }

                if($pratoEncontrado){
                    $pedido->setPrato($pratoEncontrado);
                    $pedidos[] = $pedido;
                    echo "Pedido cadastrado com sucesso!\n";
                } else {
                    echo "Prato não encontrado!\n";
                }

            break;

            case 2:
                foreach($pedidos as $i => $pedido){
                    echo $i + 1 . "° " . $pedido;
                }

                $apagarPedido = readline("Qual pedido você deseja apagar? ");
                array_splice($pedidos, $apagarPedido -1, 1);
                echo "Pedido removido com sucesso!\n";

            break;

            case 3:
                if($pedidos == null){
                    echo "Nenhum pedido cadastrado.\n";
                } else {
                    foreach($pedidos as $pedido){
                        echo "O cliente " . $pedido->getNomeCliente() . ", foi atendido pelo garçom " . $pedido->getNomeGarcom() . ", pediu um prato de " . $pedido->getPrato()->getNome() . " no valor de R$ " . $pedido->getPrato()->getValor() . ".\n";
                    }
                }

            break;
            
            case 4:
                $valor = 0;
                foreach($pedidos as $pedido){
                    $valor += $pedido->getPrato()->getValor();
                }
                echo "Total de Pedidos: R$$valor\n";

            break;

            default:
                echo "ERRO. Insira um número da lista!!\n";
            }
            
        } while($opcao != 0);
<?php

echo "POO game" . PHP_EOL;
echo 'Jogar?' . PHP_EOL;
echo '1 - SIM | 2 - NÂO' . PHP_EOL;

$x = readline();

if ($x == 1) {
    echo "Prepare-se..." . PHP_EOL;  
    echo "Será um questionário com 10 perguntas sobre POO..." . PHP_EOL;

    $pontuacao = 0;

    echo "[1] - Qual é a resposta certa sobre o polimorfismo?" . PHP_EOL;
    echo "1 - É um carro com quatro capus\n";
    echo "2 - Utilize a mesma interface para vários tipos de objetos\n";
    $resposta = readline();
    if ($resposta == 2) {
        $pontuacao++;
        echo "Correto!\n";
    } else {
        echo "Errado!\n";
    }

    echo "[2] - O que é herança em POO?" . PHP_EOL;
    echo "1 - Propriedade de uma classe que permite a criação de novas classes a partir de uma classe existente\n";
    echo "2 - Um sistema de registro de classes\n";
    $resposta = readline();
    if ($resposta == 1) {
        $pontuacao++;
        echo "Correto!\n";
    } else {
        echo "Errado!\n";
    }

    echo "[3] - O que é encapsulamento em POO?" . PHP_EOL;
    echo "1 - Mecanismo de restringir o acesso a alguns dos componentes de um objeto\n";
    echo "2 - Processo de criação de objetos\n";
    $resposta = readline();
    if ($resposta == 1) {
        $pontuacao++;
        echo "Correto!\n";
    } else {
        echo "Errado!\n";
    }

    echo "[4] - Qual é a função de um construtor em POO?" . PHP_EOL;
    echo "1 - Inicializar um objeto\n";
    echo "2 - Destruir um objeto\n";
    $resposta = readline();
    if ($resposta == 1) {
        $pontuacao++;
        echo "Correto!\n";
    } else {
        echo "Errado!\n";
    }

    echo "[5] - O que é uma classe abstrata?" . PHP_EOL;
    echo "1 - Uma classe que não pode ser instanciada e serve de base para outras classes\n";
    echo "2 - Uma classe que só pode ser instanciada uma vez\n";
    $resposta = readline();
    if ($resposta == 1) {
        $pontuacao++;
        echo "Correto!\n";
    } else {
        echo "Errado!\n";
    }

    echo "[6] - O que é um método estático?" . PHP_EOL;
    echo "1 - Um método que pertence à classe, e não a uma instância específica\n";
    echo "2 - Um método que não pode ser chamado diretamente\n";
    $resposta = readline();
    if ($resposta == 1) {
        $pontuacao++;
        echo "Correto!\n";
    } else {
        echo "Errado!\n";
    }

    echo "[7] - Qual é a finalidade da palavra-chave 'interface' em POO?" . PHP_EOL;
    echo "1 - Definir um contrato que outras classes devem seguir\n";
    echo "2 - Definir um tipo específico de classe\n";
    $resposta = readline();
    if ($resposta == 1) {
        $pontuacao++;
        echo "Correto!\n";
    } else {
        echo "Errado!\n";
    }

    echo "[8] - O que é um objeto em POO?" . PHP_EOL;
    echo "1 - Uma instância de uma classe\n";
    echo "2 - Um tipo de variável\n";
    $resposta = readline();
    if ($resposta == 1) {
        $pontuacao++;
        echo "Correto!\n";
    } else {
        echo "Errado!\n";
    }

    echo "[9] - O que é o princípio da responsabilidade única?" . PHP_EOL;
    echo "1 - Uma classe deve ter apenas uma razão para mudar\n";
    echo "2 - Uma classe deve ser responsável por todas as operações\n";
    $resposta = readline();
    if ($resposta == 1) {
        $pontuacao++;
        echo "Correto!\n";
    } else {
        echo "Errado!\n";
    }

    echo "[10] - O que é a sobrecarga de métodos?" . PHP_EOL;
    echo "1 - Definir métodos com o mesmo nome, mas parâmetros diferentes\n";
    echo "2 - Definir métodos com o mesmo nome e mesmos parâmetros\n";
    $resposta = readline();
    if ($resposta == 1) {
        $pontuacao++;
        echo "Correto!\n";
    } else {
        echo "Errado!\n";
    }

    echo "Parabéns! Você terminou o questionário." . PHP_EOL;
    echo "Sua pontuação final é: $pontuacao de 10" . PHP_EOL;
} else {
    exit;
}
?>

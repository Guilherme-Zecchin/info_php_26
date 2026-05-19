<?php

/**
 * Exercicio: Criar um sistema quecalcula o aumento de salário de um funcionário e os descontos de INSS e IRPF, considerando as seguintes regras:
 * - O aumento de salário é de 10% para salários até R$ 1.000.
 * - O aumento de salário é de 3% para salários acima de R$ 2.000.
 * - O desconto do INSS é de 11% para salários acima de R$ 3.000.
 * - O desconto do IRPF é de 0% para salários até R$ 1.500.
 * - O desconto do IRPF é de 22.5% para salários acima de R$ 4.500.
 * Utilizar como exemplo o sistema da calculadora no terminal,
 * onde o usuário irá digitar o salário do funcionário e o sistema irá exibir o salário atualizado com os descontos aplicados.
 * Dica: Utilizar a função number_format() para formatar o salário com duas casas decimais e o símbolo de moeda.
 */

// Executar no terminal: php ./Funcionario.php || php Funcionario.php
executar();

function executar() {
    do {
        echo "Bem-vindo à Calculadora no Terminal!\n";
        echo "-----------------------------\n";

        exibirMenu();
        $operacao = readline("Digite a operação desejada: ");
        $a = readline("Digite o primeiro número: ");
        $b = readline("Digite o segundo número: ");

        $operacao = ajustarOperacao($operacao);

        $resultado = calcular($operacao, $a, $b);
        echo "Resultado: " . $resultado . "\n";

        echo "\nDeseja realizar outra operação? (s/n): ";
        $resposta = readline();

        if ($resposta == 'n' || $resposta == 'N') {
            break;
        } 
        
        echo "\n";

    } while (true);
}
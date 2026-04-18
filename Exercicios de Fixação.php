<?php
echo "exercicios de fixação <br>";

//1. Crie um algoritmo que receba um numero digitado pelo usuario e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo, "Valor Negativo" ou "Igual a zero".

$valor = -23; // Valor de entrada
$resultado = ""; 

if ($valor > 0) {
    $resultado = "Positivo";
}elseif ($valor < 0) {
    $resultado = "Negativo";
}else {
    $resultado = "Igual a Zero";
}
    echo "O valor $valor é :$resultado <br>" ;

 echo "<br>";

 //OBSERVAÇÕES EXERCICIO 1:

//2. Crie um algoritmo que solicite a entrada e um numero e exiba a tabuada de 0 a 10 de acordo com o número solicitado
echo "<br>";

$numero = 7;

for($contador = 0; $contador <= 10; $contador++){
    echo " $numero x $contador = " . $numero * $contador . "<br>";
}
//OBSERVAÇÕES EXERCICIO 2:

//3. Crie um algoritmo que solicite um número ee faça o cálculo fatorial do mesmo, exiba o resultado na tela. Ex: Entrada = 3 Processamento: (3 * 2) *1 Saída: 6

echo "<br>";

$numero = 17;

if ($numero > 0) {
    $valor = $numero;
    for ($i = ($valor - 1); $i > 0; $i--) {
        $valor = $valor * $i;
    }
}
echo "o fatorial de !{$numero} é: {$valor}";

echo "<br>";

//OBSERVAÇÕES EXERCICIO 3: 
//1) Necessário ter as 3 váriaveis para a variavel $numero não perder seu valor;
//2) Operação (i = x; $i > 0; $i--) - Significa que, a variavel é x e enquanto ela for menor que 0, continuar diminuindo o valor até chegar a zero;
//3) Entender qual seria a função da variavel $valor, ver se entra na observação 1;

/**
 * Simular o funcionamento de uma calculadora com as duas estruturas lógicas:
 * Switch Case e IF ELSE IF ELSE. Não é necessário o ZERAR, somente o calculo.
 * Operadores: + - * /
 *
 * Dica: utilizar 4 variáveis, uma delas vai ser $operador a outra $resultado.
 */

echo "Calculadora <br>";

$valor1 = 7;
$operador = "*";
$valor2 = 3;

if ($operador == "+"){
    echo $resultado = $valor1 + $valor2;
} elseif ($operador == "-") {
    echo $resultado = $valor1 - $valor2;
} elseif ($operador == "*") {
    echo $resultado = $valor1 * $valor2;
} elseif ($operador == "/") {
    echo $resultado = $valor1 / $valor2;
} else echo "Operação Invalida"; 

echo "<br>";

/**
 * Calcular o fatorial de um numero qualquer.
 * Ex.: calcular o fatorial de 5 (5!).
 *
 * Dica: 5 x 4 x 3 x 2 x 1. utilizar laçoes de repetição(loops) FOR e WHILE
 *
 * Saída esperada: o fatorial de 5 é: 120.
 */
echo "<br>";

$numero = 6;

if ($numero > 0) {
    $valor = $numero;
    for ($i = ($valor - 1); $i > 0; $i--) {
        $valor = $valor * $i;
    }
}
echo "O fatorial de !{$numero} é : {$valor}";

echo "<br>";


/**
 * Com base no exercicio de:
 * Listar os 10 primeiros numeros pares com laçoes de repetição(loops) utilizando FOR e WHILE.
 *
 * Encontrar os 5 primeiros numeros Primos.
 *
 * Dica: Utilizar calculo dos pares, sendo que o unico primo par é o 2.
 *
 * Saída esperada: Os 5 primeiros Primos são: 3, 5, 7, 11, 13
 */
echo "<br>";

echo "<br>";

//Calcular o tempo de duração de um jogo, baseado em horario de inicio e horario de fim
//Resultado deve ser sempre 90
//Resolver o jogo que começar as 23hrs do dia 1 e vá até 00.30 do dia 2
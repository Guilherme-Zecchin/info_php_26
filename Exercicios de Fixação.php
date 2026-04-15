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


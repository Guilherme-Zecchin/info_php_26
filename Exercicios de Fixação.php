<?php
echo "exercicios de fixação <br>";

//Crie um algoritmo que receba um numero digitado pelo usuario e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo, "Valor Negativo" ou "Igual a zero".

$valor = 78; // Valor de entrada
$resultado = ""; 

if ($valor > 0) {
    $resultado = "Valor Positivo";
}elseif ($valor < 0) {
    $resultado = "Valor Negativo";
}else {
    $resultado = "Igual a Zero";
}
    echo $resultado ;

//Crie um algoritmo que solicite a entrada e um numero e exiba a tabuada de 0 a 10 de acordo com o número solicitado


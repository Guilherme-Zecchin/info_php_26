<?php

// Mock/Chumbar/fixar = ler dados usuario
$nome = "Guilherme";

/** Ler os dados de usuario, sendo eles:
 * nome
 * idade
 * sexo
 * nome pai
 * nome mae
 * E escrever a frase: O Usuario de NOME, IDADE, SEXO é filho(a) de:
 * Nome pai e nome mae
*/
$nome = "Guilherme";
$idade = "29";
$sexo = "Masculino";
$nomeMae = "Fulana"; // camel case
$nome_mae = "Fulana"; // sanke case
$nomemae= "";
$nomePai = "Beltrano";

// echo "O Usuario de $nome, $idade, $sexo é filho(a) de: $nomePai e $nomeMae <br>";

/**
 * Somar dois valores e exibir o resultado dos mesmos com a frase:
 * A soma dos valores é: SOMA
 */
$valor = 10;
$valor2 = 10;
$resultado = $valor + $valor2;
echo "A soma dos valores $valor + $valor2 é: $resultado <br>";

/**
 * Subtrair dois valores e exibir o resultado dos mesmos com a frase:
 * A subtração dos valores é: SUBTRACAO
 */
$valor = 10;
$valor2 = 10;
$resultado = $valor - $valor2;
echo "A subtração dos valores $valor - $valor2 é: $resultado <br>";

/**
 * Multiplicar dois valores e exibir o resultado dos mesmos com a frase:
 * A multiplicacao dos valores é: MULTIPLICACAO
 */
$valor = 10;
$valor2 = 10;
$resultado = $valor * $valor2;
echo "A multiplicacao dos valores $valor * $valor2 é: $resultado <br>";

/**
 * Dividir dois valores e exibir o resultado dos mesmos com a frase:
 * A divisao dos valores é: DIVISAO
 */
$valor = 10;
$valor2 = 10;
$resultado = $valor / $valor2;
echo "A divisao dos valores $valor / $valor2 é: $resultado <br>";

echo "<br><br>";
/**
 * Fazer a tabuada do 4, 5 mas com variavel, ou seja, o usuario informa um numero
 * e esse numero será usado para a tabuada.
 * Resultado esperado:
 *  4 X 1 = 4
 *  4 X 2 = 8
 *  4 X 3 = 12
 *  ...
 *  4 X 10 = 40
 */
$numero = 7;

echo "$numero x 1 = " . $numero * 1 . "<br>";
echo "$numero x 2 = " . $numero * 2 . "<br>";
echo "$numero x 3 = " . $numero * 3 . "<br>";
echo "$numero x 4 = " . $numero * 4 . "<br>";
echo "$numero x 5 = " . $numero * 5 . "<br>";
echo "$numero x 6 = " . $numero * 6 . "<br>";
echo "$numero x 7 = " . $numero * 7 . "<br>";
echo "$numero x 8 = " . $numero * 8 . "<br>";
echo "$numero x 9 = " . $numero * 9 . "<br>";
echo "$numero x 10 = " . $numero * 10 . "<br>";
echo "<br><br>";

$numero = 5;

echo "$numero x 1 = " . $numero * 1 . "<br>";
echo "$numero x 2 = " . $numero * 2 . "<br>";
echo "$numero x 3 = " . $numero * 3 . "<br>";
echo "$numero x 4 = " . $numero * 4 . "<br>";
echo "$numero x 5 = " . $numero * 5 . "<br>";
echo "$numero x 6 = " . $numero * 6 . "<br>";
echo "$numero x 7 = " . $numero * 7 . "<br>";
echo "$numero x 8 = " . $numero * 8 . "<br>";
echo "$numero x 9 = " . $numero * 9 . "<br>";
echo "$numero x 10 = " . $numero * 10 . "<br>";

echo "<br><br>";

/**
 * Calcule area de um quadrado
 */
$lado1 = 10;
$lado2 = 10;
$area = $lado1 * $lado2;
$area = $lado1 ** 2; //potenciacao
$area = pow($lado1, 2); // potenciacao

echo "A area do quadrado é: $area <br>";

/**
 * Calcule a area de um triangulo equilatero
 */
$base = 10;
$altura = 10;
$area = ($base * $altura) /2;
echo " A area do triangulo equilatero é: $area <br>";

// operador modulo %

/**
 * Ler um numero informado pelo usuario e exibir se o numero e impar ou par.
 * Dica: operador modulo % e IF ELSE
 */
$numero = 7;

if ($numero % 2 == 0) {
    echo "O numero $numero é par. <br>";
} else {
    echo "O numero $numero é impar. <br>";
}
$numero = 6;
$divisor = 2;

$resultado = $numero / $divisor; // 3 quociente
$resto = $numero % $divisor; // 0 resto

$ehPar = $resto == 0; // true; 
if ($ehPar == false)

if ($ehPar == true) {
    echo "O numero $numero é par. <br>";
} else {
    echo "O numero $numero é impar. <br>";
}


/**
 * Nota do aluno média aritmetica
 */
$nota1 = 3;
$nota2 = 3;
$nota3 = 4;

$media = ($nota1 + $nota2 + $nota3) / 3;

$mediaArredondada = round($media, 2);

if ($mediaArredondada >= 7) {
    echo "O Aluno foi aprovado com a média(aritmetica) $mediaArredondada <br>";
} else {
     echo "O Aluno foi reprovado com a média(aritmetica) $mediaArredondada <br>";
}

/**
 *   Nota do aluno média harmonica
 */

$nota1 = 15;
$nota2 = 10;
$nota3 = 6;

$mediaHarmonica= 3 / ( ( 1/ $nota1) + ( 1/ $nota2) +  ( 1/ $nota3));

$mediaArredondada = round($mediaHarmonica, 2);

if ($mediaArredondada >= 7) {
    echo "O Aluno foi aprovado com a média(harmonica) $mediaArredondada <br>";
} else {
     echo "O Aluno foi reprovado com a média(harmonica) $mediaArredondada <br>";
}

/**
 *   Nota do aluno média ponderada
 */

$nota1 = 1100;
$nota2 = 2000;
$nota3 = 5500;
$nota4 = 12500;

$peso1 = 5;
$peso2 = 16;
$peso3 = 3;
$peso4 = 1;

$numerador = ($nota1 * $peso1) + ($nota2 * $peso2) + ($nota3 * $peso3) + ($nota4 * $peso4);
$denominador = $peso1 + $peso2 + $peso3 + $peso4;

$mediaPonderada = $numerador / $denominador;

$mediaArredondada = round($mediaPonderada, 2);

if ($mediaArredondada >= 7) {
    echo "O Aluno foi aprovado com a média(ponderada) $mediaArredondada <br>";
} else {
     echo "O Aluno foi reprovado com a média(ponderada) $mediaArredondada <br>";
}

echo "<br>";

//LOOPS
echo "for <br>";

$numero = 1;

for($numero = 1; $numero <= 10; $numero++) {
    for($contador = 0; $contador < 10; $contador++) {
    echo "$numero x $contador = " . $numero * $contador . "<br>";
}
 echo "<br>";
}

//LOOPS - WHILE
echo "while <br>"; 

$numero = 1;
$contador = 0;

while ($contador <= 10) {
    echo "$numero x $contador = " . $numero * $contador . "<br>";
    $contador++;
    
    if ($contador == 11) {
        $numero++;
        $contador = 0;
        echo "<br>";
    }

    if ($numero == 11) {
        break;
    }
}

//LOOPS - DO-WHILE
echo "do-while <br>";
$numero = 1;
$contador = 0;

do {
    echo "$numero x $contador = " . $numero * $contador . "<br>";
    $contador++;
}
while ($contador <= 10);

echo "<br>";

//LOOPS - FOREACH
echo "foreach <br>";

//Listar os 10 primeiros numeros pares com LOOP - Escolher FOR, WHILE OU DO-WHILE
// 2, 4, 6, 8, 10, 12, 14, 16, 18, 20
echo "<br>10 primeiros numeros pares <br>";

$contador = 0;

for($numero = 1; $contador < 10; $numero++) {
    $divisor = 2;

    $resultado = $numero / $divisor; // 3 quociente
    $resto = $numero % $divisor; // 1 resto

    $ehPar =  $resto == 0; // true || false

    if ($ehPar) {
        echo "O numero $numero é par. <br>";
        $contador++;
    }
}

echo "<br>";

//Listar os 10 primeiros numeros pares com LOOP - Escolher FOR, WHILE OU DO-WHILE
// 1, 3, 5, 7, 9, 11, 13, 15 ,17, 19
echo "<br>10 primeiros numeros impares <br>";

$contador = 1;

for($numero = 1; $contador < 20; $numero++) {
    $divisor = 2;

    $resultado = $numero / $divisor; // 3 quociente
    $resto = $numero % $divisor; // 1 resto

    $ehPar =  $resto == 1; // true || false

    if ($ehPar) {
        echo "O numero $numero é impar. <br>";
        $contador++;
    }
}
echo "<br>";

// EXERCICIOS de REVISAO AULA 14/04/2026.

/**
 * Calcular IMC(Indice de Massa Corporal) de uma pessoa e
 * exibir os valores utilizados no calculo assim como o seu IMC.
 *
 * Saída esperada: O IMC é: 123
 */

$peso = 80;
$altura = 1.75;

$resultado = $peso / ($altura * $altura);

echo "O IMC é: $resultado <br>";

echo "<br>";

/**
 * Calcular quantos segundos tem em 2 horas e 30 minutos e exibir o valor.
 *
 * Dica: converter tudo para uma mesma medida (segundos) para facilitar o calculo.
 *
 * Saída esperada: O Total em segundos é: 9000.
 */
$dias = 1;
$horas = 0;
$minutos = 0;
$segundos = 0; //Descobrir

$diasEmHoras = $dias * 24;
$diasEmMinutos = $diasEmHoras * 60;
$diasEmSegundos = $diasEmMinutos * 60;
$horasEmMinutos = $horas * 60;
$horasEmSegundos = $horasEmMinutos * 60;
//
$minutosEmSegundos = $minutos * 60;

$segundos = $diasEmSegundos + $horasEmSegundos + $minutosEmSegundos;

echo "O total em segundos é: $segundos <br>";

echo "<br>";
/**
 * Simular o funcionamento de uma calculadora com as duas estruturas lógicas:
 * Switch Case e IF ELSE IF ELSE. Não é necessário o ZERAR, somente o calculo.
 * Operadores: + - * /
 *
 * Dica: utilizar 4 variáveis, uma delas vai ser $operador a outra $resultado.
 */

$valor1 = 200;
$operador = "/";
$valor2 = 5;

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
 * Exibir os numeros em ordem DECRESCENTE (Maior para Menor - DESC) de 10 -
 *
 * Dica: utilizar laçoes de repetição(loops) FOR e WHILE
 *
 * Saída esperada: 10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 0.
 */
echo "<br>";

for ($i = 10; $i >= 1; $i--) {
    echo $i . " ";
}
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

$contador = 0;

for($numero = 1; $contador < 10; $numero++) {
    $divisor = 2;

    $resultado = $numero / $divisor; // 3 quociente
    $resto = $numero % $divisor; // 1 resto

    $ehPar =  $resto == 0; // true || false

    if ($ehPar) {
        echo "O numero $numero é par. <br>";
        $contador++;
    }
}

echo "<br>";

//Calcular o tempo de duração de um jogo, baseado em horario de inicio e horario de fim
//Resultado deve ser sempre 90
//Resolver o jogo que começar as 23hrs do dia 1 e vá até 00.30 do dia 2
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
$Esposa = "Mayara";
$Endereço = "Rua Marcos Pedro Flaiban, 70";
$nomeMae = "Sandra"; // camel case
$nomePai = "Fabio";

echo "Olá $nome, de idade $idade anos, casado com $Esposa e residente da $Endereço <br>";

/**
 * Aluno aprovado ou reprovado
 */

$nota1 = 7;
$nota2 = 5.9;
$nota3 = 4.7;

$media = ($nota1 + $nota2 + $nota3) / 3;

$mediaArredondada = round($media, 2);

if ($mediaArredondada >= 7){;
    echo "O aluno foi aprovado com a média $mediaArredondada <br>";
}  else {
    echo "O aluno foi reprovado com a média $mediaArredondada <br>";
}

echo "<br>";

//Estudos de LOOPs
//FOR 
//Loops com uma tabuada
echo "for - uma tabuada <br>";

$numero = 1;
$contador = 10;

for($numero = 1; $numero <= 10; $numero++) {
    echo "$numero x $contador = " . $numero * $contador . " <br>";
}

echo "<br>";

//Loops com mais de uma tabuada
echo "for - duas ou mais tabuadas <br>";

for($numero = 1; $numero <= 5; $numero++) {
    for($contador = 1; $contador <= 10; $contador++) {
    echo "$numero x $contador = " . $numero * $contador . " <br>";
    }
 echo "<br>";
}

echo "<br>";

//Estudos de LOOPS - WHILE - Necessário sempre as duas variáveis $var1 e $var2
//Loops While - com uma tabuada
echo "Loops While - uma tabuada <br>";

$numero = 4;
$contador = 1;

while ($contador <= 10) {
    echo "$numero x $contador = " . $numero * $contador . "<br>";
    $contador++;
}
    echo "<br>";

echo "Loops While  - duas ou mais tabuadas <br>";

$numero = 1;
$contador = 1;

while ($contador <= 10) {
    echo "$numero x $contador = " . $numero * $contador . "<br>";
    $contador++;
    
    if ($contador == 11) {
        $numero++;
        $contador = 1;
        echo "<br>";
    }

    if ($numero == 11) {
        break;
    }
}

//Estudos de LOOPS - DO WHILE - 

/**
 * Exibir os numeros em ordem DECRESCENTE (Maior para Menor - DESC) de 10 -
 *
 * Dica: utilizar laçoes de repetição(loops) FOR e WHILE
 *
 * Saída esperada: 10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 0.
 */
echo "<br>";

for($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
echo "<br>";

/**
 * Com base no exercicio de:
 * Listar os 10 primeiros numeros pares com laçoes de repetição(loops) utilizando FOR e WHILE.
 * Encontrar os 5 primeiros numeros Primos.
 * Dica: Utilizar calculo dos pares, sendo que o unico primo par é o 2.
 * Saída esperada: Os 5 primeiros Primos são: 3, 5, 7, 11, 13
 */
echo "<br>";

$limitePrimos = 5;
$contadorPrimos = 0;
$primos = "";

for($numero = 3; $contadorPrimos < $limitePrimos; $numero++) {

    $ehPrimo = true;
    $antecessor = $numero - 1; // 6

    for($divisor = 2; $divisor <= $antecessor; $divisor++) {
    
        $resto = $numero % $divisor;
        $naoEhPrimo = $resto == 0;

        if ($naoEhPrimo) {
           $ehPrimo = false;
           break;
        }

    }

    if ($ehPrimo) {
        $contadorPrimos++;
        $primos .= "$numero, ";
    }
}

 echo "Os $limitePrimos primeiros Primos são: $primos<br>";

/**
 * Calcular o tempo de duração de um jogo de futebol.
 * Considerando que um jogo pode começar em um dia e terminar no outro.
 * ex.: 23:30 - 01:00
 * 
 * Fase 1: Jogo vai ter exatos 90 minutos.
 * Fase 2: Jogo pode ter acréscimos.
 * 
 * Dica; Converter tudo para uma mesma medida (segundos) para facilitar o calculo.
 * 
 * Saída esperada: O horario do término da partida é: 16:00:00.
 */

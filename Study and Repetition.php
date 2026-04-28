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

//Calcular o tempo de duração de um jogo, baseado em horario de inicio e horario de fim
//Resultado deve ser sempre 90
//Resolver o jogo que começar as 23hrs do dia 1 e vá até 00.30 do dia 2

//refazer o codigo e entender o significado de cada um

echo "Duração de uma partida de futebol em minutos <br>";

$horaInicio = "14:00";
$horaFim = "16:00";

$tempoJogo = strtotime($horaFim) - strtotime($horaInicio);
$minutos = $tempoJogo / 60;

echo "<b> O jogo durou $minutos minutos </b> <br>";

echo "<br>";

echo "Jogo começando em um dia e terminando em outro <br>";

$inicio = new DateTime('2026-04-28 23:00:00');
$fim = new DateTime('2026-04-29 00:30:00');
$intervalo = $inicio->diff($fim);

echo "Tempo de jogo: " . $intervalo->format('%H horas e %I minutos');
echo "<br>";

$totalMinutos = ($intervalo->days * 24 * 60) + ($intervalo->h * 60) + $intervalo->i;
echo "\nTotal em minutos: " . $totalMinutos . " minutos.";


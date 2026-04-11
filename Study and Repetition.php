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

<?php

//Tipos primitivos de dados: int, float, string, boolean, char.

//Tipos de dados estruturados: Array || vetor, objetos.

$numero = 10; // int
$numero = 10.0; // float || double (decimal)

$listaValores = array(); // array vazio  //Modo antigo, utilizado em phps mais velhos
$listaValores = []; // array vazio

$listaValores = array(10, 20, 30, 50); //Modo antigo
$listaValores = [10, 20, 30, 50, 60, 70, 90];
//                0,  1, 2,  3

echo $listaValores[5]; // 20
echo "<br>";   

$tam = count($listaValores); // 4 //Variavel $tam; = é o tamanho do array, seria o mesmo que colocar como $tamanhoArray

// print_r($listaValores); //print_r = print_raw = escrever de maneira "crua", sem nenhuma "edição";

for ($i = 0; $i < $tam; $i++) {
    echo $listaValores[$i] . "<br>";

}   
/**
 * Somar dois vetores e exibir o resultado. - estudar e fazer novos testes
 * Exemplo:
 * $vetor1 = [1, 2, 3];
 * $vetor2 = [4, 5, 6];
 * Resultado: [5, 7, 9]
 */

$vetor1 = [1, 2, 3];
$vetor2 = [4, 5, 6];
$resultado = [];

for ($i = 0; $i < count($vetor1); $i++) {
    $valor1 = $vetor1[$i]; // 1
    $valor2 = $vetor2[$i]; // 4

    $soma = $valor1 + $valor2; // 1 + 4 = 5
    
    $resultado[$i] = $soma; // $resultado[$i] = 5

    // $resultado[] = $vetor1[$i] + $vetor2[$i];
}

$tamanhoArray = count($resultado);

for ($i = 0; $i < $tamanhoArray; $i++) {
    echo "Indice(i): $i - Valor: " . $resultado[$i] . "<br>";
}
<?php

//Tipos primitivos de dados: int, float, string, boolean, char.

//Tipos de dados estruturados: Array || vetor, objetos.

$numero = 10; // int
$numero = 10.0; // float || double (decimal)

$listaValores = array(); // array vazio  //Modo antigo, utilizado em phps mais velhos
$listaValores = []; // array vazio

$listaValores = array(10, 20, 30, 50); //Modo antigo
$listaValores = [10, 20, 30, 50];
//                0,  1, 2,  3

$tam = count($listaValores); // 4

print_r($listaValores);

for ($i = 0; $i < $tam; $i++) {
    echo $listaValores[$i] . "<br>";
}

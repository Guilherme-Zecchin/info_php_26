<?php

require_once "conexao.php";  // GB - Garbagge collector;
require_once "BancoDeDados.php";
require_once "FuncionarioModel.php;

$banco = new BancoDeDados($conexao);
$funcionarioModel = new FuncionarioModel($banco);   

echo "<pre>";
try {
    $funcionarios = $funcionarioModel->listar();
    print_r($funcionarios);
} catch (Exception $e) {
    echo $e->getMessage();
}

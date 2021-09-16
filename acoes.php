<?php

require("./funcoes.php");

$novoFuncionario = [

    "id" => random_int(1,100000),
    "nome" => $_POST["nome"],
    "sobrenome" => $_POST["sobrenome"],
    "email" => $_POST["email"],
    "sexo" => $_POST["sexo"],
    "enderecoIP" => $_POST["enderecoIP"],
    "pais" => $_POST["pais"],
    "departamento" => $_POST["departamento"]

];

adicionarFuncionario("./funcionarios.json" , $novoFuncionario);

header("location: index.php");
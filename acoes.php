<?php

require("./funcoes.php");

$novoFuncionario = [

    "id" => $_POST["id"],
    "nome" => $_POST["nome"],
    "sobrenome" => $_POST["sobrenome"],
    "email" => $_POST["email"],
    "genero" => $_POST["genero"],
    "enderecoIP" => $_POST["enderecoIP"],
    "pais" => $_POST["pais"],
    "departamento" => $_POST["departamento"]

];

adicionarFuncionario("./funcionarios.json" , $novoFuncionario);

header("location: index.php");
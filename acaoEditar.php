<?php

require("./funcoes.php");

$funcionarioEditado = [

    "id" => $_POST["id"],
    "nome" => $_POST["nome"],
    "sobrenome" => $_POST["sobrenome"],
    "email" => $_POST["email"],
    "sexo" => $_POST["sexo"],
    "enderecoIP" => $_POST["enderecoIP"],
    "pais" => $_POST["pais"],
    "departamento" => $_POST["departamento"]

];

editarFuncionario("./funcionarios.json" , $funcionarioEditado);

header('location: index.php');


?>
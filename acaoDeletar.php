<?php

require("./funcoes.php");

$idFuncionario = $_GET["id"];

deletarFuncionario("./funcionarios.json" , $idFuncionario);

header("location:empresaX.php");
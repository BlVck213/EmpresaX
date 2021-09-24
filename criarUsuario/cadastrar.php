<?php

require("../funcoes.php");


$novoUsuario = [

    
    "usuario" => $_POST["usuario"],
    "senha" => $_POST["senha"],
    

];

adicionarFuncionario("../dados/usuarios.json" , $novoUsuario);

header("location: ../index.php");
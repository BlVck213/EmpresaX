<?php

require("./funcoes.php");

$funcionarios = lerArquivo("funcionarios.json");

if(isset($_GET["buscarFuncionario"])){
    $funcionarios = buscarFuncionario($funcionarios, $_GET["buscarFuncionario"]);
}else {
    echo "<h1> Não existe </h1>";
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Empresa X</title>
</head>
<body>

    <h1>Funcionários da Empresa X</h1>
    <h2>A empresa conta com <?= count(lerArquivo("funcionarios.json")) ?> Funcionários</h2>

    <form >
        <input type="text" value="<?= isset($_GET["buscarFuncionario"]) ? $_GET["buscarFuncionario"] : "" ?>" name="buscarFuncionario" placeholder="Buscar Funcionário através de Nome ou Sobrenome ou Departamento" required>
        <button>Buscar</button>
    </form>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>E-mail</th>
            <th>Sexo</th>
            <th>Endereço Ip</th>
            <th>País</th>
            <th>Departamento</th>
        </tr>

        <?php
        foreach($funcionarios as $funcionario) {
        ?>
        <tr>
            <td> <?= $funcionario->id ?> </td>
            <td> <?= $funcionario->nome ?> </td>
            <td> <?= $funcionario->sobrenome ?> </td>
            <td> <?= $funcionario->email ?> </td>
            <td> <?= $funcionario->sexo ?> </td>
            <td> <?= $funcionario->enderecoIP ?> </td>
            <td> <?= $funcionario->pais ?> </td>
            <td> <?= $funcionario->departamento ?> </td>
        </tr>
        <?php
        }
        ?>


    </table>

</body>
</html>
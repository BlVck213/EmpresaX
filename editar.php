<?php

require("./funcoes.php");

$funcionarioId = $_GET["id"];

$funcionario = buscarId("funcionarios.json" , $funcionarioId);

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="./script.js" defer></script>
    <title>Empresa X</title>
</head>

<body>
    <div class="funcionario-div2">
        <form class="funcionario-form2" action="acaoEditar.php" method="POST">
            <?php
            if (!$funcionario) echo "<h1>Funcionário não encontrado</h1>";
            else {
            ?>
                <h1>Editar funcionário</h1>
                <input type="hidden" placeholder="Digite o id" name="id" value="<?= $funcionario->id ?>"/>
                <input type="text" placeholder="Digite o primeiro nome" name="nome" value="<?= $funcionario->nome ?>"/>
                <input type="text" placeholder="Digite o sobrenome" name="sobrenome" value="<?= $funcionario->sobrenome ?>"/>
                <input type="text" placeholder="Digite o e-mail" name="email" value="<?= $funcionario->email ?>"/>
                <input type="text" placeholder="Digite o sexo" name="sexo" value="<?= $funcionario->sexo ?>"/>
                <input type="text" placeholder="Digite o IP" name="enderecoIP" value="<?= $funcionario->enderecoIP ?>"/>
                <input type="text" placeholder="Digite o país" name="pais" value="<?= $funcionario->pais ?>"/>
                <input type="text" placeholder="Digite o departamento" name="departamento" value="<?= $funcionario->departamento ?>"/>
                <div class="botoes">  
                    <button class="salvar">Salvar</button>
                </div>
            <?php 
            } 
            ?>
        </form>
    </div>
</body>

</html>
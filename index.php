<?php

require("./funcoes.php");

$funcionarios = lerArquivo("funcionarios.json");

if(isset($_GET["buscarFuncionario"])){
    $funcionarios = buscarFuncionario($funcionarios, $_GET["buscarFuncionario"]);
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <title>Empresa X</title>
</head>
<body>

    <h1>Funcionários da Empresa X</h1>
    <h2>A empresa conta com <?= count(lerArquivo("funcionarios.json")) ?> Funcionários</h2>

    <form >
        <input type="text" value="<?= isset($_GET["buscarFuncionario"]) ? $_GET["buscarFuncionario"] : "" ?>" name="buscarFuncionario" placeholder="Buscar Funcionário através de Nome ou Sobrenome ou Departamento" required>
        
        <button class="buscar">
        person_search
      </button>

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


    <button class="ADD" id="ADD" name="ADD">Adicionar Funcionário</button>


<div class="container">
    <form class="form">

            <h1>Adicionar Novo Funcionário!</h1>

            <label for="id">ID:</label>
            <input id="id" name="id" required/>

            <label for="nome">Nome:</label>
            <input id="nome" name="nome" required/>

            <label for="sobrenome">Sobrenome:</label>
            <input id="sobrenome" name="sobrenome" required/>

            <label for="email">Email:</label>
            <input id="email" name="email" required/>

            <label for="genero">Genero:</label>
            <input id="genero" name="genero" required/>

            <label for="enderecoIP">Endereço IP:</label>
            <input type="" id="enderecoIP" name="enderecoIP" required/>

            <label for="pais">País:</label>
            <input id="pais" name="pais" required/>

            <label for="departamento">País:</label>
            <input id="departamento" name="departamento" required/>

            <button>Salvar</button>

    </form>
</div>



</body>
</html>
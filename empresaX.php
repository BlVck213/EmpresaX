<?php

session_start();

require_once("./funcoes.php");

$funcionarios = lerArquivo("./funcionarios.json");

if(isset($_GET["buscarFuncionario"]) && $_GET["buscarFuncionario"] != ""){
    $funcionarios = buscarFuncionario($funcionarios, $_GET["buscarFuncionario"]);
}

validarLogin();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <script src="script.js" defer></script>
    <title>Empresa X</title>
</head>
<body>

    <header class="toolbar">
        <h2>
            <?php echo 'Olá ' .$_SESSION['usuario'] . ' - Login efetuado em: ' .$_SESSION['data_hora']; ?>
        </h2>

        
            <a class="material-icons" href="processa_login.php?logout=true">logout</a>
    
    </header>

    <h1>Funcionários da Empresa X</h1>
    <h2>A empresa conta com <?=count(lerArquivo("./funcionarios.json"))?> Funcionários</h2>

    <div class="row">
        <form class="search-form" >
            <input type="search" value="<?= isset($_GET["buscarFuncionario"]) ? $_GET["buscarFuncionario"] : "" ?>" name="buscarFuncionario" placeholder="Buscar Funcionário através de Nome ou Sobrenome ou Departamento" required>
            <button class="material-icons">person_search</button> 
        </form>
        <button class="ADD" id="add" name="add"><img src="icons/adicionar.png" alt=""></button>
    </div>

    <div class="funcionario-div">

        <form class="funcionario-form" action="acoes.php" method="POST">

                <div class="Novo">
                    <h1>Adicionar Novo Funcionário!</h1>
                </div>

                <label for="nome">Nome:</label>
                <input type="text" name="nome" required/>

                <label for="sobrenome">Sobrenome:</label>
                <input type="text" name="sobrenome" required/>

                <label for="email">Email:</label>
                <input type="text" name="email" required/>

                <label for="sexo">Sexo:</label>
                <input type="text" name="sexo" required/>

                <label for="enderecoIP">Endereço IP:</label>
                <input type="text"  name="enderecoIP" required/>

                <label for="pais">País:</label>
                <input type="text" name="pais" required/>

                <label for="departamento">Departamento:</label>
                <input type="text" name="departamento" required/>


            <div class="botoes">    
                <button action="./index.php" type="exit" class="exit" id="sair">Cancelar</button>
                <button class="salvar" type="submit">Salvar</button>
            </div>
        </form>

    </div>


    <table>

        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>E-mail</th>
            <th>Sexo</th>
            <th>Endereço Ip</th>
            <th>País</th>
            <th>Departamento</th>
            <th>Ações</th>
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
            <td>
                <div class="row">
                    <button onclick="editar(<?= $funcionario->id ?>)"  class="edit" id="edit" name="edit"><img src="icons/editar.png" alt=""></button>
                    <button onclick="deletar(<?= $funcionario->id ?>)" class="delete" id="delete" name="delete"><img src="icons/deletar.png" alt=""></button>
                </div>
            </td>
        </tr>
        <?php
        }
        ?>


    </table>







</body>
</html>
<?php

session_start();


require("./funcoes.php");

if(isset($_POST["usuario"]) || isset($_POST["senha"])) {
    $usuario = $_POST["usuario"];
    $senha =  $_POST["senha"];

    realizarLogin($usuario, $senha, lerArquivo("./dados/usuarios.json"));

} else if($_GET["logout"]) {

    finalizarLogin();

}
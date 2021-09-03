<?php

function lerArquivo($nomeArquivo){
    $arquivo = file_get_contents($nomeArquivo);
    $jsonArray = json_decode($arquivo);
    return $jsonArray;
}

$funcionariosFiltro = [];
function buscarFuncionario($funcionarios, $NSD ){
    foreach($funcionarios as $funcionario){
        if($funcionario->nome == $NSD) {
    $funcionariosFiltro[] = $funcionario; 
        } else if($funcionario->sobrenome == $NSD) {
            $funcionariosFiltro[] = $funcionario; 
        } else if($funcionario->departamento == $NSD) {
            $funcionariosFiltro[] = $funcionario; 
        }
    }
    return $funcionariosFiltro;
}

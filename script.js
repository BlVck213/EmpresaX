"use strict"

function Adicionar(){
        document.querySelector(".funcionario-div").style.display = "flex";
}


function Sair(){
        document.querySelector(".funcionario-div").style.display = "none";
}


function deletar(idFuncionario){

        let confirmacao = confirm("Deseja deletar este Funcionário?");

        if(confirmacao){
        window.location = "acaoDeletar.php?id=" + idFuncionario;
        }
}


function editar(idFuncionario){

  
        window.location = "editar.php?id=" + idFuncionario;
        

}






document.getElementById("add").addEventListener("click", Adicionar);
document.getElementById("sair").addEventListener("click", Sair);

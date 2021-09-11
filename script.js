"use strict"

function Adicionar(){
        document.querySelector(".funcionario-div").style.display = "flex";
}


function Sair(){
        document.querySelector(".funcionario-div").style.display = "none";
}


// function Deletar(){
//         document.querySelector(".delete-div").style.display = "flex";
// }

function deletar(idFuncionario){

        let confirmacao = confirm("Deseja deletar este Funcionário?");

        if(confirmacao){
        window.location = "acaoDeletar.php?id=" + idFuncionario;
        }
}

// function exit(){
//         document.querySelector(".delete-div").style.display = "none";
// }

document.getElementById("add").addEventListener("click", Adicionar);
document.getElementById("sair").addEventListener("click", Sair);
// document.getElementById("delete").addEventListener("click" , Deletar);
// document.getElementById("sair2").addEventListener("click", exit);

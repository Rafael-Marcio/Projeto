function Caracteres(){
    let senha = document.getElementById('senha');
    let mensagem = document.getElementById('mensagem');
    let count = senha.value.length;
    if( count < 8 ){
        mensagem.innerHTML = "é nescessário que tenha no minímo 8 dígitos.";
    }
    else if( count > 16){
        mensagem.innerHTML = "É nescessário que tenha no máximo 16 dígitos.";
    }
    else{
        mensagem.innerHTML = "Parabéns senha aceita!";
    }
}
function Email(){
    let user = document.getElementById('user').value;
    let users = user.includes("@");
    if(users == false){
        mensagem.innerHTML = "Erro email incorreta...Nescessário @.";
    }
    else{
        mensagem.innerHTML = "";
    }
}
function MouseOve(){
    let boxColor = document.getElementById('box');
    boxColor.style.backgroundColor = "red";
}
function MouseOut(){
    let boxColor = document.getElementById('box');
    boxColor.style.backgroundColor = "blue";
    
}
function MouseUp(){
    let boxColor = document.getElementById('box');
    boxColor.style.backgroundColor = "yellow";
    
}
function MouseDown(){
    let boxColor = document.getElementById('box');
    boxColor.style.backgroundColor = "green";
    
}
//Pegando as informações do Formulário.
let btndeslogar = document.getElementById('btnsair');
let btnPostar = document.getElementById('btnPostar');
let btnEditar = document.getElementById('btnEditar');
let btnPostagem = document.getElementById('btnPostagem');


btndeslogar.addEventListener('click', deslogar);
btnPostar.addEventListener('click',  Postar);
btnEditar.addEventListener('click',  Editar);
//colocando o Focus no botão ao iniciar  a tela HOME

var id = '';

setTimeout(carregarPosts, 3000);

function deslogar() {
    let xhttp = new Http();
    xhttp.escreveConsole("Deslogando");
    //usando a classe HTTP passando o TIPO, URL, DADOS caso necessite
    //Callback é a forma de passar uma função para outra Função veja abaixo
    //Estamos chamando um método da classe e passando uma função para tratar o retorno 
    xhttp.xhrGET('./index.php?class=Usuario&method=deslogar', function (error, response) {
        //Temos duas possibilidades de retorno da requisição error ou response
        if (error) {

            //mostrando o erro
            console.log("O erro foi: ", error);

        } else {

            console.log(response);

            if (response === "Autenticado") {

                window.location.href = "./index.php?class=Home";

            } else {

                console.log("Sistema diz Deslogado :", response);
                // Ou você pode redirecionar para uma página local
                window.location.href = "./index.php?class=Index";
            }


        }

    })

}

function carregarPosts() {
    let span = document.getElementById('loader');
    let meusPosts = document.getElementById('posts');
    meusPosts.style.display = "block";
    span.style.display = "none";
    
    let xhttp = new Http();
    xhttp.escreveConsole("Carregando Posts");
    //usando a classe HTTP passando o TIPO, URL, DADOS caso necessite
    //Callback é a forma de passar uma função para outra Função veja abaixo
    //Estamos chamando um método da classe e passando uma função para tratar o retorno 
    xhttp.xhrGET('./index.php?class=Posts', function (error, response) {
        //Temos duas possibilidades de retorno da requisição error ou response
        if (error) {

            //mostrando o erro
            console.log("O erro foi: ", error);

        } else {

            console.log(response);
            var posts = JSON.parse(response);
            posts.forEach(registro => {
                
                let linha = `<h1>${registro.posts} </h1><br>`;
                meusPosts.innerHTML += linha;

            });



        }
    })
}

setInterval(DataHora, 0);

    function DataHora() {
        var dataAtual = new Date();

        var ano = dataAtual.getFullYear();
        var mes = (dataAtual.getMonth() + 1).toString().padStart(2, '0');
        var dia = dataAtual.getDate().toString().padStart(2, '0');
        var hora = dataAtual.getHours().toString().padStart(2, '0');
        var minuto = dataAtual.getMinutes().toString().padStart(2, '0');
        var segundo = dataAtual.getSeconds().toString().padStart(2, '0');

        var dataFormatada = dia + '/' + mes + '/' + ano;
        var horaFormatada = hora + ':' + minuto;

        document.getElementById('data').value = dataFormatada;
        document.getElementById('hora').value = horaFormatada;
    }

    function Postar(ev) {
        ev.preventDefault();
        
        let xhttp = new Http();
        xhttp.escreveConsole("Adicionando um Post");
        //usando a classe HTTP passando o TIPO, URL, DADOS caso necessite
        //Callback é a forma de passar uma função para outra Função veja abaixo
        //Estamos chamando um método da classe e passando uma função para tratar o retorno 
        let form = document.getElementById('formPost');
        let params = new FormData(form);

        console.log(params);

        xhttp.xhrPost('./index.php?class=Posts&method=insert', params, function (error, response) {
            //Temos duas possibilidades de retorno da requisição error ou response
            if (error) {
    
                //mostrando o erro
                console.log("O erro foi: ", error);
    
            } else {
    
                if (response) {
                    console.log(response);
                    alert("Nova Postagem!!");
                    window.location.reload();
                } else {
                    console.log("Erro ao Postar");
                    alert("Erro ao Postar!!");
                }
    
    
    
            }
        })
    }

    function PegarLine(componente) {
        
        id = componente.getAttribute('data-id');
        console.log(id);
        var post = document.getElementById('editarpostagem');
        let xhttp = new Http();
        xhttp.escreveConsole("Carregando Postagem para Edição");
        //usando a classe HTTP passando o TIPO, URL, DADOS caso necessite
        //Callback é a forma de passar uma função para outra Função veja abaixo
        //Estamos chamando um método da classe e passando uma função para tratar o retorno 
        var params = `id = ${id}`;
        xhttp.xhrPost('./index.php?class=Posts&method=find&id='+ id , params, function (error, response) {
            //Temos duas possibilidades de retorno da requisição error ou response
            if (error) {
    
                //mostrando o erro
                console.log("O erro foi: ", error);
    
            } else {
    
                console.log(response);
                resp = removedName(response);
                post.innerHTML = resp;
    
    
            }
        })
    }

    function removedName(retorno){
        return retorno.replace("find", "");
    }
    function removedNameUpdate(retorno){
        return retorno.replace("update", "");
    }
    function removedNameDelete(retorno){
        return retorno.replace("delete", "");
    }
    

    function Editar() {
        
    
        let xhttp = new Http();
        xhttp.escreveConsole("Carregando Edição");
        //usando a classe HTTP passando o TIPO, URL, DADOS caso necessite
        //Callback é a forma de passar uma função para outra Função veja abaixo
        //Estamos chamando um método da classe e passando uma função para tratar o retorno
        let edit = document.getElementById('editPost');
        let params = new FormData(edit);
        xhttp.xhrPost('./index.php?class=Posts&method=update&id='+ id , params, function (error, response) {
            //Temos duas possibilidades de retorno da requisição error ou response
            if (error) {
    
                //mostrando o erro
                console.log("O erro foi: ", error);
    
            } else {
    
                resp = removedNameUpdate(response);
                console.log(resp);
                alert("Editado com sucesso!!");
                window.location.reload();
    
            }
        })
    }

    function Delete(componente) {
        
        id = componente.getAttribute('data-id'); 


        let xhttp = new Http();
        xhttp.escreveConsole("Deletar Post");
        //usando a classe HTTP passando o TIPO, URL, DADOS caso necessite
        //Callback é a forma de passar uma função para outra Função veja abaixo
        //Estamos chamando um método da classe e passando uma função para tratar o retorno 
        var params = `id = ${id}`;
        xhttp.xhrPost('./index.php?class=Posts&method=delete&id='+ id , params, function (error, response) {
            //Temos duas possibilidades de retorno da requisição error ou response
            if (error) {
    
                //mostrando o erro
                console.log("O erro foi: ", error);
    
            } else {
    
                console.log(response);
                resp = removedNameDelete(response);
                if(resp === "Deletado") {
                    alert("Deletado com sucesso!");
                    window.location.reload();
                }
            }
        })
    }
    function Redirecionamento() {
        window.location.href = "./index.php?class=Home";
    }
    function Posts() {
        window.location.href = "./index.php?class=Posts";
    }
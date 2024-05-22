//Pegando as informações do Formulário.
const btndeslogar = document.getElementById('btnsair');
const btnSalvarPost = document.getElementById('btnSalvarPost');

//Ações dos Botões
btndeslogar.addEventListener('click', deslogar);
btnSalvarPost.addEventListener('click', SalvarPost);

//colocando o Focus no botão ao iniciar  a tela HOME
btndeslogar.focus();

function deslogar() {
    console.log("teste");
    const xhttp = new Http();
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

            if (response === "Deslogado") {

                window.location.href = "./index.php?class=Index";

            } else {

                console.log("Sistema diz Deslogado :", response);
                // Ou você pode redirecionar para uma página local
                window.location.href = "./index.php?class=Index";
            }


        }

    })


}

//removendo o metodo do retorno da Classe 
function removeNameMethod(retorno) {

    return retorno.replace("insert", "");

}


function SalvarPost() {

    const frm_Post = document.getElementById('frm_Post');
    const xhttp = new Http();
    xhttp.escreveConsole("SalvandoPost");
    let params = new FormData(frm_Post);
    xhttp.xhrPost('./index.php?class=Posts&method=insert', params, function (error, response) {
        //Temos duas possibilidades de retorno da requisição error ou response
        if (error) {

            //mostrando o erro
            console.log("O erro foi: ", error);

        } else {

            console.log(removeNameMethod(response));

            if (removeNameMethod(response) === "Sucesso_Salvou_Post") {

                window.location.href = "./index.php?class=Home";

            } else {

                console.log("Erro ao Salvar", removeNameMethod(response));
                // Ou você pode redirecionar para uma página local
                window.location.href = "./index.php?class=Home";
            }


        }

    })

}
function DeletarPost(componente) {

    const valor_id = componente.getAttribute('id');
    console.log("Deletar o id:", valor_id);
    //chamando a Requisicao DELETE 
    const xhttp = new Http();
    xhttp.escreveConsole("Requisitando um Delete");
    xhttp.xhrDelete('./index.php?class=Posts&method=delete&id=' + valor_id, function (error, response) {
        //Temos duas possibilidades de retorno da requisição error ou response
        if (error) {

            //mostrando o erro
            console.log("O erro foi: ", error);

        } else {



            if (response === "Deletado") {

                window.location.href = "./index.php?class=Home";

            } else {

                console.log("Erro ao Deletar", response);
                // Ou você pode redirecionar para uma página local
                //window.location.href = "./index.php?class=Home";
            }


        }

    })


}
function EditarPost(componente) {

    const valor_id = componente.getAttribute('id');
    console.log("Editar o id:", valor_id);
    //chamando a Requisicao PUT 


}

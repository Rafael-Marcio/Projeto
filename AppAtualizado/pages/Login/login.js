//Pegando as informações do Formulário.
const btnlogar = document.getElementById('btnlogar');
const txtUser = document.getElementById('user');


btnlogar.addEventListener('click', autenticar);


//Colocando o Focus na txtUser ao iniciar a aplicação
txtUser.focus();

function autenticar(ev) {
    ev.preventDefault();
    

    let xhttp = new Http();
    xhttp.escreveConsole("Estou Autenticando o Usuário");

    //SEGUNDA FORMA DE PASSAR OS DADOS
    let login = document.getElementById('login');
    let params = new FormData(login);
    console.log(params);

    xhttp.xhrPost('./index.php?class=Usuario&method=autenticar', params, function (error, response) {
        //Temos duas possibilidades de retorno da requisição error ou response
        if (error) {

            //mostrando o erro
            console.log(error);

        } else {

            console.log(response);
            if (response = "Autenticado") {

                window.location.href = "./index.php?class=Home";
            } else {
                console.log("Intruso tentando logar...");
                txtUser.focus();
            }
        }
    })

}

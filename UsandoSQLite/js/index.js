//Pegando as informações do Formulário
let btnLogar = document.getElementById('btnLogar');

btnLogar.addEventListener('click', autenticar);

function autenticar(e) {
    
    e.preventDefault();

    let xhttp = new HttpClasse();
    xhttp.escreveConsole("Estou Autenticando o Usuário");
    //pegando os parâmetros
    //let user = document.getElementById('user').value;
    //let password = document.getElementById('password').value;
    //montando a string com os parâmetros
    //let params = `user= ${user}&password=${password}`;
    //SEGUNDA FORMA DE PASSAR OS DADOS

    let login = document.getElementById('login');
    let params = new FormData('login');

    console.log(params);

    //usando a classe HTTP passando o TIPO, URL, DADOS caso necessite
    //Callback é a forma de passar uma função para outra Função veja abaixo
    //Estamos chamando um método da classe e passando uma função para tratar o retorno
    xhttp.xhrPost('./classe/api/autenticacaoFisica', params, function (error, response) {
        
        //Temos duas possibilidades de retorno da requisição error ou response
        if (error) {

            //mostrando o erro
            console.log(error);

        } else {

            console.log(response);
            if (response = "Autenticado") {
                window.location.href = "http://localhost:/UsandoSQLite/index.php?class=Posts&method=listar";

            } else {

                alert("Usuário não Localizado...");
            }
        }
    })
}
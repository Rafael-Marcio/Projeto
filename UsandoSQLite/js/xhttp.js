function changePosts(){
    let meusPosts = document.getElementById('posts');
    let span = document.getElementById('loader');

    ObjetoXMLlistar(meusPosts);

    meusPosts.style.display = "block";
    span.style.display = "none";
}

setTimeout(changePosts, 3000);


function ObjetoXMLlistar(meusPosts){
    console.log('Início da Busca');
    let xhttp = new XMLHttpRequest();

    //aguardando a resposta pq é assincrona
    xhttp.onreadystatechange = function () {
        if (this.readyState < 4) {

            console.log(`Posição da Requisição HTTP:" ${this.readyState}`);
            //Estados para Análisar
            console.log("***********************************************");
            console.log("Estado da Requisição: " + this.readyState);
            console.log("Status da Requisição: " + this.status);
            console.log("Status Text da Requisição: " + this.statusText);
            console.log("Timeout da Requisição: " + this.timeout);
            console.log("URL da Requisição: " + this.responseURL);
            console.log("**********************************************");



        }

        if (this.readyState == 4 && this.status == 200) {

            // let meusPosts = document.getElementById('posts');
            //Estados para Análisar
            console.log("***********************************************");
            console.log("Estado da Requisição: " + this.readyState);
            console.log("Status da Requisição: " + this.status);
            console.log("Status Text da Requisição: " + this.statusText);
            console.log("Timeout da Requisição: " + this.timeout);
            console.log("URL da Requisição: " + this.responseURL);
            console.log("**********************************************");
            console.log("Concluindo a Busca");
            console.log("Fim da Busca");
            //aqui abaixo pega o retorno da requisição cuidado com vetores e temos que tratar

            //var posts = JSON.stringify(this.responseText);   //Recebendo no Formato Array
            var posts = JSON.parse(this.responseText);
            console.log(posts);
            //percorrer o array de Objetos
            posts.forEach(registro => {
                
                let linha = `<h1>${registro.posts} </h1><br>`;
                meusPosts.innerHTML += linha;

            });


        }

    };

    xhttp.open("GET", "http://localhost/UsandoSQLite/index.php?class=Posts&method=listar", true);
    xhttp.send();
}
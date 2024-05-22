class HttpClasse {

    constructor() {
        //O construtor sempre será ativado com a utilização da palavra NEW
        this.xhr = new XMLHttpRequest;
        //bind evita erros de trocar de instância
        this.xhr.onreadystatechange = this.MonitorandoState.bind(this);

    }
    MonitorandoState() {

        console.log("Lendo o State: ", this.xhr.readyState);
        console.log("Status Code: ", this.xhr.status);
        if  (this.xhr.status == "") {
            console.log("Aberta a Requisição");
        } else {
            console.log(this.xhr.statusText);
        }
    }

    xhrGET(url, callback) {
        //Concatenando os parametros á URL
        // Se desejar pode passar na URL mas deve refatoar alguns codigos abaixo inclusive remover a união do .php

        //evitamdo passar o .php
        let caminho = url + '.php';
        console.log("A URL é: ", caminho);
        this.xhr.open('GET')
    }
}
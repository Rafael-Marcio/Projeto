function inserir(){
    var razaoREME = document.getElementById('razaoReme').value;
    var CPFREME = document.getElementById('CPFReme').value;
    var endeREME = document.getElementById('endeReme').value;
    var bairroREME = document.getElementById('bairroReme').value;
    var muniREME = document.getElementById('muniReme').value;
    var telREME = document.getElementById('telReme').value;
    var inscricaoREME = document.getElementById('inscricaoReme').value;
    let remetente = {"razaoREME": razaoREME,"CPFREME": CPFREME,"endeREME": endeREME, "bairroREME": bairroREME, "muniREME": muniREME, "telREME": telREME, "inscricaoREME": inscricaoREME,};
    localStorage.setItem("Remetente", JSON.stringify(remetente));
    
    var razaoDESTI = document.getElementById("razaoDesti").value;
    var CPFDESTI = document.getElementById("CPFDesti").value;
    var telDESTI = document.getElementById("telDesti").value;
    var inscricaoDESTI = document.getElementById("inscricaoDesti").value;
    var CEPDESTI = document.getElementById("CEPDesti").value;
    var endeDESTI = document.getElementById("endeDesti").value;
    var bairroDESTI = document.getElementById("bairroDesti").value;
    var muniDESTI = document.getElementById("muniDesti").value;
    var emissaoDESTI = document.getElementById("emissaoDesti").value;
    var entradaDESTI = document.getElementById("entradaDesti").value;
    var saidaDESTI= document.getElementById("saidaDesti").value;
    var hrentradaDESTI = document.getElementById("hrEntradaDesti").value;
    var hrsaidaDESTI= document.getElementById("hrSaidaDesti").value;
    

    var codPROD = document.getElementById('codProd').value;
    var descPROD = document.getElementById('descProd').value;
    var qtdPROD = document.getElementById('qtdProd').value;
    var valorUniPROD = document.getElementById('valorUniProd').value;
    var valorTotalPROD = document.getElementById('valorTotalProd').value;
    let produtos = {"codPROD": codPROD,"descPROD": descPROD,"qtdPROD": qtdPROD,"valorUniPROD": valorUniPROD,"valorTotalPROD": valorTotalPROD,};
    localStorage.setItem("Produtos", JSON.stringify(produtos));
}

function ler(){
    var tabela = document.getElementById('tabela');
    var id = document.getElementById('idTable');
    var descricao = document.getElementById('descricaoTable');
    var qntd = document.getElementById('qtdTable');
    var valorUnit = document.getAnimations('valorTable');
    var valorTotal = document.getElementById('valorTotalTable');
    
    var produtos = localStorage.getItem("Produtos");
    var produto = JSON.parse(produtos);
    tabela.innerHTML += "<tr> <td>" + produto["codPROD"] + "</td> <td>" + produto["descPROD"] + "</td> <td>" + produto["qtdPROD"] + "</td><td>" + produto["valorUniPROD"] + "</td> <td>" + produto["valorTotalPROD"] + "</td>   </tr> ";

}
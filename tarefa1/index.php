<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="caixa">
        <div class="box" style="max-height: 80vh;">
            <div class="box1" style="padding: 12px;">
                <label style="color: white; font-weight: bolder; font-size: 24px;">Produto:</label>
                <input id="produto">
            </div>
            <div class="box1" style="padding: 12px;">
                <label style="color: white; font-weight: bolder; font-size: 24px;">Quantidade:</label>
                <input id="quantidade">
            </div>
            <div class="box1" style="padding: 12px;">
                <label style="color: white; font-weight: bolder; font-size: 24px;">Marca:</label>
                <input id="marca">
            </div>
            <div class="box1" style="padding: 12px;">
                <button id="btnCadastrar" style="color: white; font-weight: 400;">Cadastrar</button>
            </div>
        </div>
        <div class="tabela2">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Marca</th>
                    <th style="background-color: transparent; border: transparent;"></th>
                    <th style="background-color: transparent; border: transparent;"></th>
                    <th style="background-color: transparent; border: transparent;"></th>
                </tr>
                <tbody id="tabela">
                </tbody>
            </table>
        </div>
    </div>
</body>
<script>
    $(window).on('load', function() {

        var tabela = $('#tabela');

        $.ajax({
        url: "PDO/carregar.php",
        type: 'POST',

        success: function (mensagem) {
            console.log(mensagem);
            document.getElementById('tabela').innerHTML = mensagem;

        },

    });

    })

    $(document).ready(function() {
        $('#btnCadastrar').click(function() {
            //Resposta no SELECT da TELA

            //Pegando as variáveis
            let produto = $('#produto').val();
            let quantidade = $('#quantidade').val();
            let marca = $('#marca').val();

            console.log(produto);
            console.log(quantidade);
            console.log(marca);


            //Método POST - AJAX com JQuery
            $.post("./PDO/inserir.php", {

                    produto: produto,
                    quantidade: quantidade,
                    marca: marca,
                })
                //Função saída do AJAX
                .done(function(resposta) {
                    //mensagem.innerHTML = resposta;
                    console.log(resposta);
                    window.location.href = "index.php";
                })
        })
    });

    function removerElemento(idTarefa) {

        // Construa a URL com os parâmetros
        var url = './PDO/delete.php?id=' + idTarefa;
        window.location.href = url;
    }

    function Comprado(idProduto) {
        window.location.href = "./PDO/comprado.php?id=" + idProduto;

    }
    function Descomprar(idProduto) {

        window.location.href = "./PDO/descomprar.php?id=" + idProduto;


    }

    function atualizarElemento(idTarefa) {

        // Construa a URL com os parâmetros
        let produto = $('#produto').val();
        let quantidade = $('#quantidade').val();
        let marca = $('#marca').val();
        var url = './PDO/update.php?id=' + idTarefa + '&produto=' + produto + '&quantidade=' + quantidade + '&marca=' + marca;
        window.location.href = url;
    }
</script>

</html>
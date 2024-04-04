<!DOCTYPE html>
<?php 
    require_once('./pdo/verificar.php');
    require_once('./pdo/biblioteca.php');
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/principal.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <title>Tela Principal</title>
</head>
<body>
    <div class="caixa">
        <header>
            <img src="./imagens/logo-senacmg.png" alt="Senac-MG">
            <div class="box1"> 
                <div class="box1" style="display: flex; flex-direction:row;">
                    <label style=" color: black; padding-right: 6px; font-weight: bold;">Nome: </label>
                    <?php 
                        echo $_SESSION['Nome'] . "<br>";
                    ?>
                </div>
                <div class="box1" style="display: flex; flex-direction:row;">
                    <label style="color: black; padding-right: 6px; font-weight: bold;">Email: </label>
                    <?php
                        echo $_SESSION['email'] . "<br>";
                    ?>
                </div>
                <div class="box1" style="display: flex; flex-direction:row; ">
                    <label style="color: black; padding-right: 6px; font-weight: bold;">Curso: </label>
                    <?php
                        if( $_SESSION['Curso'] == "1"){
                            echo "Cabelereira <br>";
                        }
                        elseif( $_SESSION['Curso'] == "2"){
                            echo "Estética <br>";
                        }
                    ?>
                </div>
            </div>
            <button class="btn btn-danger" style="color: black; font-size: 25px; border: 2px solid black;" onclick="logout()"><i class="bi bi-box-arrow-left"></i>  Logout</button>
        </header>

        <main>
            <div class="box">
                <div class="box1">
                    <label>Nome:</label>
                    <input type="text" id="nome" placeholder="Nome">
                </div>
                <div class="box1">
                    <label>Quantidade:</label>
                    <input type="number" id="qntd" placeholder="Quantidade">
                </div>
                <div class="box1">
                    <label>Validade:</label>
                    <input type="date" id="dateVal" placeholder="Validade">
                </div>
                <div class="box1">
                    <label>Lote:</label>
                    <input type="text" id="lote" placeholder="Lote">
                </div>
                <div class="box1">
                    <button class="btn" id="btnInserir" style="background-color: #F7941D; font-size: 24px;">Inserir</button>
                </div>
            </div>
            <div class="box">
                <table class="table">
                    <tr>
                        <th id="nomeProd" style=' width: 130px;'>Produto</th>
                        <th id="qtdProd" style=' width: 50px;'>Qntd</th>
                    </tr>
                    <tbody id="tabela">

                    </tbody>

                </table>
            </div>
        </main>
    </div>
    
</body>

<script>

    $(window).on('load', function() {

    var tabela = $('#tabela');


        $.ajax({
            url: "./pdo/carregarLista.php",
            type: 'POST',

            success: function(mensagem) {
                console.log(mensagem);
                document.getElementById('tabela').innerHTML = mensagem;

            },

        });

    })


    $(document).ready(function() {
        $('#btnInserir').click(function() {
            //Resposta no SELECT da TELA

            //Pegando as variáveis
            let nome = $('#nome').val();
            let qntd = $('#qntd').val();
            let dateVal = $('#dateVal').val();
            let lote = $('#lote').val();



            //Método POST - AJAX com JQuery
            $.post("./pdo/inserirProduto.php", {

                    nome: nome,
                    qntd: qntd,
                    dateVal: dateVal,
                    lote: lote,
                })
                //Função saída do AJAX
                .done(function(resposta) {
                    //mensagem.innerHTML = resposta;
                    console.log(resposta);
                    window.location.href = "principal.php";
                })
        })
    });

    function removerElemento(idProduto){
        window.location.href = './pdo/delete.php?id=' + idProduto;
    }

    function atualizarElemento(id, produto, qtd, validade, lote) {

        $('#nome').val(produto);
        $('#qntd').val(qtd);
        $('#dateVal').val(validade);
        $('#lote').val(lote);
        $('#nome').focus();
        IdAtualizar = id;
    }

    function AddProduto(id, qtd) {
 
        var confirmacao = confirm("Tem certeza que deseja adicionar mais a este produto?");
        var data = "<?= $dataAgora ?>";

        if (confirmacao) {

            // Redireciona para a página de adição com o ID do Produto como parâmetro GET
            window.location.href = './pdo/updateMais.php?id=' + id + '&&qtd=' + qtd + '&&data=' + data;
        }
    }




    function subProduto(id, qtd) {
 
        var confirmacao = confirm("Tem certeza que deseja retirar um produto?");
        var data = "<?= $dataAgora ?>";

        if (confirmacao) {

            // Redireciona para a página de adição com o ID do Produto como parâmetro GET
            window.location.href = './pdo/updateMenos.php?id=' + id + '&&qtd=' + qtd + '&&data=' + data;
        }
    }

    function logout(){
        window.location.href = "./pdo/logout.php";
    }
</script>
</html>
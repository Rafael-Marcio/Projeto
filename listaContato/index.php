<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="./scripts/contatos.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Mask Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</head>

<body>
    <div class="caixa">
        <div class="box">
            <div class="box1" style="padding: 12px;">
                <label style="color: black; font-weight: bolder; font-size: 24px;">Nome:</label>
                <input id="nome">
            </div>
            <div class="box1" style="padding: 12px;">
                <label style="color: black; font-weight: bolder; font-size: 24px;">Email:</label>
                <input id="email">
            </div>
            <div class="box1" style="padding: 12px;">
                <label style="color: black; font-weight: bolder; font-size: 24px;">Celular:</label>
                <input id="tel" type="text">
            </div>
            <div class="box1" style="padding: 12px;">
                <label style="color: black; font-weight: bolder; font-size: 24px;">WhatsApp:</label>
                <select id="whats" name="select" style="font-size: 24px;">
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>
            <div class="box1" style="padding: 12px;">
                <button id="btnCadastrar" style="color: black; font-weight: 400;">Cadastrar</button>
                <button id="btnEditar" style="color: black; font-weight: 400;" onclick="SalvarEdicao()">Editar</button>
            </div>
        </div>

        <div class="tabela2">
            <table class="table" data-bs-theme="dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Celular</th>
                    <th>WhatsApp</th>
                    <th></th>
                    <th></th>
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
        document.getElementById('btnEditar').style.display = "none";

        $.ajax({
            url: "PDO/carregar.php",
            type: 'POST',

            success: function(mensagem) {
                console.log(mensagem);
                document.getElementById('tabela').innerHTML = mensagem;

            },

        });

    })
    $('#tel').mask('(00) 0 0000-0000');


    $(document).ready(function() {
        $('#btnCadastrar').click(function() {
            //Resposta no SELECT da TELA

            //Pegando as variáveis
            let nome = $('#nome').val();
            let email = $('#email').val();
            let tel = $('#tel').val();
            let whats = $('#whats').val();
            if (whats == 1) {
                var whatsapp = 1;
            } else {
                var whatsapp = 0;
            }



            //Método POST - AJAX com JQuery
            $.post("./PDO/inserir.php", {

                    nome: nome,
                    email: email,
                    tel: tel,
                    whatsapp: whatsapp,
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

    let idAtualizar;

    function atualizarElemento(id, nome, email, tel) {

        $('#nome').val(nome);
        $('#email').val(email);
        $('#tel').val(tel);
        $('#nome').focus();
        $('#btnEditar').css('display', 'inline-block');
        $('#btnCadastrar').css('display', 'none');
        IdAtualizar = id;
    }

    function SalvarEdicao() {

        // Construa a URL com os parâmetros
        let nome = $('#nome').val();
        let email = $('#email').val();
        let tel = $('#tel').val();
        let whats = $('#whats').val();
        window.location.href = './PDO/update.php?id=' + IdAtualizar + '&nome=' + nome + '&email=' + email + '&tel=' + tel + '&whatsapp=' + whats;
        $('#btnCadastrar').css('display', 'inline-block');
        $('#btnEditar').css('display', 'none');

    }
</script>

</html>
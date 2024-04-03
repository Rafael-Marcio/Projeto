
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/login.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue+400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">

    <!--Sweet Alert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.min.css">

    <!--Jquery p/ usar o AJAX-->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <title>Login - Biblioteca do Gosme</title>

</head>

<body>
    <div class="box">

        <main>
            <div class="login">
                <div class="titulo_login"><h1>LOGIN</h1></div>
                <div class="pergunta">
                    <p></p>
                    <input type="text" id="email" name="email" placeholder="Username">
                    <input type="password" id="senha" name="senha" placeholder="Password">
                </div>
                <div class="botoes">
                    <button id="Btn_Logar" name="Btn_Logar">LOGAR</button>
                </div>
            </div>
        </main>
    </div>

<script>
    $("#Btn_Logar").click(function(ev){
        ev.preventDefault();

        // Pega as variáveis na LIB Biblioteca
                var urlSistema = "http://localhost/EsteticaProdutos/";
        var email = $("#email").val();
        var senha = $("#senha").val();
        var dados = {
            email: email,
            senha: senha,
        };
        
        $.ajax({
            url: urlSistema + "pdo/autenticar.php",
            type: 'POST',
            data: dados,
            success: function(mensagem) {
                if (mensagem == "Foi") {

                    Swal.fire({
                        title: "LOGADO!",
                        html: "Usuário Logado com Sucesso! </br></br> Você será redirecionado em: <b></b>",
                        icon: "success",
                        position: "center",
                        confirmButtonColor: "green",
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading();
                            const timer = Swal.getPopup().querySelector("b");
                            timerInterval = setInterval(() => {
                            timer.textContent = `${Swal.getTimerLeft()}`;
                            }, 100);
                        },
                        willClose: () => {
                            clearInterval(timerInterval);
                        }
                        }).then((result) => {
                        /* Read more about handling dismissals below */
                        if (result.dismiss === Swal.DismissReason.timer) {
                            console.log("I was closed by the timer");
                        }
                    });

                    // Redireciona pra pag que eu quero
                        setTimeout(function() {
                        window.location.href =  urlSistema + "principal.php";
                        }, 3000);

                } else {

                    Swal.fire({
                    icon: "error",
                    title: "FALHA AO LOGAR!",
                    text: "Email ou Senha Incorretos!",
                    position: "center", 
                    footer: '<a href="#Testenaofuncional">Ainda não tem uma Conta? Crie Agora!</a>',
                    timer: 3400
                    });
                    console.log(mensagem);


                }
            }
        });
    });
</script>
</body>

</html> 
<!doctype html>
<?php require_once("Biblioteca/biblioteca.php");
require_once("PDO/conexao.php");
require_once('verificar.php');
?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Votações</title>
    <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body{
            width: 100vw;
            height: 94.7vh;
            display: flex;
            flex-direction: column;
        }
        header{
            width: 100%;
            height: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }
        aside{
            height: 100%;
        }
        footer{
            width: 100%;
            height: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }
        main{
            height: 94%;
            position: absolute;
            right: 0;
            top: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .title{
            width: 100%;
            height: 35px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            position: absolute;
            top: 0;
        }
        label{
            font-size: 24px;
            width: 200px;
            font-weight: bolder;
            color: white;
        }
        .btns{
            height: 40%;
            width: 80%;
            margin-top: 35px;
            margin-left: 31px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
        }
        .btn{
            width: 250px;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }
        .img{
            width: 400px;
            height: 320px;
            background-color: blue;
            border-radius: 20px;
        }
        
        input{
            width: 200px;
            height: 30px;
            font-size: 15px;
        }

    </style>
  </head>
  <body>
    <header class="bg-dark">
        <h5>
            Cabeçalho
        </h5>
        
    </header>

    <aside class="col-2 bg-dark">
        <div class="btns">
         

            <button type="button" class="btn btn-success" id="btn1" name="btn1" data-bs-toggle="modal" data-bs-target="#modalCadastrar"><i class="bi bi-trash"></i>Cadastrar Usuário</button>
            <button type="button" class="btn btn-primary" id="btn2" name="btn2" data-bs-toggle="modal" data-bs-target="#modalInserir"><i class="bi bi-minecart"></i></i>Cadastrar Competição</button>
            <button type="button" class="btn btn-warning" id="btn3" name="btn3" data-bs-toggle="modal" data-bs-target="#modalUpdate"><i class="bi bi-balloon-fill"></i>Cadastrar Quezitos</button>
            <button type="button" class="btn btn-success" id="btn4" name="btn4" data-bs-toggle="modal" data-bs-target="#modalLer"><i class="bi bi-currency-dollar"></i>Votção</button>
            <button type="button" class="btn btn-danger" id="btnLogout" name="btnLogout" onclick="LogOut()"><i class="bi bi-trash"></i>LOGOUT</button>
            <div class="box" style="color: white; font-size: 18px;">
              <?php
                echo $_SESSION['nome'];
              ?>
              <p></p>
              <?php
                echo $_SESSION['celular'];
              ?>
            </div>
        </div>
    </aside>
    <main class="col-10">
        <img src="imgs/clement-falize-z_2gYApfdqc-unsplash.jpg" alt="" style="width: 100%; height: 100%;">
    </main>
    <footer class="bg-dark">
        <h5>Rodapé</h5>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  
    <!-- Modal Cadastrar -->
    <div class="modal fade" id="modalCadastrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-image: url('imgs/pawel-czerwinski-rV8Hg07t61I-unsplash.jpg');">
        <div class="modal-dialog modal-lg" style="width: 100vw; height: 100vh; display: flex; justify-content: center; align-items: center; ">
          <div class="modal-content" style="background-color: transparent; border: 2px solid white;">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white;"> Cadastrar</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex;">
                <div class="box1">
                  <label for="">Nome: </label>
                  <input type="text" id="nome" name="nome" placeholder="Nome...">
                </div> 
                <div class="box1">
                  <label for="">Celular: </label>
                  <input type="text" id="celular" name="celular" placeholder="Celular...">
                </div>
                <div class="box1">
                  <label for="">Competição: </label>
                  <input type="text" id="competicao" name="competicao" placeholder="competicao...">
                </div> 
                <div class="box1">
                  <label for="">Nível: </label>
                  <select name="nivel" id="nivel">
                    <option value="adm">ADM</option>
                    <option value="jurado">Jurado</option>
                  </select>
                </div> 
                <div class="box1">
                    <label for="">E-mail: </label>
                    <input type="text" id="user" name="user" placeholder="E-mail...">
                  </div> 
                <div class="box1">
                    <label for="">Senha: </label>
                    <input type="password" id="senha" name="senha" placeholder="Senha...">
                </div> 
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" id="btnCadastrar" name="btnCadastrar">Cadastrar</button>
                  <div class="mensagem" id="mensagem"></div>
                </div>
            </div>
          </div>
        </div>
      </div>

      

      <!-- Modal Competição -->
    <div class="modal fade" id="modalCompetição" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-image: url('imgs/pawel-czerwinski-rV8Hg07t61I-unsplash.jpg');">
        <div class="modal-dialog modal-lg" style="width: 100vw; height: 100vh; display: flex; justify-content: center; align-items: center; ">
          <div class="modal-content" style="background-color: transparent; border: 2px solid white;">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white;"> Cadastrar</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex;">
                <div class="box1">
                  <label for="">Nome: </label>
                  <input type="text" id="nome" name="nome" placeholder="Nome...">
                </div> 
                <div class="box1">
                  <label for="">Celular: </label>
                  <input type="text" id="celular" name="celular" placeholder="Celular...">
                </div>
                <div class="box1">
                  <label for="">Competição: </label>
                  <input type="text" id="competicao" name="competicao" placeholder="competicao...">
                </div> 
                <div class="box1">
                  <label for="">Nível: </label>
                  <select name="nivel" id="nivel">
                    <option value="adm">ADM</option>
                    <option value="jurado">Jurado</option>
                  </select>
                </div> 
                <div class="box1">
                    <label for="">E-mail: </label>
                    <input type="text" id="user" name="user" placeholder="E-mail...">
                  </div> 
                <div class="box1">
                    <label for="">Senha: </label>
                    <input type="password" id="senha" name="senha" placeholder="Senha...">
                </div> 
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" id="btnCadastrar" name="btnCadastrar">Cadastrar</button>
                  <div class="mensagem" id="mensagem"></div>
                </div>
            </div>
          </div>
        </div>
      </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  
  <script type="text/javascript">
  $(document).ready(function(){
    $("#btnCadastrar").click(function() {
            event.preventDefault();

            //pegando as variáveis pgp na LIB Biblioteca
          
            var urlSistema = "<?= $url_sistema ?>";
            
            var nome = document.getElementById('nome').value;
            var celular = document.getElementById('celular').value;
            var competicao = document.getElementById('competicao').value;
            var nivel = document.getElementById('nivel').value;
            var user = document.getElementById('user').value;
            var senha = document.getElementById('senha').value;

            var dados = {
                nome: nome,
                celular: celular,
                competicao: competicao,
                nivel: nivel,
                user: user,
                senha: senha,
            }

            $.ajax({
                url: urlSistema + "PDO/Cadastrar.php",
                type: 'POST',
                //Serializando o formulário com suas inputs em vetor
                data: dados,

                success:function (mensagem) {
                    console.log("O caminho do sistema é:" + urlSistema);
                    console.log("Retorno do PHP foi: " + mensagem);
                    $('#mensagemInsert').text('');
                    $('#mensagemInsert').text(mensagem);
                    window.alert('teste');
                }

            })
    })
  });

    function LogOut(){
        window.location.href = 'logout.php';
    }
/*
     //Quando o Form der SUBMIT - Primeira forma de usar o AJAX mais simples
   $("#form").submit(function () {
 
 event.preventDefault();
 var formData = new FormData(this);
  
 //pegando Variáveis PHP na LIB Biblioteca
  
 var url_sistema = "<?= $url_sistema ?>";
  
 $.ajax({
     url: urlSistema  + "pdo/deletarLivro.php",
     type: 'POST',
     data: formData,
  
     success: function (mensagem) {
         $('#mensagem').text('');
         $('#mensagem').removeClass();
         console.log = urlSistema;
         if (mensagem.trim() == "Deletado!") {
  
             //$('#btn-fechar').click();
             //listar();  
             $('#mensagem').addClass('text-success');
             $('#mensagem').text("Deletado com Sucesso!");
             window.alert("Deletado Com Sucesso!");        
  
         } else {
  
             $('#mensagem').addClass('text-danger');
             $('#mensagem').html('Falha ao Deletar! Adicione um ID à caixa:<br/> "Insira ID para Deletar"' );
  
         }
  
  
     },
  
     cache: false,
     contentType: false,
     processData: false,
  
 });
  
 });*/
  </script>
</html>
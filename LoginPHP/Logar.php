<!doctype html>
<?php require_once("Biblioteca/biblioteca.php");
require_once("PDO/conexao.php");
require_once('verificar.php');
?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajax Tests</title>
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
            font-size: 20px;
            width: 200px;
            font-weight: bolder;
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
        img{
            width: 100%;
            height: 100%;
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
        <?php
            echo $_SESSION['nome'];
            echo $_SESSION['celular'];
        ?>
        </h5>
        
    </header>
    <aside class="col-2 bg-dark">
        <div class="btns">
         
            <button type="button" class="btn btn-success" id="btn1" name="btn1" data-bs-toggle="modal" data-bs-target="#modalDeletar"><i class="bi bi-trash"></i>Deletar Livro</button>
            <button type="button" class="btn btn-primary" id="btn2" name="btn2" data-bs-toggle="modal" data-bs-target="#modalInserir"><i class="bi bi-minecart"></i></i>Inserir Livro</button>
            <button type="button" class="btn btn-warning" id="btn3" name="btn3" data-bs-toggle="modal" data-bs-target="#modalUpdate"><i class="bi bi-balloon-fill"></i>Atualizar Livro</button>
            <button type="button" class="btn btn-success" id="btn4" name="btn4" data-bs-toggle="modal" data-bs-target="#modalLer"><i class="bi bi-currency-dollar"></i>Ler Banco de Dados</button>
            <button type="button" class="btn btn-primary" id="btnLogout" name="btnLogout" onclick="LogOut()"><i class="bi bi-battery-charging"></i>LOGOUT</button>
            <button type="button" class="btn btn-warning" id="btn" name="btn"><i class="bi bi-browser-safari" ></i>Sexta Função AJAX</button>
        </div>
    </aside>
    <main class="col-10">
        
        <div class="img">
            <img src="imgs/senac.jpg" alt="">
        </div>
    </main>
    <footer class="bg-dark">
        <h5>Rodapé</h5>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  



<!-- Modal Deletar -->
<div class="modal fade" id="modalDeletar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Deletar Livro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex;">
            <label for="">ID do Livro: </label>
            <input type="text" id="idLivro" name="idLivro" placeholder="ID do Livro...">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btnDeletar" name="btnDeletar">Deletar</button>
        <div  id="mensagem" name="mensagem"></div>
            
      </div>
    </div>
  </div>
</div>



<!-- Modal Inserir -->
<div class="modal fade" id="modalInserir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-image: url('imgs/hope-house-press-leather-diary-studio-IOzk8YKDhYg-unsplash.jpg');">
  <div class="modal-dialog modal-lg" style="background-color: transparent; margin-top: 20vh; border: 3px solid black; border-radius: 20px;">
    <div class="modal-content" style="background-color: transparent;">
      <div class="modal-header" style="background-color: transparent;">
        <h1 class="modal-title fs-10" id="exampleModalLabel">Inserir Livro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex">
            <div class="GrandBox">
                <div class="box">
                    <label for="">Livro</label>
                    <input type="text" id="nomeLivro" name="nomeLivro">
                </div>
                <div class="box">
                    <label for="">Autor</label>
                    <input type="text" id="autor" name="autor">
                </div>
                <div class="box">
                    <label for="">Editora</label>
                    <input type="text" id="editora" name="editora">
                </div>
                <div class="box">
                    <label for="">Ano</label>
                    <input type="text" id="ano" name="ano">
                </div>
            </div>
            <div class="GrandBox">
                <div  id="mensagemInsert" name="mensagemInsert"></div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btnInserir">Inserir</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal Update -->
<!-- Modal -->
<div class="modal fade" id="modalUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-image: url('imgs/hope-house-press-leather-diary-studio-IOzk8YKDhYg-unsplash.jpg');">
  <div class="modal-dialog modal-lg" style="background-color: transparent;">
    <div class="modal-content" style="background-color: transparent; margin-top: 20vh; border: 3px solid black; border-radius: 10px;">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Atualizar Livro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex">
            <div class="GrandBox">
                <div class="box">
                    <label for="">ID do Livro: </label>
                    <input type="text" id="idUpBook" name="idUpBook">
                </div>
                <div class="box">   
                    <label for="">Livro:</label>
                    <input type="text" id="UpLivro" name="UpLivro">
                </div>
                <div class="box">
                    <label for="">Autor:</label>
                    <input type="text" id="UpAutor" name="UpAutor">
                </div>
                <div class="box">
                    <label for="">Editora:</label>
                    <input type="text" id="UpEditora" name="UpEditora">
                </div>
                <div class="box">
                    <label for="">Ano:</label>
                    <input type="text" id="UpAno" name="UpAno">
                </div>
            </div>
            <div class="GrandBox">
                <div id="mensagemUpdate" style="font-size: 20px; font-weight: Bolder;"></div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="btnUpdate" name="btnUpdate" class="btn btn-primary">Atualizar Livro</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal Ler -->
<div class="modal fade" id="modalLer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <table border 1px>
        <thead>
            <tr>
                <th>ID</th>
                <th>Codigo</th>
                <th>Nome do livro</th>
                <th>Ano</th>
                <th>Paginas</th>
                <th>Autor</th>
                <th>Editora</th>
            </tr>  
        </thead>
        <tbody>
            <?php

                $sql = "SELECT * FROM ibituruna.livros LIMIT 15";
                $queryLivros = $pdo->query($sql);
                $res = $queryLivros->fetchAll(PDO::FETCH_ASSOC);
                $linhas = @count($res);
                for($i = 0; $i <= $linhas-1; $i++){
                    $contagem = $i +1;
                                //montando a tabela
                    echo "<tr>";
                        echo "<td>" . $contagem . "</td>";
                        echo "<td>" . $res[$i]["id"] . "</td>";
                        echo "<td>" . $res[$i]["titulo"] . "</td>";
                        echo "<td>" . $res[$i]["ano"] . "</td>";
                        echo "<td>" . $res[$i]["n_de_p_ginas"] . "</td>";
                        echo "<td>" . $res[$i]["autor"] . "</td>";
                        echo "<td>" . $res[$i]["editora"] . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $("#btnDeletar").click(function() {
            event.preventDefault();

            //pegando as variáveis pgp na LIB Biblioteca
          
            var urlSistema = "<?= $url_sistema ?>";
            var idLivro = document.getElementById('idLivro').value;
            var dados = {
                id: idLivro,
            }

            $.ajax({
                url: urlSistema + "PDO/BooksDelete.php",
                type: 'POST',
                //Serializando o formulário com suas inputs em vetor
                data: dados,

                success:function (mensagem) {
                    console.log("O caminho do sistema é:" + urlSistema);
                    console.log("Retorno do PHP foi: " + mensagem);
                    $('#mensagem').text('');
                    $('#mensagem').text(mensagem);
                }

            })
        })
        $("#btnInserir").click(function() {
            event.preventDefault();

            //pegando as variáveis pgp na LIB Biblioteca
          
            var urlSistema = "<?= $url_sistema ?>";
            var nome = document.getElementById('nomeLivro').value;
            var autor = document.getElementById('autor').value;
            var editora = document.getElementById('editora').value;
            var ano = document.getElementById('ano').value;

            var dados = {
                livro: nome,
                autor: autor,
                editora: editora,
                ano: ano,
            }

            $.ajax({
                url: urlSistema + "PDO/BooksInsert.php",
                type: 'POST',
                //Serializando o formulário com suas inputs em vetor
                data: dados,

                success:function (mensagem) {
                    console.log("O caminho do sistema é:" + urlSistema);
                    console.log("Retorno do PHP foi: " + mensagem);
                    $('#mensagemInsert').text('');
                    $('#mensagemInsert').text(mensagem);
                }

            })
        })
        $("#btnUpdate").click(function() {
            event.preventDefault();

            //pegando as variáveis pgp na LIB Biblioteca
          
            var urlSistema = "<?= $url_sistema ?>";
            var idBook = document.getElementById('idUpBook').value;
            var nome = document.getElementById('UpLivro').value;
            var autor = document.getElementById('UpAutor').value;
            var editora = document.getElementById('UpEditora').value;
            var ano = document.getElementById('UpAno').value;
            
            if(idBook == "" || nome == "" || autor == "" || editora == "" || ano == ""){
                window.alert('Erro, Preencha os campos nescessários!')
            }else{
                    var dados = {
                    id: idBook,
                    livro: nome,
                    autor: autor,
                    editora: editora,
                    ano: ano,
                }
            

                $.ajax({
                    url: urlSistema + "PDO/BooksUpdate.php",
                    type: 'POST',
                    //Serializando o formulário com suas inputs em vetor
                    data: dados,

                    success:function (mensagem) {
                        console.log("O caminho do sistema é:" + urlSistema);
                        console.log("Retorno do PHP foi: " + mensagem);
                        $('#mensagemUpdate').text('');
                        $('#mensagemUpdate').text(mensagem);
                    }

                })
            }
        });
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
<!doctype html>
<html lang="pt-br">
<?php

require_once("../Biblioteca/biblioteca.php");

?> 
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
   

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- icones BootStrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <title>Iserindo Livro</title>
    <style type="text/css">

      .formulario{
        background-color: gray;
        width: 700px;
        height: 60vh;
        margin: 0;
        margin-top: 48px;
        padding: 0; 
        border-radius: 6px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; 
      }

      body{

        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;

      }
      .text-success{
        
        font-size: 32px;
        color: green;
        margin-top: 24px;
        border: 1px solid green;
        background-color: white;
        border-radius: 5px;
        padding: 12px;

      }
      .text-danger{

        font-size: 32px;
        color: red;
        margin-top: 24px;
        border: 1px solid red;
        background-color: white;
        border-radius: 5px;

      }
      .btn{
        margin-top: 48px;
      }
      label input{

        color: blue;
        
      }

    </style>
  </head>
  <body class="container">

    <h1 class="text-center mt-5" style="color:blue;">Usando AJAX no SENAC - MG</h1>
  
    <form  method="POST" id= "form" name="form" class="formulario  d-flex justify-content-center flex-column align-items-center">

    <div class="mb-3 row mt-4 col-12">
      <div class="col-sm-8">
        <input type="text" class="form-control fs-2" id="livro" name="livro" placeholder="Digite o nome do Livro">
        <input type="text" class="form-control fs-2" id="autor" name="autor" placeholder="Digite o Autor do Livro">
        <input type="text" class="form-control fs-2" id="editora" name="editora" placeholder="Digite a editora do Livro">
        <input type="text" class="form-control fs-2" id="ano" name="ano" placeholder="Digite o ano do Livro">
      </div>
    </div>
 
    <button type="submit" id="btn-deletar" name="btn-deletar"  class="btn btn-primary col-6 fs-2" >Adicionar o Livro <i class="bi bi-trash fs-2"></i></button>
    <div class="mensagem" id="mensagem" name="mensagem"></div>    

    </form>
    

    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
  <script type="text/javascript">
  //Quando o Form der SUBMIT - Primeira forma de usar o AJAX mais simples 
  $("#form").submit(function () {

    event.preventDefault();
    var formData = new FormData(this);

    //pegando Variáveis PHP na LIB Biblioteca
    
    var urlSistema = "<?= $url_sistema ?>";
    
    $.ajax({
        url: urlSistema  + "../PDO/InserirLivro.php",
        type: 'POST',
        data: formData,

        success: function (mensagem) {
            $('#mensagem').text('');
            $('#mensagem').removeClass();
            console.log = urlSistema;
            if (mensagem.trim() == "Registro Adicionado.") {

                //$('#btn-fechar').click();
                //listar();  
                $('#mensagem').addClass('text-success');
                $('#mensagem').text(mensagem);
                window.alert("Adicionado....");        

            } else {

                $('#mensagem').addClass('text-danger');
                $('#mensagem').text(mensagem);
            }


        },

        cache: false,
        contentType: false,
        processData: false,

    });

});



 </script>

</html>
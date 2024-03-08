<!DOCTYPE html>
<?php
    require_once('biblioteca.php');
    require_once('conexao.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <script 
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
</head>
<body>
    <input type="text" id="text">
    <button id="btn">Teste</button>
</body>
</html>

<script>
    $(document).ready(function() {
    //Preencher select Equipes
    $("#btn").click(function() {

      event.preventDefault();
      var competicao = document.getElementById('text').value;

      //Adicionando os dados em um vetor

      var valores = {
        buscaComp : competicao,
      }
      //pegando Variáveis PHP na LIB Biblioteca
      var urlSistema = "<?= $url_sistema ?>";
     
      $.ajax({
       
        url: urlSistema + "PDO/equipesCompeticao.php",
        type: 'POST',
        //Serializando o formulário com suas inputs em vetor
        data: valores,

        success: function(mensagem) {

        //   $('#cmbEqui').text('');
        //   $('#cmbEqui').removeClass();
        //   $('#cmbEqui').addClass('text-success');
        //   $('#cmbEqui').text(mensagem);
        //   document.getElementById('cmbEqui').innerHTML = mensagem;
          console.log(mensagem);


        },
        error: function(){

          console.log("Deu erro......");

        },
        cache: false,
        contentType: false,
       

      });

    });
    });
</script>
<!doctype html>
<html lang="pt-br" data-bs-theme="dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Estruturado MYSQL</title>
    <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

</head>

<body class="container">


  <footer>
    <img src="../images/senacMG.png" alt="">
  </footer>

  <button id="btnMostrar">Mostrar no Select</button>
  <select name="cmbTeste" id="cmbTeste"></select>


  <!-- Bootstrap JS -->
  <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- materialize JS -->
  <script type="text/javascript" src="../vendor/materialize/js/materialize.min.js"></script>
  <!-- JavaScript Arquivo -->




</body>


<script>
$('#btnMostrar').click(function() {//Pegando o momento em que o botão é clicado
    $('#btnMostrar').text('Saving ...')//Mudando o que está escrito no botão
    var codigo = "968840";//Pegando informações
    $.ajax({url: 'http://localhost/modeloEstruturadoPDO/PDO/listaCombo.php',//pegando url a onde será enviada as informações pelo o ajax
        type: 'POST', //falando que as informações serão enviadas via POST
        data: {  //Vetor data para armazenar as informações que serão enviadas ao arquivo PHP
          cod: codigo,
        },
        success: function(mensagem) {//Se a mensagem retornada for um sucesso execute os codigos seguintes
            $('#cmbTeste').text('Save the patterns')
            document.getElementById('cmbTeste').innerHTML = mensagem;
            console.log(mensagem);

        }
    })
    return false
})
</script>

</html>
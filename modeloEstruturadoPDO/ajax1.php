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
  $('#btnMostrar').click(function() {
 $('#btnMostrar').text('Suas Tarefas')
 var code = "968840";
 $.ajax({url: 'http://localhost/modeloEstruturadoPDO/PDO/listaCombo.php',
   type: 'POST', data: {cod: code},
   success: function(mensagem) {
    $('#cmbTeste').text(mensagem)
    document.getElementById('cmbTeste').innerHTML = mensagem;
    console.log(mensagem);
   }
 })
 return false
})
</script>

</html>
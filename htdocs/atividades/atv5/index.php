<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Codificação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="container d-flex justify-content-center align-items-center" style="width: 100vw; height: 100vh; background-image: url('https://cdn.pixabay.com/photo/2016/09/21/21/59/background-1685845_640.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div class="caixa" style="display: flex; flex-direction: column;">
        <form method="post" action="processamento.php" style="display: flex; flex-direction: column; justify-content: center; align-items: center; border: 5px solid black;">
            <h1 style="color: dark;">Programa Mistura de Palavras</h1>
            <p style="font-size: 30px; color: black;"> |Digite a frases desejada: |</p>
            <input type="text" name="frase1" style="width: 200px; height: 40px; font-size: 30px; text-align: center;">
            <button type="submit" class="btn btn-dark " style="width: 110px; height: 100px; margin-top: 10px; font-size: 20px;">Misturar palavras</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
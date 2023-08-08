<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="container d-flex justify-content-center align-items-center" style="width: 100vw; height: 100vh;">
    <div class="caixa" style="display: flex; flex-direction: column;">
        <form method="post" action="processamento.php" style="display: flex; flex-direction: column;">
            <h1>Fábrica de Estrelas</h1>
            <p>Número de Linhas:</p>
            <input type="text" name="linhas" style="width: 200px; height: 40px; font-size: 30px;">
            <button type="submit" class="btn btn-dark " style="width: 100px; height: 40px; margin-top: 10px;">Calcular</button>
        </form>
    </div>
    <div class="caixa"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
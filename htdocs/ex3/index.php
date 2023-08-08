<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/index.css">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="container d-flex justify-content-center align-items-center" style="width: 100vw; heigth: 100vh; ">
    <main class="container d-flex flex-column justify-content-center align-items-center border border-5 border-dark bg-secondary" id="resultado" style="width: 680px; height: 600px; margin: 300px; background-image: url('https://solteapalavra.com.br/wp-content/uploads/2023/03/Medidas-de-temperatura-1024x682.jpg'); background-size: cover;">
      <div class="container d-flex justify-content-center">
          <div class="row">
            <div class="col p-4">
              <div class="card text-dark bg-secondary-subtle">
                <div class="card-body d-flex align-items-center justify-content-center ">
                    <form method="post" action="calculo.php">
                      <p style="font-size: 30px;">Qual a temperatura em Farenheit: </p>
                      <input type="text" name="temperatura" placeholder="Digite a Temperatura..." style="font-size: 30px;">
                      <button type="submit" class="btn btn-dark ">Calcular</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
      </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
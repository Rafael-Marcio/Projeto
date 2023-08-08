<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/index.css">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="container">
    <main class="container d-flex flex-column justify-content-center align-items-center border border-5 border-dark" id="resultado">
      <div class="container d-flex justify-content-center">
          <div class="row">
            <div class="col p-4">
              <div class="card bg-dark border border-danger border-5 ">
                <div class="card-body d-flex align-items-center justify-content-center ">
                    <form method="post" action="calcular.php">
                      <p>Peso: </p>
                      <input type="text" name="peso">
                      <p>Altura: </p>
                      <input type="text" name="altura">
                      <button type="submit" class="btn btn-primary border border-top-dark border-5">Calcular</button>
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
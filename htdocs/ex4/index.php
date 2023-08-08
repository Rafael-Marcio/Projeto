<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="container " style="width: 100vw; heigth: 100vh; display: flex; align-items:center; justify-content: center;"> 
    <main class="container bg-secondary" style="width: 80%; height: 30vh; border: 5px solid black; background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9Mn6OfDsmhliDUSFfK3a2ziF4EHKaBG-To3QsUAxP8PiYSDw6eJg0QzJ2GOFkrvwNv4g&usqp=CAU'); background-size: cover; background-repeat: no-repeat;">
        <div class="container d-flex" style="margin-top: 55px;">
            <div class="container d-flex flex-direction align-items-center justify-content-center" style="width: 90%; height: 50%;">
                <form method="post" action="processamento.php" style="margin-top: 40px;">
                    <div class="input-group flex-nowrap">
                        <input type="text" name="palavra" placeholder="Digite a fruta desejada..."  style="width: 90%; height: 100%; margin-bottom: 30px;">
                    </div>
                    <div class="input-group flex-nowrap">
                        <input type="text" name="numero" placeholder="Digite a repetição..." style="width: 90%; height: 100%; margin-bottom: 30px;" >
                    </div>
                    <button type="submit" class="btn btn-dark " style="width: 100px; height: 40px; margin-top: 10px;">Calcular</button>
                </form>
            </div>
        </div>
    <main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
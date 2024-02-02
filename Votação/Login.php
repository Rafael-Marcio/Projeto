<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <style>
      body{
        width: 100vw;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-image: url('imgs/milad-fakurian-6zF2CgAZVXY-unsplash.jpg');
      }
      .box{
        width: 30%;
        height: 50%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
        background-color: transparent;
        
      }
      button{
        width: 200px;
        height: 60px;
        margin-left: 34px;
        margin-right: 34px;
        font-size: 58px;
        background-color: transparent;
        color: white;
      }
      #title{
        color: white;
        font-weight: bolder;
      }
      label{
        width: 200px;
        font-size: 24px;
        color: white;
      }
      h1{
        color: white;
      }
      imput{
        font-size: 20px;
      }
      .box1{
        margin: 24px;
      }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="box" >
    <h1 id="title">LOGIN</h1>
      <div class="box1" style="width: 100%; height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <button type="submit" data-bs-toggle="modal" data-bs-target="#modalLogar" style="font-size: 30px;">LOGAR</button>
      </div> 
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    
    <!-- Modal Logar -->
    <div class="modal fade" id="modalLogar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style=" background-image: url('imgs/rico-horn-H4HXsojvvOU-unsplash.jpg');">
      <div class="modal-dialog modal-lg" style="width: 100vw; height: 100vh; display: flex; justify-content: center; align-items: center; ">
        <div class="modal-content" style="background-color: rgba(0, 0, 0, 0.507); border: 2px solid white;">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white;"> Logar</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form method="post" action="autenticar.php" class="modal-body d-flex;">
              <div class="box1">
                <label for="">E-mail: </label>
                <input type="text" id="email" name="email" placeholder="E-mail...">
              </div> 
              <div class="box1">
                <label for="">Senha: </label>
                <input type="password" id="senha" name="senha" placeholder="Senha...">
              </div> 
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="btnLogar" name="btnLogar">Logar</button>
                    
              </div>
          </div>
          
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
 
</html>
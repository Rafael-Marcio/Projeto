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
        background-image: url('https://images.unsplash.com/photo-1487088678257-3a541e6e3922?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
      }
      .box{
        width: 30%;
        height: 50%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border: 2px solid black;
        border-radius: 10px;
        background-color: rgba(255, 255, 255, 0.253);
      }
      .box1{
        width: 30%;
        height: 20%;
        margin: 20px;
      }
      button{
        width: 100px;
        height: 40px;
        margin-top: 34px;
        font-size: 24px;
      }
      label{
        font-size: 26px;
        font-weight: bolder;
        margin: 5px;
        padding-top: 14px;
        padding-left: 30px;
      }
      #title{
        color: rgb(1, 1, 115);
        font-weight: bolder;
      }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 id="title">LOGIN</h1>
    <form class="box" method="POST" action="autenticar.php">
      <div class="box1">
        <label for="">Email:</label>
        <input type="text" id="email" name="email" placeholder="Digite seu email...">
      </div>
      <div class="box1">
        <label for="">Senha:</label>
        <input type="password" id="senha" name="senha" placeholder="Digite seu senha...">
      </div>
      <button type="submit" data-bs-toggle="modal" data-bs-target="#btnLogarModal">LOGAR</button>
    </form>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    
</html>
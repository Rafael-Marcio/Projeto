<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabuada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  </head>
  <body class="container d-flex justify-content-center align-items-center" style="width: 100vw; height: 100vh; background-image: url('https://images.unsplash.com/photo-1565252556332-4b297517b501?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDV8fGZ1bmRvJTIwcHJldG98ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60'); background-repeat: no-repeat; background-size: cover;">
    <div class="caixa" style="width: 1000px; heigth: 900px; display: flex; flex-direction: column; text-align: center;">
        <h1 style="color: white;">Programa Média</h1>
        <form method="post" style="width: 300xp; heigth: 900px; display: flex; flex-direction: column; justify-content: center; align-items: center; border: 5px solid black; color: white;">
            <div class="entry">
                <input type="number" name="number1" style="width: 200px; height: 40px; font-size: 30px; text-align: center; margin: 10px;">
            </div>
            
            <div class="butons">
                <button type="button" id="btnprocessar1" class="btn btn-light " style="width: 170px; height: 80px; margin-top: 100px; font-size: 20px; margin-bottom: 10px;">Calcular</button>
            </div>
            <div class="mensagem" id="mensagem" name="mensagem" style="widht: 300px; height: 100px; color: white; font-size: 30px; border: 5px solid black; display: flex; align-items: center; text-align: center;"></div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
  <script type="text/javascript">
   $(document).ready(function(){
        $('#btnprocessar1').click(function(e){
          //Não permite a atualização (Refresh da página)
          e.preventDefault();
          $.ajax({
            url: "processamento.php",
            method: "post",
            data: $("form").serialize(),
            dataType: "text",
            success: function(mensagem){
              //mostra a mensagem na tela
              $("#mensagem").text(mensagem);//dic com id="mensagem"
              //window.alert
            },
          });
        });
    });
  </script>
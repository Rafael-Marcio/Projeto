<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body{
            background-color: black;
            background-image: url('https://images.unsplash.com/photo-1517241034903-9a4c3ab12f00?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .box{
            width: 830px;
            height: 560px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: gray;
            font-size: 30px;
            border: 5px solid gray;
            border-radius: 20px;
            padding: 24px;
            
        }
        hr{
            width: 80%;
        }
        input{
            width: 200px;
            height: 30px;
            font-size: 18px;
            margin: 5px;
            border-radius: 10px;
        }
        button{
            width: 250px;
            height: 80px;
            font-size: 20px;
            margin: 10px;
            border-radius: 10px;
            background-color: transparent;
            color: white;
            padding: 24px;
        }
        .box2{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px;
        }
        label{
            width: 200px;
            font-weight: bold;
        }
        img{
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <form method="GET" class="box">
        <div class="box2">
            <label for="">Livro:</label>
            <input type="text" placeholder="Nome do Livro">
        </div>
        <div class="box2">
            <label for="">Lançamento:</label>
            <input type="text" placeholder="Ano de Lançamento">
        </div>
        <div class="box2">
            <label for="">Editora:</label>
            <input type="text" placeholder="Editora">
        </div>
        <div class="box2">
            <label for="">Autor:</label>
            <input type="text" placeholder="autor">
        </div>
        <div class="box2">
            <label for="">Classificação:</label>
            <input type="text" placeholder="classificação">
        </div>
            <button><img src="../imgs/salve-.png" alt="">Salvar</button>
        <div class="box2" style="flex-direction: column;">
            <input type="text" id="id" name="id">
            <button type="submit"><img src="../imgs/bin.png" alt="">Deletar</button>
        </div>
        
        
    </form>
    <form method="GET" class="box">
        <div class="box2" style="flex-direction: column;">
                <input type="text" id="id2" name="id2">
                <button type="button" onclick="Deletar()"><img src="../imgs/bin.png" alt="">Deletar</button>
        </div>
    </form>
</body>
<script type="text/javascript">

    
    function Deletar(){
        console.log("Teste");
        var id = $['#id2'] . val();
        window.location.replace("http://localhost/modelo/PDO/DeletarLivro.php?id="+id2);
        
    }



</script>
</html>

        
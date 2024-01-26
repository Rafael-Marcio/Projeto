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
            height: 660px;
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
            <input id="livro" name="livro" type="text" placeholder="Nome do Livro">
        </div>
        <div class="box2">
            <label for="">Lançamento:</label>
            <input id="ano" name="ano" type="text" placeholder="Ano de Lançamento">
        </div>
        <div class="box2">
            <label for="">Editora:</label>
            <input id="editora" name="editora" type="text" placeholder="Editora">
        </div>
        <div class="box2">
            <label for="">Autor:</label>
            <input id="autor" name="autor" type="text" placeholder="autor">
        </div>
        
            <button type="submit" id="btnInserir" name="btnInserir"><img src="../imgs/salve-.png" alt="">Salvar</button>
        <div class="box2" style="flex-direction: column;">
            <input type="text" id="id" name="id">
            <button id="btnDelete" name="btnDelete" type="submit"><img src="../imgs/bin.png" alt="">Deletar</button>
            <button id="btnContar" name="btnContar" type="submit"><img src="../imgs/livro-magico.png" alt="">Contar</button>
            <button id="btnAtualizar" name="btnAtualizar" type="submit"><img src="../imgs/livro-magico.png" alt="">Atualizar</button>
        </div>
        
        
    </form>
</body>
<script type="text/javascript">

        //Deletar
        const btnDelete = document.querySelector('#btnDelete');
        const id = document.getElementById("id");
        btnDelete.addEventListener('click', (ev) => {

            ev.preventDefault();
            let idLivro = id.value;
            window.location.replace(`http://localhost/modelo/PDO/DeletarLivro.php?id=${idLivro}`);
        })

        //Contar Livros
        const btnContar = document.querySelector('#btnContar');
        btnContar.addEventListener('click', (ev) => {
            ev.preventDefault();
            window.location.replace(`http://localhost/modelo/PDO/contarLivros.php`);
        })
        
        //Inserir Livros
        const btnInserir = document.querySelector('#btnInserir');
        const livros = document.getElementById("livro");
        const anos = document.getElementById("ano");
        const editoras = document.getElementById("editora");
        const autors = document.getElementById("autor");

        btnInserir.addEventListener('click', (ev) => {

            ev.preventDefault();
            
           
            let titulo = livros.value;
            let ano = anos.value;
            let editora = editoras.value;
            let autor = autors.value;
            window.location.replace(`http://localhost/modelo/PDO/InserirLivro.php?livro=${titulo}&ano=${ano}&editora=${editora}&autor=${autor}`);
        })

        //Atualizar Livros
        const btnAtualizar = document.querySelector('#btnAtualizar');
        const ids = document.getElementById("id");
        const livro = document.getElementById("livro");
        const ano = document.getElementById("ano");
        const editora = document.getElementById("editora");
        const autor = document.getElementById("autor");

        btnAtualizar.addEventListener('click', (ev) => {

            ev.preventDefault();

            let idLivro = ids.value;
            let titulo = livro.value;
            let ano = anos.value;
            let editora = editoras.value;
            let autor = autors.value;
            window.location.replace(`http://localhost/modelo/PDO/atualizarLivros.php?id=${idLivro}&livro=${titulo}&ano=${ano}&editora=${editora}&autor=${autor}`)
        });
</script>
</html>

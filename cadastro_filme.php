<?php
    include_once('conexao.php');

    //recuperando os dados do formulário
    $titulo = $_POST['titulo'];
    $sinopse = $_POST['sinopse'];
    $genero = $_POST['genero'];
    $data_lancamento = $_POST['data_lancamento'];
    $duracao = $_POST['duracao'];

    //fazendo o insert na tabela
    $sql_filme = "insert into filme (titulo, sinopse, genero, data_lancamento, duracao) values ('$titulo',
                    '$sinopse', '$genero', '$data_lancamento', '$duracao');"; 

    //executando o insert na tabela
    $resultado_filme = mysqli_query($conn, $sql_filme);
?>
<!DOCTYPE htlm>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Cadastro | FATECINE</title>
</head>
<body>
    <div class="box">
        <fieldset>
            <legend><b>CADASTRO</b></legend><br>
            <h1 align='center'>Cadastro conluído</h1>
            <a href="index.php"><button class="botao">Voltar</button></a><br><br>
        </fieldset>
    </div>
</body>
</html>
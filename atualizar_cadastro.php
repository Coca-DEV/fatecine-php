<?php
    include_once('conexao.php');

    //recuperando os dados do formulário
    $idFilme = $_POST['idFilme'];
    $titulo = $_POST['titulo'];
    $sinopse = $_POST['sinopse'];
    $genero = $_POST['genero'];
    $dataLancamento = $_POST['dataLancamento'];
    $duracao = $_POST['duracao'];
    echo $idFilme;

    //fazendo o insert na tabela
    $sql_atualizar_cad = ("UPDATE filme SET titulo='$titulo', sinopse='$sinopse', genero='$genero', data_lancamento='$dataLancamento', 
                            duracao='$duracao' WHERE id='$idFilme'");

    //executando o insert na tabela
    $resultado_filme = mysqli_query($conn, $sql_atualizar_cad);
?>
<!DOCTYPE htlm>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Atualizar Cadastro | FATECINE</title>
</head>
<body>
    <div class="box">
        <fieldset>
            <legend><b>CADASTRO</b></legend><br>
            <h1 align='center'>Cadastro atualizado</h1>
            <a href="exibicao_filme.php"><button class="btnGenerico">Voltar</button></a><br><br>
        </fieldset>
    </div>
</body>
</html>
<?php

    include_once('conexao.php');

    //recuperando os dados do formulário
    $titulo = $_POST['titulo'];
    $sinopse = $_POST['sinopse'];
    $genero = $_POST['genero'];
    $data_lancamento = $_POST['data_lancamento'];
    $duracao = $_POST[''];

    //
    $sql_filme = "insert into filme (titulo, sinopse, genero, data_lancamento, duracao) values ('$titulo',
                    'sinopse', 'genero', 'data_lancamento', 'duracao');"; 
?>
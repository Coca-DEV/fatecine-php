<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Filme | FATECINE</title>
</head>
<body>
    <div class="box">
        <fieldset>
            <legend><b>FILME</b></legend>
            <?php
                include_once('conexao.php');

                $sql_lista_filmes = "select * from filme order by idFilme desc";
                $resultado = mysqli_query($conn, $sql_lista_filmes);

                if (mysqli_num_rows($resultado)!=0){
                    echo '<form method="POST" action="exibicao_filme.php">';
                    echo '<select name="listBox" class="listFilmes">
                    <option value="" selected="selected">Escolha um filme</option>';

                    while($elemento = mysqli_fetch_array($resultado)){
                        $nomeFilme = $elemento['titulo'];
                        echo '<option value="'.$nomeFilme.'">'.$nomeFilme.'</option>';
                    }

                    echo '</select>';
                    echo '<input type="submit" id="btnConsulta" value="Consultar">';
                    echo '</form>';
                }
            ?>
            <br><br>
            <form method="POST" action="cadastro_filme.php">
                <div class="inputBox">
                    <input type="text" name="titulo" class="inputUser" required>
                    <label for="titulo" class="labelInput">Título</label>
                </div><br><br>
                <div class="inputBox">
                    <textarea name="sinopse" class="inputUser" required></textarea>
                    <label for="sinopse" class="labelInput">Sinopse</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="genero" class="inputUser" required>
                    <label for="genero" class="labelInput">Gênero</label>
                </div><br><br>
                <div class="inputBox">
                    <label for="data_lancamento"><b>Data de lançamento:</b></label>
                    <input type="date" name="dataLancamento" id="dataLancamento" required>
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="duracao" class="inputUser" required>
                    <label for="duracao" class="labelInput">Duração</label>
                </div><br><br>
                <input type="submit" class="btnGenerico" value="Cadastrar">
            </form>
        </fieldset>
    </div>
</body>
</html>
<?php
    include_once('conexao.php');

    $nomeFilme = $_POST['listBox'];
    echo $nomeFilme;

    $sql = "select * from filme where titulo='$nomeFilme';";
    $resultado = mysqli_query($conn, $sql);
    $elemento = mysqli_fetch_array($resultado);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Exibição Filme | FATECINE</title>
</head>
<body>
    <div class="box">
        <fieldset>
            <legend><b>FILME</b></legend><br>
            <form action="atualizar_cadastro.php" method="POST">
                <div class="inputBox">
                    <input type="text" name="titulo" class="inputUser" value="<?php echo $elemento['titulo'];?>">
                    <label for="titulo" class="labelInput">Título</label>
                </div><br><br>
                <div class="inputBox">
                    <textarea name="sinopse" class="inputUser"><?php echo $elemento['sinopse'];?></textarea>
                    <label for="sinopse" class="labelInput">Sinopse</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="genero" class="inputUser" value="<?php echo $elemento['genero'];?>">
                    <label for="genero" class="labelInput">Gênero</label>
                </div><br><br>
                <div class="inputBox">
                    <label for="data_lancamento"><b>Data de lançamento:</b></label>
                    <input type="text" name="data_lancamento" id="data_lancamento" value="<?php echo $elemento['data_lancamento'];?>">
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="duracao" class="inputUser" value="<?php echo $elemento['duracao'];?>">
                    <label for="duracao" class="labelInput">Duração</label>
                </div><br><br>
                <a href="index.php"><input class="btnExibicao" value="Voltar"></a>
                <input class="btnExibicao" value="Alterar">
            </form>
        </fieldset>
    </div>
</body>
</html>
<?php
    include_once('conexao.php');

    $nomeFilme = $_POST['listBox'];

    $sql = "select * from filme where titulo='$nomeFilme';";
    $resultado = mysqli_query($conn, $sql);
    $elemento = mysqli_fetch_array($resultado);

    $nomeFilme = $elemento['titulo'];
    $sinopseFilme = $elemento['sinopse'];
    $generoFilme = $elemento['genero'];
    $dataFilme = $elemento['data_lancamento'];
    $duracaoFilme = $elemento['duracao'];
?>
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
            <legend><b>FILME</b></legend><br>
                <div class="inputBox">
                    <input type="text" name="titulo" class="inputUser" value="<?php echo $nomeFilme?>">
                    <label for="titulo" class="labelInput">Título</label>
                </div><br><br>
                <div class="inputBox">
                    <textarea name="sinopse" class="inputUser"><?php echo $sinopseFilme?></textarea>
                    <label for="sinopse" class="labelInput">Sinopse</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="genero" class="inputUser" value="<?php echo $generoFilme?>">
                    <label for="genero" class="labelInput">Gênero</label>
                </div><br><br>
                <div class="inputBox">
                    <label for="data_lancamento"><b>Data de lançamento:</b></label>
                    <input type="text" name="data_lancamento" id="data_lancamento" value="<?php echo $dataFilme ?>">
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="duracao" class="inputUser" value="<?php echo $duracaoFilme?>">
                    <label for="duracao" class="labelInput">Duração</label>
                </div><br><br>
                <a href="index.php"><input class="btnExibicao" value="Voltar"></a>
                <input class="btnExibicao" value="Alterar">
            </form>
        </fieldset>
    </div>
</body>
</html>
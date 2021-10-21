<?php
    include_once('conexao.php');

    $nomeFilme = $_POST['listBox'];

    $sql = "select * from filme where titulo='$nomeFilme';";
    $resultado = mysqli_query($conn, $sql);
    $elemento = mysqli_fetch_array($resultado);
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
                    <input type="text" name="titulo" class="inputUser" required>
                    <label for="titulo" class="labelInput">$elemento['titulo']</label>
                </div><br><br>
                <div class="inputBox">
                    <textarea name="sinopse" class="inputUser" required></textarea>
                    <label for="sinopse" class="labelInput">'.$elemento['sinopse'].'</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="genero" class="inputUser" required>
                    <label for="genero" class="labelInput">'.$elemento['genero'].'</label>
                </div><br><br>
                <div class="inputBox">
                    <label for="data_lancamento"><b>Data de lançamento:</b></label>
                    <input type="date" name="data_lancamento" id="data_lancamento" required>
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="duracao" class="inputUser" required>
                    <label for="duracao" class="labelInput">'.$elemento['duracao'].'</label>
                </div><br><br>
                <a href="index.php"><input class="submit" value="Voltar"></a>
                <input class="submit" value="Alterar">
            </form>
        </fieldset>
    </div>
</body>
</html>
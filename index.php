<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Filme | FATECINE</title>
</head>
<body>
    <div class="box">
        <form method="POST" action="cadastro_filme.php">
            <fieldset>
                <legend><b>FILME</b></legend><br>
                <div class="inputBox">
                    <input type="text" name="titulo" class="inputUser" required>
                    <label for="titulo" class="labelInput">Título</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="sinopse" class="inputUser" required>
                    <label for="sinopse" class="labelInput">Sinopse</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="genero" class="inputUser" required>
                    <label for="genero" class="labelInput">Gênero</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="data_lancamento" class="inputUser" required>
                    <label for="data_lancamento" class="labelInput">Data de lançamento</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="duracao" class="inputUser" required>
                    <label for="duracao" class="labelInput">Duração</label>
                </div><br><br>
                <input type="submit" class="submit" value="Criar">
            </fieldset>
        </form>
    </div>
</body>
</html>
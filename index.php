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
            <select id="filme" name="filme">
                <option value=""></option>
                <option value="0">Action</option>
                <option value="1">Drama</option>
                <option value="2">Comedy</option>
                <option value="3">Science</option>
            </select><input type="submit" value="Consultar" id="consulta"><br><br><br>
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
                    <input type="date" name="data_lancamento" id="data_lancamento" required>
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="duracao" class="inputUser" required>
                    <label for="duracao" class="labelInput">Duração</label>
                </div><br><br>
                <input type="submit" class="submit" value="Cadastrar">
                <input type="submit" class="submit" value="Alterar">
            </form>
        </fieldset>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
</head>
<body>
    <h2>Cadastro de Telefone</h2>
    <form action="cad_telefone.php" method="post">
        <label for="idTel">ID do Telefone:</label>
        <input type="text" id="idTel" name="idTel" required>

        <label for="ddd">DDD:</label>
        <input type="text" id="ddd" name="ddd" required>

        <label for="numero">Número:</label>
        <input type="text" id="numero" name="numero" required>

        <label for="descricao">Descrição:</label>
        <input type="text" id="descricao" name="descricao" required>

        <label for="cpfProf">CPF do Professor:</label>
        <input type="text" id="cpfProf" name="cpfProf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="000.000.000-00" required>

        <button type="submit">Cadastrar</button>
        <button type="reset" class="clear-button">Limpar</button>
    </form>
</body>
</html>
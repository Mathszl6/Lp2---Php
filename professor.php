<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
</head>
<body>
    <h2>Cadastro de Professores</h2>
    <form action="cad_professores.php" method="post">
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="000.000.000-00" required>

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="dataNasc">Data de Nascimento:</label>
        <input type="date" id="dataNasc" name="dataNasc" required>

        <label for="salario">Salario:</label>
        <input type="text" id="salario" name="salario" required>

        <button type="submit">Cadastrar</button>
        <button type="reset" class="clear-button">Limpar</button>
    </form>
</body>
</html>
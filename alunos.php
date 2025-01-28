<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
</head>
<body>
    <h2>Cadastro de Alunos</h2>
    <form action="cad_alunos.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="matricula">Matricula:</label>
        <input type="text" id="matricula" name="matricula" required>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="000.000.000-00" required>

        <label for="dataNasc">Data de Nascimento:</label>
        <input type="date" id="dataNasc" name="dataNasc" required>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>

        <button type="submit">Cadastrar</button>
        <button type="reset" class="clear-button">Limpar</button>
    </form>
</body>
</html>
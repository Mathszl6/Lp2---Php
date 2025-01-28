<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
</head>
<body>
    <h2>Cadastro de Disciplinas</h2>
    <form action="cad_disciplina.php" method="post">
        <label for="codigo">Código:</label>
        <input type="text" id="codigo" name="codigo" required>

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="ch">Carga Horária:</label>
        <input type="text" id="ch" name="ch" required>

        <label for="ementa">Ementa:</label>
        <input type="text" id="ementa" name="ementa" required>

        <label for="curso">Curso:</label>
        <input type="text" id="curso" name="curso" required>

        <button type="submit">Cadastrar</button>
        <button type="reset" class="clear-button">Limpar</button>
    </form>
</body>
</html>
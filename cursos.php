<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
</head>
<body>
    <h2>Cadastro de Cursos</h2>
    <form action="cad_cursos.php" method="post">
        <label for="codigo">Código:</label>
        <input type="text" id="codigo" name="codigo" required>

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="ch">Carga Horária:</label>
        <input type="text" id="ch" name="ch" required>

        <label for="modalidade">Modalidade:</label>
        <input type="text" id="modalidade" name="modalidade" required>

        <label for="num_vagas">Número de Vagas:</label>
        <input type="number" id="num_vagas" name="num_vagas" required>

        <label for="coordenador">Coordenador:</label>
        <input type="text" id="coordenador" name="coordenador" required>

        <button type="submit">Cadastrar</button>
        <button type="reset" class="clear-button">Limpar</button>
    </form>
</body>
</html>
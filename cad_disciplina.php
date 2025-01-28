<?php 
$conexao = mysqli_connect('localhost', 'root', '', 'escola');

$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$ch = $_POST['ch'];
$ementa = $_POST['ementa'];
$curso = $_POST['curso'];

$sql ="INSERT INTO disciplina(codigo,nome,ch,ementa,curso)values('$codigo','$nome','$ch','$ementa','$curso')";

$retorno = mysqli_query($conexao,$sql);
echo 'Disciplina cadastrado com sucesso!';
?>
<hr>
<a href="disciplina.php">Tela inicial</a>